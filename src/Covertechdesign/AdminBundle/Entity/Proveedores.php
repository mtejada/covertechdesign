<?php

namespace Covertechdesign\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proveedores
 */
class Proveedores
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $cuit;

    /**
     * @var string
     */
    private $contacto;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idproveedor;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Proveedores
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
     * Set cuit
     *
     * @param string $cuit
     * @return Proveedores
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit
     *
     * @return string 
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     * @return Proveedores
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get contacto
     *
     * @return string 
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Proveedores
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Proveedores
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Proveedores
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
     * Get idproveedor
     *
     * @return integer 
     */
    public function getIdproveedor()
    {
        return $this->idproveedor;
    }
}
