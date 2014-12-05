<?php

namespace Covertechdesign\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transacciones
 */
class Transacciones
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $idtransaccion;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\TransaccionesTipo
     */
    private $idtransaccionTipo;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Transacciones
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
     * Get idtransaccion
     *
     * @return integer 
     */
    public function getIdtransaccion()
    {
        return $this->idtransaccion;
    }

    /**
     * Set idtransaccionTipo
     *
     * @param \Covertechdesign\AdminBundle\Entity\TransaccionesTipo $idtransaccionTipo
     * @return Transacciones
     */
    public function setIdtransaccionTipo(\Covertechdesign\AdminBundle\Entity\TransaccionesTipo $idtransaccionTipo = null)
    {
        $this->idtransaccionTipo = $idtransaccionTipo;

        return $this;
    }

    /**
     * Get idtransaccionTipo
     *
     * @return \Covertechdesign\AdminBundle\Entity\TransaccionesTipo 
     */
    public function getIdtransaccionTipo()
    {
        return $this->idtransaccionTipo;
    }
}
