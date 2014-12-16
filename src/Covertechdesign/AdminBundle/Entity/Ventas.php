<?php

namespace Covertechdesign\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ventas
 */
class Ventas
{
    /**
     * @var string
     */
    private $precio;

    /**
     * @var integer
     */
    private $cantidad;

    /**
     * @var string
     */
    private $comisionMl;

    /**
     * @var \DateTime
     */
    private $fechaCompra;

    /**
     * @var boolean
     */
    private $contactado;

    /**
     * @var boolean
     */
    private $pagado;

    /**
     * @var \DateTime
     */
    private $fechaAcreditacionPago;

    /**
     * @var boolean
     */
    private $entregado;

    /**
     * @var string
     */
    private $calificacion;

    /**
     * @var integer
     */
    private $idventa;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\Productos
     */
    private $idproducto;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\FormasPago
     */
    private $idfomaPago;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\Clientes
     */
    private $idcliente;


    /**
     * Set precio
     *
     * @param string $precio
     * @return Ventas
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return Ventas
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set comisionMl
     *
     * @param string $comisionMl
     * @return Ventas
     */
    public function setComisionMl($comisionMl)
    {
        $this->comisionMl = $comisionMl;

        return $this;
    }

    /**
     * Get comisionMl
     *
     * @return string 
     */
    public function getComisionMl()
    {
        return $this->comisionMl;
    }

    /**
     * Set fechaCompra
     *
     * @param \DateTime $fechaCompra
     * @return Ventas
     */
    public function setFechaCompra($fechaCompra)
    {
        $this->fechaCompra = $fechaCompra;

        return $this;
    }

    /**
     * Get fechaCompra
     *
     * @return \DateTime 
     */
    public function getFechaCompra()
    {
        return $this->fechaCompra;
    }

    /**
     * Set contactado
     *
     * @param boolean $contactado
     * @return Ventas
     */
    public function setContactado($contactado)
    {
        $this->contactado = $contactado;

        return $this;
    }

    /**
     * Get contactado
     *
     * @return boolean 
     */
    public function getContactado()
    {
        return $this->contactado;
    }

    /**
     * Set pagado
     *
     * @param boolean $pagado
     * @return Ventas
     */
    public function setPagado($pagado)
    {
        $this->pagado = $pagado;

        return $this;
    }

    /**
     * Get pagado
     *
     * @return boolean 
     */
    public function getPagado()
    {
        return $this->pagado;
    }

    /**
     * Set fechaAcreditacionPago
     *
     * @param \DateTime $fechaAcreditacionPago
     * @return Ventas
     */
    public function setFechaAcreditacionPago($fechaAcreditacionPago)
    {
        $this->fechaAcreditacionPago = $fechaAcreditacionPago;

        return $this;
    }

    /**
     * Get fechaAcreditacionPago
     *
     * @return \DateTime 
     */
    public function getFechaAcreditacionPago()
    {
        return $this->fechaAcreditacionPago;
    }

    /**
     * Set entregado
     *
     * @param boolean $entregado
     * @return Ventas
     */
    public function setEntregado($entregado)
    {
        $this->entregado = $entregado;

        return $this;
    }

    /**
     * Get entregado
     *
     * @return boolean 
     */
    public function getEntregado()
    {
        return $this->entregado;
    }

    /**
     * Set calificacion
     *
     * @param string $calificacion
     * @return Ventas
     */
    public function setCalificacion($calificacion)
    {
        $this->calificacion = $calificacion;

        return $this;
    }

    /**
     * Get calificacion
     *
     * @return string 
     */
    public function getCalificacion()
    {
        return $this->calificacion;
    }

    /**
     * Get idventa
     *
     * @return integer 
     */
    public function getIdventa()
    {
        return $this->idventa;
    }

    /**
     * Set idproducto
     *
     * @param \Covertechdesign\AdminBundle\Entity\Productos $idproducto
     * @return Ventas
     */
    public function setIdproducto(\Covertechdesign\AdminBundle\Entity\Productos $idproducto = null)
    {
        $this->idproducto = $idproducto;

        return $this;
    }

    /**
     * Get idproducto
     *
     * @return \Covertechdesign\AdminBundle\Entity\Productos 
     */
    public function getIdproducto()
    {
        return $this->idproducto;
    }

    /**
     * Set idfomaPago
     *
     * @param \Covertechdesign\AdminBundle\Entity\FormasPago $idfomaPago
     * @return Ventas
     */
    public function setIdfomaPago(\Covertechdesign\AdminBundle\Entity\FormasPago $idfomaPago = null)
    {
        $this->idfomaPago = $idfomaPago;

        return $this;
    }

    /**
     * Get idfomaPago
     *
     * @return \Covertechdesign\AdminBundle\Entity\FormasPago 
     */
    public function getIdfomaPago()
    {
        return $this->idfomaPago;
    }

    /**
     * Set idcliente
     *
     * @param \Covertechdesign\AdminBundle\Entity\Clientes $idcliente
     * @return Ventas
     */
    public function setIdcliente(\Covertechdesign\AdminBundle\Entity\Clientes $idcliente = null)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return \Covertechdesign\AdminBundle\Entity\Clientes 
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }
}
