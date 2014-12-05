<?php

namespace Covertechdesign\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductosStock
 */
class ProductosStock
{
    /**
     * @var string
     */
    private $precioProveedor;

    /**
     * @var boolean
     */
    private $vendido;

    /**
     * @var \DateTime
     */
    private $fechaStock;

    /**
     * @var string
     */
    private $ganancia;

    /**
     * @var integer
     */
    private $idproductoStock;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\Productos
     */
    private $idproducto;


    /**
     * Set precioProveedor
     *
     * @param string $precioProveedor
     * @return ProductosStock
     */
    public function setPrecioProveedor($precioProveedor)
    {
        $this->precioProveedor = $precioProveedor;

        return $this;
    }

    /**
     * Get precioProveedor
     *
     * @return string 
     */
    public function getPrecioProveedor()
    {
        return $this->precioProveedor;
    }

    /**
     * Set vendido
     *
     * @param boolean $vendido
     * @return ProductosStock
     */
    public function setVendido($vendido)
    {
        $this->vendido = $vendido;

        return $this;
    }

    /**
     * Get vendido
     *
     * @return boolean 
     */
    public function getVendido()
    {
        return $this->vendido;
    }

    /**
     * Set fechaStock
     *
     * @param \DateTime $fechaStock
     * @return ProductosStock
     */
    public function setFechaStock($fechaStock)
    {
        $this->fechaStock = $fechaStock;

        return $this;
    }

    /**
     * Get fechaStock
     *
     * @return \DateTime 
     */
    public function getFechaStock()
    {
        return $this->fechaStock;
    }

    /**
     * Set ganancia
     *
     * @param string $ganancia
     * @return ProductosStock
     */
    public function setGanancia($ganancia)
    {
        $this->ganancia = $ganancia;

        return $this;
    }

    /**
     * Get ganancia
     *
     * @return string 
     */
    public function getGanancia()
    {
        return $this->ganancia;
    }

    /**
     * Get idproductoStock
     *
     * @return integer 
     */
    public function getIdproductoStock()
    {
        return $this->idproductoStock;
    }

    /**
     * Set idproducto
     *
     * @param \Covertechdesign\AdminBundle\Entity\Productos $idproducto
     * @return ProductosStock
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
}
