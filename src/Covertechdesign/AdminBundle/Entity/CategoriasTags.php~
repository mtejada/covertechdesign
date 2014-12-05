<?php

namespace Covertechdesign\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriasTags
 */
class CategoriasTags
{
    /**
     * @var integer
     */
    private $idtag;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\Tags
     */
    private $idcategoriaTag;

    /**
     * @var \Covertechdesign\AdminBundle\Entity\Categorias
     */
    private $idcategoria;


    /**
     * Set idtag
     *
     * @param integer $idtag
     * @return CategoriasTags
     */
    public function setIdtag($idtag)
    {
        $this->idtag = $idtag;

        return $this;
    }

    /**
     * Get idtag
     *
     * @return integer 
     */
    public function getIdtag()
    {
        return $this->idtag;
    }

    /**
     * Set idcategoriaTag
     *
     * @param \Covertechdesign\AdminBundle\Entity\Tags $idcategoriaTag
     * @return CategoriasTags
     */
    public function setIdcategoriaTag(\Covertechdesign\AdminBundle\Entity\Tags $idcategoriaTag)
    {
        $this->idcategoriaTag = $idcategoriaTag;

        return $this;
    }

    /**
     * Get idcategoriaTag
     *
     * @return \Covertechdesign\AdminBundle\Entity\Tags 
     */
    public function getIdcategoriaTag()
    {
        return $this->idcategoriaTag;
    }

    /**
     * Set idcategoria
     *
     * @param \Covertechdesign\AdminBundle\Entity\Categorias $idcategoria
     * @return CategoriasTags
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
