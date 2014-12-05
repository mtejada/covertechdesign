<?php

namespace Covertechdesign\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Covertechdesign\AdminBundle\Form\MarcasType;
use Covertechdesign\AdminBundle\Entity\Marcas;
class MarcasController extends Controller {


    public function newAction() {
        $entity=new Marcas();
         $form = $this->createForm(new MarcasType(), $entity, array(
            'action' => $this->generateUrl('abm_marcas_new'),
            'method' => 'POST',
            'em' => $this->getDoctrine()->getManager(),
        ));
        return $this->render('CovertechdesignAdminBundle:Marcas:new.html.twig', array(
                        'form'=>$form->getViewData()
        ));
    }

    public function editAction($id) {
        return $this->render('CovertechdesignAdminBundle:Marcas:edit.html.twig', array(
                        // ...
        ));
    }

}
