<?php

namespace Covertechdesign\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marcas
 */
class Marcas
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
    private $idmarca;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Marcas
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
     * @return Marcas
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
     * Get idmarca
     *
     * @return integer 
     */
    public function getIdmarca()
    {
        return $this->idmarca;
    }
}
