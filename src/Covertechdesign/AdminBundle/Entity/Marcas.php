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
     * @var string
     */
    private $codigo;

    /**
     * @var string
     */
    private $logo;

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
     * Set codigo
     *
     * @param string $codigo
     * @return Marcas
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Marcas
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
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
