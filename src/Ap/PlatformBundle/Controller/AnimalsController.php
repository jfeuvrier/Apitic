<?php

namespace Ap\PlatformBundle\Controller;

use Ap\PlatformBundle\Entity\Animal;
use Ap\PlatformBundle\Form\AnimalType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AnimalsController extends Controller
{

  //TODO : rajouter un système de page pour que cela reste lisible avec moults lignes
  public function indexAction()
  {
    $repository=$this->getDoctrine()->getManager()->getRepository('ApPlatformBundle:Animal');
    //On affiche toutes les lignes de la base de données.
    $listAnimals = $repository->findAll();
    return $this->render('ApPlatformBundle:Animals:index.html.twig', array(
      'listAnimals' => $listAnimals
    ));
  }

  public function viewAction($id)
  {
    $repository=$this->getDoctrine()->getManager()->getRepository('ApPlatformBundle:Animal');
    //On affiche ici uniquement la ligne voulue.
    $animal = $repository->find($id);
    return $this->render('ApPlatformBundle:Animals:view.html.twig', array(
      'animal' => $animal
    ));
  }

  public function addAction(Request $request)
  {
    $animal = new Animal();
    $form = $this->createForm(new AnimalType(), $animal);
    $form->handleRequest($request);
    if ($form->isValid()) {
      // On enregistre notre nouvel animal dans la BDD
      $em = $this->getDoctrine()->getManager();
      $em->persist($animal);
      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Animal bien enregistré.');
      return $this->redirect($this->generateUrl('ap_platform_view', array('id' => $animal->getId())));
    }
    return $this->render('ApPlatformBundle:Animals:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }

  public function editAction($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    // On récupère l'annonce $id
    $animal = $em->getRepository('ApPlatformBundle:Animal')->find($id);
    if (null === $animal) {
      throw new NotFoundHttpException("L'animal d'id ".$id." n'existe pas.");
    }
    $form = $this->createForm(new AnimalType(), $animal);
    if ($form->handleRequest($request)->isValid()) {
      //On enregistre les changements en BDD
      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Animal bien modifié.');
      return $this->redirect($this->generateUrl('ap_platform_view', array('id' => $animal->getId())));
    }
    return $this->render('ApPlatformBundle:Animals:edit.html.twig', array(
      'form'   => $form->createView(),
      'animal' => $animal
    ));
  }

  public function deleteAction($id, Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    // On récupère l'annonce $id
    $animal = $em->getRepository('ApPlatformBundle:Animal')->find($id);
    if (null === $animal) {
      throw new NotFoundHttpException("L'animal d'id ".$id." n'existe pas.");
    }
    // On crée un formulaire vide, qui ne contiendra que le champ CSRF
    $form = $this->createFormBuilder()->getForm();
    if ($form->handleRequest($request)->isValid()) {
      $em->remove($animal);
      $em->flush();
      $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");
      return $this->redirect($this->generateUrl('ap_platform_home'));
    }
    // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
    return $this->render('ApPlatformBundle:Animals:delete.html.twig', array(
      'animal' => $animal,
      'form'   => $form->createView()
    ));
  }

}
?>
