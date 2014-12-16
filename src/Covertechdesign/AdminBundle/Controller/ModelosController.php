<?php

namespace Covertechdesign\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Covertechdesign\AdminBundle\Form\ModelosType;
use Covertechdesign\AdminBundle\Entity\Modelos;

class ModelosController extends Controller {

    public function newAction(Request $request) {
        $entity = new Modelos();
        $form = $this->createForm(new ModelosType(), $entity, array(
            'action' => $this->generateUrl('abm_modelos_new'),
            'method' => 'POST',
                // 'em' => $this->getDoctrine()->getManager(),
        ));

        $form->handleRequest($request);
        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $entity->setActivo(1);
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                    'notice', 'Nuevo modelo: ' . $entity->getNombre()
            );
            return $this->render('CovertechdesignAdminBundle::confirm.html.twig', array(
                        'form' => $form->createView()
            ));
        }
        return $this->render('CovertechdesignAdminBundle:Modelos:new.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    public function editAction($id) {
        return $this->render('CovertechdesignAdminBundle:Modelos:edit.html.twig', array(
                        // ...
        ));
    }

}
