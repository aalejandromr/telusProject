<?php

namespace Telus\Example\MyBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Telus\Example\MyBundle\Entity\Sf2Pastebin;
use Telus\Example\MyBundle\Form\Sf2PastebinType;

/**
 * Sf2Pastebin controller.
 *
 */
class Sf2PastebinController extends Controller
{

    /**
     * Lists all Sf2Pastebin entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('TelusExampleMyBundle:Sf2Pastebin')->findAll();

        return $this->render('TelusExampleMyBundle:Sf2Pastebin:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Sf2Pastebin entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Sf2Pastebin();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('crud_pastebin_show', array('id' => $entity->getId())));
        }

        return $this->render('TelusExampleMyBundle:Sf2Pastebin:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Sf2Pastebin entity.
    *
    * @param Sf2Pastebin $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Sf2Pastebin $entity)
    {
        $form = $this->createForm(new Sf2PastebinType(), $entity, array(
            'action' => $this->generateUrl('crud_pastebin_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Sf2Pastebin entity.
     *
     */
    public function newAction()
    {
        $entity = new Sf2Pastebin();
        $form   = $this->createCreateForm($entity);

        return $this->render('TelusExampleMyBundle:Sf2Pastebin:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Sf2Pastebin entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TelusExampleMyBundle:Sf2Pastebin')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sf2Pastebin entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TelusExampleMyBundle:Sf2Pastebin:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Sf2Pastebin entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TelusExampleMyBundle:Sf2Pastebin')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sf2Pastebin entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TelusExampleMyBundle:Sf2Pastebin:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Sf2Pastebin entity.
    *
    * @param Sf2Pastebin $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Sf2Pastebin $entity)
    {
        $form = $this->createForm(new Sf2PastebinType(), $entity, array(
            'action' => $this->generateUrl('crud_pastebin_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Sf2Pastebin entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TelusExampleMyBundle:Sf2Pastebin')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sf2Pastebin entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('crud_pastebin_edit', array('id' => $id)));
        }

        return $this->render('TelusExampleMyBundle:Sf2Pastebin:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Sf2Pastebin entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TelusExampleMyBundle:Sf2Pastebin')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Sf2Pastebin entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('crud_pastebin'));
    }

    /**
     * Creates a form to delete a Sf2Pastebin entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('crud_pastebin_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete', 'attr' => array('class' => 'btn medium btn-danger')))
            ->getForm()
        ;
    }
}
