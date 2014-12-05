<?php

namespace Covertechdesign\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VentasComentarios
 */
class VentasComentarios
{
    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $comentario;

    /**
     * @var \DateTime
     */
    private $fechaComentario;

    /**
     * @var integer
     */
    private $idcomentario;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\Ventas
     */
    private $idventa;


    /**
     * Set titulo
     *
     * @param string $titulo
     * @return VentasComentarios
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     * @return VentasComentarios
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
     * Set fechaComentario
     *
     * @param \DateTime $fechaComentario
     * @return VentasComentarios
     */
    public function setFechaComentario($fechaComentario)
    {
        $this->fechaComentario = $fechaComentario;

        return $this;
    }

    /**
     * Get fechaComentario
     *
     * @return \DateTime 
     */
    public function getFechaComentario()
    {
        return $this->fechaComentario;
    }

    /**
     * Get idcomentario
     *
     * @return integer 
     */
    public function getIdcomentario()
    {
        return $this->idcomentario;
    }

    /**
     * Set idventa
     *
     * @param \Covertechdesign\AdminBundle\Entity\Ventas $idventa
     * @return VentasComentarios
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
