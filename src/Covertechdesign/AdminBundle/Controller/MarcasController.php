<?php

namespace Covertechdesign\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Covertechdesign\AdminBundle\Form\MarcasType;
use Covertechdesign\AdminBundle\Entity\Marcas;

class MarcasController extends Controller {

    public function newAction(Request $request) {
        $entity = new Marcas();
        $form = $this->createForm(new MarcasType(), $entity, array(
            'action' => $this->generateUrl('abm_marcas_new'),
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
                    'notice', 'Nueva marca agregada: ' . $entity->getNombre()
            );
            return $this->render('CovertechdesignAdminBundle::confirm.html.twig', array(
                        'form' => $form->createView()
            ));
        }
        return $this->render('CovertechdesignAdminBundle:Marcas:new.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    public function editAction($id) {
        return $this->render('CovertechdesignAdminBundle:Marcas:edit.html.twig', array(
                        // ...
        ));
    }

}
