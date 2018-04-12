<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Destacats
 *
 * @ORM\Table(name="v_destacats")
 * @ORM\Entity
 */
class Destacats {
    /**
     * @var boolean
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pregunta", type="string", length=250, nullable=false)
     */
    private $pregunta;

	/**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inici", type="date", nullable=false)
     */
    private $dataInici;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_final", type="date", nullable=false)
     */
    private $dataFinal;
	
	/**
     * @var boolean
     *
     * @ORM\Column(name="destacada", type="boolean", nullable=false)
     */
    private $destacada = '0';
	
    /**
     * @var decimal
     *
     * @ORM\Column(name="SI", type="decimal")
     */
    private $si;

    /**
     * @var decimal
     *
     * @ORM\Column(name="NO", type="decimal")

     */
    private $no;


	function getId() {
		return $this->id;
	}

	function getPregunta() {
		return $this->pregunta;
	}

	function getDataInici() {
		return $this->dataInici;
	}

	function getDataFinal() {
		return $this->dataFinal;
	}

	function getDestacada() {
		return $this->destacada;
	}

	function getSi() {
		return $this->si;
	}

	function getNo() {
		return $this->no;
	}

	function setId($id) {
		$this->id = $id;
	}

	function setPregunta($pregunta) {
		$this->pregunta = $pregunta;
	}

	function setDataInici(\DateTime $dataInici) {
		$this->dataInici = $dataInici;
	}

	function setDataFinal(\DateTime $dataFinal) {
		$this->dataFinal = $dataFinal;
	}

	function setDestacada($destacada) {
		$this->destacada = $destacada;
	}

	function setSi(decimal $si) {
		$this->si = $si;
	}

	function setNo(decimal $no) {
		$this->no = $no;
	}


	
}