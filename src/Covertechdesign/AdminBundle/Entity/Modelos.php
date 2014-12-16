<?php

namespace Covertechdesign\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modelos
 */
class Modelos
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idmodelo;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\Marcas
     */
    private $idmarca;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Modelos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Modelos
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
     * Get idmodelo
     *
     * @return integer 
     */
    public function getIdmodelo()
    {
        return $this->idmodelo;
    }

    /**
     * Set idmarca
     *
     * @param \Covertechdesign\AdminBundle\Entity\Marcas $idmarca
     * @return Modelos
     */
    public function setIdmarca(\Covertechdesign\AdminBundle\Entity\Marcas $idmarca = null)
    {
        $this->idmarca = $idmarca;

        return $this;
    }

    /**
     * Get idmarca
     *
     * @return \Covertechdesign\AdminBundle\Entity\Marcas 
     */
    public function getIdmarca()
    {
        return $this->idmarca;
    }
}
