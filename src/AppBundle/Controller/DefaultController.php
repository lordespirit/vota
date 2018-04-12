<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use AppBundle\Entity\Usuari;
use AppBundle\Entity\Resposta;
use AppBundle\Entity\Enquesta;

// Importació per al form i registre d'usuaris
use AppBundle\Form\UsuariType;
use AppBundle\Form\EnquestaType;
use AppBundle\Form\EnquestaTypeEdicio;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Symfony\Component\Security\Core\User\UserInterface;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('principal.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
	
	 /**
     * @Route("/destacats", name="destacats")
     */
    public function destacatsAction(Request $request)
    {
	
	$sql = " 
        SELECT *
          FROM v_destacats
    ";

    $em = $this->getDoctrine()->getManager();
    $stmt = $em->getConnection()->prepare($sql);
    $stmt->execute();	

	$destacats = $stmt->fetchAll();

    $response = new Response(json_encode($destacats,JSON_PRETTY_PRINT));
    $response->headers->set('Content-Type', 'application/json');

    return $response;

  }
  
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils)
    {

		// Recupera el servicio de autenticación
		//  $authenticationUtils = $this->get('security.authentication_utils');

		   // Recupera, si existe, el último error al intentar hacer login
		   $error = $authenticationUtils->getLastAuthenticationError();

		   // Recupera el último nombre de usuario introducido
		   $lastUsername = $authenticationUtils->getLastUsername();

		   // Si hi ha error, tornem un flash a la bossa d'errors
		   if(!empty($error)){
			   
			   	$this->addFlash('error', 'Usuari o credencials incorrectes');
				return $this->redirectToRoute('homepage');
			   
		   }else{
			    
				return $this->redirectToRoute('homepage');

		   }

		  

	}
	
	/**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(Request $request)
    {
			// No usar
	}
	
	/**
	* @Route("/administracioCreacio", name="administracioCreacio")
	*/
    public function administracioCreacioAction(Request $request)
    {
		$enquesta = new Enquesta();
		$form = $this->createForm(EnquestaType::class);
		
		
		// Agafem les dades, només val el tipus POST)
        $form->handleRequest($request);
		
        if ($form->isSubmitted() && $form->isValid()) {

			// Obtenim la data del formulari
			$enquesta =  $form->getData();
			
			
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($enquesta);
            $entityManager->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

			$this->addFlash('success', 'Enquesta creada amb la ID '.$enquesta->getID());
            return $this->redirectToRoute('administracio');
			
	   }
		
		return $this->render('administracioCreacio.html.twig', array(
			"form"=>$form->createView()
		));
	}
	
	/**
	* @Route("/editarEnquesta", name="editarEnquesta")
	*/
	public function editarEnquestaAction(Request $request)
        {
		
		$id = (int)$request->get("id");
		
		if (!$id) {
			$this->addFlash('error', 'Es necessari el paràmetre ID');
		}
	
		// Validem si existeix l'ID a la base de dades
		$em = $this->getDoctrine()->getEntityManager();
		$enquesta = $em->getRepository('AppBundle:Enquesta')->find($id);
		if (!$enquesta){
			$this->addFlash('error', 'Enquesta amb id '.$enquesta->getID().' no existeix');
		}
		
		$form = $this->createForm(EnquestaTypeEdicio::class,$enquesta);
		
		// Agafem les dades, només val el tipus POST)
        $form->handleRequest($request);
		
		
		if ($form->isSubmitted() && $form->isValid()) {
			// Ja tinc les dades
			
			// Obtenim la data del formulari
			$enquesta =  $form->getData();
			
			// Comprovem que sigui vàlid
			if ($form->isValid()){
				// I actualitzem la base de dades (no persist! no es nou registre)
				$em->flush();
				$this->addFlash('success', 'Enquesta '.$enquesta->getID().' editada correctament');
				return $this->redirectToRoute('administracio');
			}
		}

		// Primer de tot mostrem al usuari que vol editar
		return $this->render('administracioEdicio.html.twig', array(
            'form'		=>	$form->createView(),
			'id'		=>	$enquesta->getId(),
			'enquesta'	=>	$enquesta
        ));
    }
	
	/**
     * @Route("/llistatAdministracio", name="llistatAdministracio")
     */
    public function llistatAdminAction(Request $request)
    {
	
		
	$sql = " 
		SELECT 	e.id,
				e.pregunta,
				SUM(IF(r.valor=1,1,0)) AS SI,
				SUM(IF(r.valor=0,1,0)) AS NO,
				if( e.data_final > CURDATE() AND CURDATE() > e.data_inici ,1,0) AS activa,
				e.destacada,
				e.data_inici,
				e.data_final
		FROM enquesta e
		LEFT JOIN resposta r
		ON e.id=r.id_enquesta
		GROUP BY e.id,
				e.pregunta,
				e.id
    ";

    $em = $this->getDoctrine()->getManager();
    $stmt = $em->getConnection()->prepare($sql);
    $stmt->execute();	

	$destacats = $stmt->fetchAll();

    $response = new Response(json_encode($destacats,JSON_PRETTY_PRINT));
    $response->headers->set('Content-Type', 'application/json');

    return $response;
		
	}
	
	/**
     * @Route("/llistat", name="llistat")
     */
    public function llistatAction(Request $request,UserInterface $user)
    {
	
    $userId = $user->getId(); 
		
	$sql = " 
        SELECT		e.id,
					e.pregunta,
					if( e.data_final > CURDATE() AND CURDATE() > e.data_inici ,1,0) AS activa,
					if( r.id_usuari>=1,1,0) AS votat,
					if( datediff(e.data_final,CURDATE())<=3 AND e.data_final > CURDATE(),1,0) as lastcall
				FROM enquesta e
				LEFT JOIN resposta r
				ON e.id = r.id_enquesta
				AND r.id_usuari = $userId
				GROUP BY e.id,e.pregunta
    ";

    $em = $this->getDoctrine()->getManager();
    $stmt = $em->getConnection()->prepare($sql);
    $stmt->execute();	

	$destacats = $stmt->fetchAll();

    $response = new Response(json_encode($destacats,JSON_PRETTY_PRINT));
    $response->headers->set('Content-Type', 'application/json');

    return $response;
		
	}
	

	/**
     * @Route("/enquesta", name="enquesta")
     */
    public function enquestaAction(Request $request,UserInterface $user)
    {
	
    $userId = $user->getId(); 

    $id_enquesta = json_decode($request->getContent(), true);
    
	
	$sql = " 	
			SELECT 	e.id,
					e.pregunta,
					e.data_inici,
					e.data_final,
					SUM(IF(r.valor=1,1,0)) AS SI,
					SUM(IF(r.valor=0,1,0)) AS NO,
					if( e.data_final > CURDATE() AND CURDATE() > e.data_inici ,1,0) AS activa
			FROM enquesta e
			LEFT JOIN resposta r
			ON e.id=r.id_enquesta
			GROUP BY e.id,
					e.pregunta,
					e.data_inici,
					e.data_final,
					e.id
			HAVING e.id = $id_enquesta
			";

    $em = $this->getDoctrine()->getManager();
    $stmt = $em->getConnection()->prepare($sql);
    $stmt->execute();	
	$infoEnquesta = $stmt->fetchAll();
	
		$sql = " 	
			SELECT 	
				IF(COUNT(id_usuari)=0,0,1) AS VOTAT,
				valor AS VALOR
			FROM resposta 
			WHERE id_usuari = $userId
			AND id_enquesta = $id_enquesta
		";
		
	$em->flush();

    $em = $this->getDoctrine()->getManager();
    $stmt = $em->getConnection()->prepare($sql);
    $stmt->execute();	
	$infoVotat = $stmt->fetchAll();

	$em->flush();

	$response = new Response(json_encode(array_merge($infoVotat,$infoEnquesta)));
	$response->headers->set('Content-Type', 'application/json');

    return $response;
		
	}	
		
	
	/**
     * @Route("/votar", name="votar")
     */
    public function votarAction(Request $request,UserInterface $user)
    {
	try {
		//Recoger POST
		$id_enquesta = (int)$request->get("id_enquesta");
		$vot		 = (int)$request->get("vot");
		$userId		 = (int)$user->getId();
		$now = new \DateTime();
		
		$resposta = new Resposta();
		$resposta->setValor($vot);
		$resposta->setIdEnquesta($id_enquesta);
		$resposta->setIdUsuari($userId);
		$resposta->setData($now);

		$em = $this->getDoctrine()->getManager();

		// Persistir les dades
		$em->persist($resposta);
		$em->flush($resposta);
		
		return new Response("1");
		
	} catch (Exception $e) {
		
		return new Response("0");

    }
	
	}
	
	/**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        // 1) build the form
        $user = new Usuari();
        $form = $this->createForm(UsuariType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            //$password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            
			$password = $this->get('security.password_encoder')
					->encodePassword($user,$user->getPlainPassword());
			
			$user->setPassword($password);

            // 4) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

			$this->addFlash('success', 'Felicitats, ja pots iniciar sessió '.$user->getUsername().' -> ');
            return $this->redirectToRoute('homepage');
			
			/*
            return $this->render(
            'principal.html.twig');
			*/
	   }
	

        return $this->render(
            'register.html.twig',
            array('form' => $form->createView())
        );
    }

	/**
     * @Route("/administracio", name="administracio")
     */
    public function administracioAction(Request $request)
    {
        
		// replace this example code with whatever you need
        return $this->render('administracio.html.twig');
	 
    }
	
	/**
     * @Route("/eliminar", name="eliminar")
     */
    public function eliminarAction(Request $request)
    {
		
		$id_enquesta = (int)$request->get("id");

		$entityManager = $this->getDoctrine()->getManager();
		
		// Primer esborrem les respostes per aquella enquesta a la taula respostas
		$em = $this->getDoctrine()->getManager();
		$qb = $em->createQueryBuilder();
		$query = $qb->delete('AppBundle:Resposta', 'r')
            ->where('r.idEnquesta = :enquesta')
            ->setParameter('enquesta', $id_enquesta)
            ->getQuery();
		$query->execute();
		
		// Ara esborrem l'enquesta com a objecte
		$enquesta = $entityManager->getRepository(Enquesta::class)->find($id_enquesta);
		$entityManager->remove($enquesta);
		$entityManager->flush();
		
		
		
		$this->addFlash('success', 'Enquesta '.$id_enquesta.' eliminada correctament');

        
        return $this->redirectToRoute('administracio');
 
    }
	
	/**
     * @Route("/renderEnquesta", name="renderEnquesta")
     */
    public function renderEnquestaAction(Request $request)
    {
		// Recollim el post per sapiguer quina enquesta volem veure informació
		$id_enquesta = (int)$request->get("id");

		// Busquem pel ID de l'enquesta
		$enquesta = $this->getDoctrine()
        ->getRepository(Enquesta::class)
        ->find($id_enquesta);
		
		// Ara
		$repository = $this->getDoctrine()->getRepository(Resposta::class);
		$respostes = $repository->findByidEnquesta($id_enquesta);
		
		$sql = " 	
			SELECT 	e.id,
					SUM(IF(r.valor=1,1,0)) AS si,
					SUM(IF(r.valor=0,1,0)) AS no,
					if( e.data_final > CURDATE() AND CURDATE() > e.data_inici ,1,0) AS activa
			FROM enquesta e
			LEFT JOIN resposta r
			ON e.id=r.id_enquesta
			GROUP BY 
					e.id,
					e.data_inici,
					e.data_final
			HAVING e.id = $id_enquesta
			";

		$em = $this->getDoctrine()->getManager();
		$stmt = $em->getConnection()->prepare($sql);
		$stmt->execute();	
		$infoEnquesta = $stmt->fetchAll();
			
		return $this->render(
            'infoEnquesta.html.twig',
            array(
					'enquesta' => $enquesta,
					'respostes' => $respostes,
					'info' => $infoEnquesta
				)
        );

	 
    }
	

}
