<?php

namespace Covertechdesign\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Covertechdesign\AdminBundle\Form\CategoriasType;
use Covertechdesign\AdminBundle\Entity\Categorias;

class CategoriasController extends Controller {

    public function newAction(Request $request) {
        $entity = new Categorias();
        $form = $this->createForm(new CategoriasType(), $entity, array(
            'action' => $this->generateUrl('abm_categorias_new'),
            'method' => 'POST',
                // 'em' => $this->getDoctrine()->getManager(),
        ));

        $form->handleRequest($request);
        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                    'notice', 'Nueva marca agregada: ' . $entity->getNombre()
            );
            return $this->render('CovertechdesignAdminBundle::confirm.html.twig', array(
                        'form' => $form->createView()
            ));
        }
        return $this->render('CovertechdesignAdminBundle:Categorias:new.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    public function editAction($id) {
        return $this->render('CovertechdesignAdminBundle:Categorias:edit.html.twig', array(
                        // ...
        ));
    }

}
