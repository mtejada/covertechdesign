<?php

namespace Covertechdesign\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductosImagenes
 */
class ProductosImagenes
{
    /**
     * @var string
     */
    private $imagen;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idproductoImagen;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\Productos
     */
    private $idproducto;


    /**
     * Set imagen
     *
     * @param string $imagen
     * @return ProductosImagenes
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return ProductosImagenes
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
     * Get idproductoImagen
     *
     * @return integer 
     */
    public function getIdproductoImagen()
    {
        return $this->idproductoImagen;
    }

    /**
     * Set idproducto
     *
     * @param \Covertechdesign\AdminBundle\Entity\Productos $idproducto
     * @return ProductosImagenes
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
