<?php

namespace Covertechdesign\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistrosAsociados
 */
class RegistrosAsociados
{
    /**
     * @var integer
     */
    private $idasoc;

    /**
     * @var string
     */
    private $comentario;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idregistroAsociado;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\RegistrosTipo
     */
    private $idregistroTipo;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\LibroDiario
     */
    private $idasiento;


    /**
     * Set idasoc
     *
     * @param integer $idasoc
     * @return RegistrosAsociados
     */
    public function setIdasoc($idasoc)
    {
        $this->idasoc = $idasoc;

        return $this;
    }

    /**
     * Get idasoc
     *
     * @return integer 
     */
    public function getIdasoc()
    {
        return $this->idasoc;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     * @return RegistrosAsociados
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return RegistrosAsociados
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return RegistrosAsociados
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Get idregistroAsociado
     *
     * @return integer 
     */
    public function getIdregistroAsociado()
    {
        return $this->idregistroAsociado;
    }

    /**
     * Set idregistroTipo
     *
     * @param \Covertechdesign\AdminBundle\Entity\RegistrosTipo $idregistroTipo
     * @return RegistrosAsociados
     */
    public function setIdregistroTipo(\Covertechdesign\AdminBundle\Entity\RegistrosTipo $idregistroTipo = null)
    {
        $this->idregistroTipo = $idregistroTipo;

        return $this;
    }

    /**
     * Get idregistroTipo
     *
     * @return \Covertechdesign\AdminBundle\Entity\RegistrosTipo 
     */
    public function getIdregistroTipo()
    {
        return $this->idregistroTipo;
    }

    /**
     * Set idasiento
     *
     * @param \Covertechdesign\AdminBundle\Entity\LibroDiario $idasiento
     * @return RegistrosAsociados
     */
    public function setIdasiento(\Covertechdesign\AdminBundle\Entity\LibroDiario $idasiento = null)
    {
        $this->idasiento = $idasiento;

        return $this;
    }

    /**
     * Get idasiento
     *
     * @return \Covertechdesign\AdminBundle\Entity\LibroDiario 
     */
    public function getIdasiento()
    {
        return $this->idasiento;
    }
}
