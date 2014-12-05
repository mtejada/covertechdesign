<?php

namespace Covertechdesign\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LibroDiario
 */
class LibroDiario
{
    /**
     * @var \DateTime
     */
    private $fechaTransaccion;

    /**
     * @var string
     */
    private $comentarios;

    /**
     * @var string
     */
    private $importe;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idasiento;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\Transacciones
     */
    private $idtransaccion;


    /**
     * Set fechaTransaccion
     *
     * @param \DateTime $fechaTransaccion
     * @return LibroDiario
     */
    public function setFechaTransaccion($fechaTransaccion)
    {
        $this->fechaTransaccion = $fechaTransaccion;

        return $this;
    }

    /**
     * Get fechaTransaccion
     *
     * @return \DateTime 
     */
    public function getFechaTransaccion()
    {
        return $this->fechaTransaccion;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return LibroDiario
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set importe
     *
     * @param string $importe
     * @return LibroDiario
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return string 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return LibroDiario
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
     * Get idasiento
     *
     * @return integer 
     */
    public function getIdasiento()
    {
        return $this->idasiento;
    }

    /**
     * Set idtransaccion
     *
     * @param \Covertechdesign\AdminBundle\Entity\Transacciones $idtransaccion
     * @return LibroDiario
     */
    public function setIdtransaccion(\Covertechdesign\AdminBundle\Entity\Transacciones $idtransaccion = null)
    {
        $this->idtransaccion = $idtransaccion;

        return $this;
    }

    /**
     * Get idtransaccion
     *
     * @return \Covertechdesign\AdminBundle\Entity\Transacciones 
     */
    public function getIdtransaccion()
    {
        return $this->idtransaccion;
    }
}
