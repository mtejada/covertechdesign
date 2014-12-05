<?php

namespace Covertechdesign\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provincias
 */
class Provincias
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idprovincia;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\Paises
     */
    private $idpais;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Provincias
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Provincias
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
     * Get idprovincia
     *
     * @return integer 
     */
    public function getIdprovincia()
    {
        return $this->idprovincia;
    }

    /**
     * Set idpais
     *
     * @param \Covertechdesign\AdminBundle\Entity\Paises $idpais
     * @return Provincias
     */
    public function setIdpais(\Covertechdesign\AdminBundle\Entity\Paises $idpais = null)
    {
        $this->idpais = $idpais;

        return $this;
    }

    /**
     * Get idpais
     *
     * @return \Covertechdesign\AdminBundle\Entity\Paises 
     */
    public function getIdpais()
    {
        return $this->idpais;
    }
}
