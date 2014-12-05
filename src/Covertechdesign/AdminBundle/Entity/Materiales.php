<?php

namespace Covertechdesign\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materiales
 */
class Materiales
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $idmaterial;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Materiales
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
     * Get idmaterial
     *
     * @return integer 
     */
    public function getIdmaterial()
    {
        return $this->idmaterial;
    }
}
