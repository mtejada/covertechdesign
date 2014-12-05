<?php

namespace Covertechdesign\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MarcasTags
 */
class MarcasTags
{
    /**
     * @var integer
     */
    private $idmarcaTag;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\Marcas
     */
    private $idmarca;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\Tags
     */
    private $idtag;


    /**
     * Get idmarcaTag
     *
     * @return integer 
     */
    public function getIdmarcaTag()
    {
        return $this->idmarcaTag;
    }

    /**
     * Set idmarca
     *
     * @param \Covertechdesign\AdminBundle\Entity\Marcas $idmarca
     * @return MarcasTags
     */
    public function setIdmarca(\Covertechdesign\AdminBundle\Entity\Marcas $idmarca = null)
    {
        $this->idmarca = $idmarca;

        return $this;
    }

    /**
     * Get idmarca
     *
     * @return \Covertechdesign\AdminBundle\Entity\Marcas 
     */
    public function getIdmarca()
    {
        return $this->idmarca;
    }

    /**
     * Set idtag
     *
     * @param \Covertechdesign\AdminBundle\Entity\Tags $idtag
     * @return MarcasTags
     */
    public function setIdtag(\Covertechdesign\AdminBundle\Entity\Tags $idtag = null)
    {
        $this->idtag = $idtag;

        return $this;
    }

    /**
     * Get idtag
     *
     * @return \Covertechdesign\AdminBundle\Entity\Tags 
     */
    public function getIdtag()
    {
        return $this->idtag;
    }
}
