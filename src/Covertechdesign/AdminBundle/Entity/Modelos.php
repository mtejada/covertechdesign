<?php

namespace Covertechdesign\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modelos
 */
class Modelos
{
    /**
     * @var integer
     */
    private $idmarca;

    /**
     * @var integer
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
     * Set idmarca
     *
     * @param integer $idmarca
     * @return Modelos
     */
    public function setIdmarca($idmarca)
    {
        $this->idmarca = $idmarca;

        return $this;
    }

    /**
     * Get idmarca
     *
     * @return integer 
     */
    public function getIdmarca()
    {
        return $this->idmarca;
    }

    /**
     * Set nombre
     *
     * @param integer $nombre
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
     * @return integer 
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
}
