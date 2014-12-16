<?php

namespace Covertechdesign\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productos
 */
class Productos
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $comentario;

    /**
     * @var string
     */
    private $precioActual;

    /**
     * @var integer
     */
    private $stockActual;

    /**
     * @var \DateTime
     */
    private $fechaUltimaModificacion;

    /**
     * @var integer
     */
    private $idproducto;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\Proveedores
     */
    private $idproveedor;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\Materiales
     */
    private $idmaterial;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\Categorias
     */
    private $idcategoria;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Productos
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Productos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     * @return Productos
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set precioActual
     *
     * @param string $precioActual
     * @return Productos
     */
    public function setPrecioActual($precioActual)
    {
        $this->precioActual = $precioActual;

        return $this;
    }

    /**
     * Get precioActual
     *
     * @return string 
     */
    public function getPrecioActual()
    {
        return $this->precioActual;
    }

    /**
     * Set stockActual
     *
     * @param integer $stockActual
     * @return Productos
     */
    public function setStockActual($stockActual)
    {
        $this->stockActual = $stockActual;

        return $this;
    }

    /**
     * Get stockActual
     *
     * @return integer 
     */
    public function getStockActual()
    {
        return $this->stockActual;
    }

    /**
     * Set fechaUltimaModificacion
     *
     * @param \DateTime $fechaUltimaModificacion
     * @return Productos
     */
    public function setFechaUltimaModificacion($fechaUltimaModificacion)
    {
        $this->fechaUltimaModificacion = $fechaUltimaModificacion;

        return $this;
    }

    /**
     * Get fechaUltimaModificacion
     *
     * @return \DateTime 
     */
    public function getFechaUltimaModificacion()
    {
        return $this->fechaUltimaModificacion;
    }

    /**
     * Get idproducto
     *
     * @return integer 
     */
    public function getIdproducto()
    {
        return $this->idproducto;
    }

    /**
     * Set idproveedor
     *
     * @param \Covertechdesign\AdminBundle\Entity\Proveedores $idproveedor
     * @return Productos
     */
    public function setIdproveedor(\Covertechdesign\AdminBundle\Entity\Proveedores $idproveedor = null)
    {
        $this->idproveedor = $idproveedor;

        return $this;
    }

    /**
     * Get idproveedor
     *
     * @return \Covertechdesign\AdminBundle\Entity\Proveedores 
     */
    public function getIdproveedor()
    {
        return $this->idproveedor;
    }

    /**
     * Set idmaterial
     *
     * @param \Covertechdesign\AdminBundle\Entity\Materiales $idmaterial
     * @return Productos
     */
    public function setIdmaterial(\Covertechdesign\AdminBundle\Entity\Materiales $idmaterial = null)
    {
        $this->idmaterial = $idmaterial;

        return $this;
    }

    /**
     * Get idmaterial
     *
     * @return \Covertechdesign\AdminBundle\Entity\Materiales 
     */
    public function getIdmaterial()
    {
        return $this->idmaterial;
    }

    /**
     * Set idcategoria
     *
     * @param \Covertechdesign\AdminBundle\Entity\Categorias $idcategoria
     * @return Productos
     */
    public function setIdcategoria(\Covertechdesign\AdminBundle\Entity\Categorias $idcategoria = null)
    {
        $this->idcategoria = $idcategoria;

        return $this;
    }

    /**
     * Get idcategoria
     *
     * @return \Covertechdesign\AdminBundle\Entity\Categorias 
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }
}
