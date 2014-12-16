<?php

namespace Covertechdesign\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Covertechdesign\AdminBundle\Form\MaterialesType;
use Covertechdesign\AdminBundle\Entity\Materiales;

class MaterialesController extends Controller {

    public function newAction(Request $request) {
        $entity = new Materiales();
        $form = $this->createForm(new MaterialesType(), $entity, array(
            'action' => $this->generateUrl('abm_materiales_new'),
            'method' => 'POST',
                // 'em' => $this->getDoctrine()->getManager(),
        ));

        $form->handleRequest($request);
        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                    'notice', 'Nuevo material agregado: ' . $entity->getNombre()
            );
            return $this->render('CovertechdesignAdminBundle::confirm.html.twig', array(
                        'form' => $form->createView()
            ));
        }
        return $this->render('CovertechdesignAdminBundle:Materiales:new.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    public function editAction($id) {
        return $this->render('CovertechdesignAdminBundle:Materiales:edit.html.twig', array(
                        // ...
        ));
    }

}
