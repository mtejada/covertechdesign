<?php

namespace Covertechdesign\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VentasEntregas
 */
class VentasEntregas
{
    /**
     * @var \DateTime
     */
    private $fechaDespacho;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var string
     */
    private $comentarioMl;

    /**
     * @var integer
     */
    private $identrega;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\Ventas
     */
    private $idventa;


    /**
     * Set fechaDespacho
     *
     * @param \DateTime $fechaDespacho
     * @return VentasEntregas
     */
    public function setFechaDespacho($fechaDespacho)
    {
        $this->fechaDespacho = $fechaDespacho;

        return $this;
    }

    /**
     * Get fechaDespacho
     *
     * @return \DateTime 
     */
    public function getFechaDespacho()
    {
        return $this->fechaDespacho;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return VentasEntregas
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
     * Set comentarioMl
     *
     * @param string $comentarioMl
     * @return VentasEntregas
     */
    public function setComentarioMl($comentarioMl)
    {
        $this->comentarioMl = $comentarioMl;

        return $this;
    }

    /**
     * Get comentarioMl
     *
     * @return string 
     */
    public function getComentarioMl()
    {
        return $this->comentarioMl;
    }

    /**
     * Get identrega
     *
     * @return integer 
     */
    public function getIdentrega()
    {
        return $this->identrega;
    }

    /**
     * Set idventa
     *
     * @param \Covertechdesign\AdminBundle\Entity\Ventas $idventa
     * @return VentasEntregas
     */
    public function setIdventa(\Covertechdesign\AdminBundle\Entity\Ventas $idventa = null)
    {
        $this->idventa = $idventa;

        return $this;
    }

    /**
     * Get idventa
     *
     * @return \Covertechdesign\AdminBundle\Entity\Ventas 
     */
    public function getIdventa()
    {
        return $this->idventa;
    }
}
