<?php

namespace Covertechdesign\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AbmsController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $marcas = $em->getRepository("CovertechdesignAdminBundle:Marcas")->findAll();
        $categorias = $em->getRepository("CovertechdesignAdminBundle:Categorias")->findAll();
        $materiales = $em->getRepository("CovertechdesignAdminBundle:Materiales")->findAll();
        $modelos = $em->getRepository("CovertechdesignAdminBundle:Modelos")->findAll();

        return $this->render('CovertechdesignAdminBundle:Abms:index.html.twig', array(
                    'marcas' => $marcas,
                    'categorias' => $categorias,
                    'materiales' => $materiales,
                    'modelos' => $modelos
        ));
    }


}
