<?php

namespace Covertechdesign\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductosModelos
 */
class ProductosModelos
{
    /**
     * @var \DateTime
     */
    private $fechaAlta;

    /**
     * @var integer
     */
    private $idproductoModelo;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\Modelos
     */
    private $idmodelo;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\Productos
     */
    private $idproducto;


    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     * @return ProductosModelos
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime 
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Get idproductoModelo
     *
     * @return integer 
     */
    public function getIdproductoModelo()
    {
        return $this->idproductoModelo;
    }

    /**
     * Set idmodelo
     *
     * @param \Covertechdesign\AdminBundle\Entity\Modelos $idmodelo
     * @return ProductosModelos
     */
    public function setIdmodelo(\Covertechdesign\AdminBundle\Entity\Modelos $idmodelo = null)
    {
        $this->idmodelo = $idmodelo;

        return $this;
    }

    /**
     * Get idmodelo
     *
     * @return \Covertechdesign\AdminBundle\Entity\Modelos 
     */
    public function getIdmodelo()
    {
        return $this->idmodelo;
    }

    /**
     * Set idproducto
     *
     * @param \Covertechdesign\AdminBundle\Entity\Productos $idproducto
     * @return ProductosModelos
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
