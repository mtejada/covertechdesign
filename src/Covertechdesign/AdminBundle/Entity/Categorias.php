<?php

namespace Covertechdesign\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorias
 */
class Categorias
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $idcategoria;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Categorias
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
     * Get idcategoria
     *
     * @return integer 
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }
}
