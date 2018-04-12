<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resposta
 *
 * @ORM\Table(name="resposta")
 * @ORM\Entity
 */
class Resposta
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="valor", type="boolean", nullable=false)
     */
    private $valor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_usuari", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idUsuari;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_enquesta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idEnquesta;



    /**
     * Set valor
     *
     * @param boolean $valor
     *
     * @return Resposta
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return boolean
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Resposta
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set idUsuari
     *
     * @param integer $idUsuari
     *
     * @return Resposta
     */
    public function setIdUsuari($idUsuari)
    {
        $this->idUsuari = $idUsuari;

        return $this;
    }

    /**
     * Get idUsuari
     *
     * @return integer
     */
    public function getIdUsuari()
    {
        return $this->idUsuari;
    }

    /**
     * Set idEnquesta
     *
     * @param integer $idEnquesta
     *
     * @return Resposta
     */
    public function setIdEnquesta($idEnquesta)
    {
        $this->idEnquesta = $idEnquesta;

        return $this;
    }

    /**
     * Get idEnquesta
     *
     * @return integer
     */
    public function getIdEnquesta()
    {
        return $this->idEnquesta;
    }
}
