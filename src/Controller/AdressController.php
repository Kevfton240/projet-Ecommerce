<?php

namespace App\Controller;

use App\Entity\Adresse;
use App\Form\AdressType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdressController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('compte/address', name: 'app_adress')]
    public function index(): Response
    {
        return $this->render('account/address.html.twig');
    }

    #[Route('compte/ajouter/address', name: 'app_adress_add')]
    public function add(Request $request): Response
    {
        $adresse = new Adresse();
        $form = $this->createForm(AdressType::class, $adresse);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $adresse->setUser($this->getUser());
            $this->entityManager->persist($adresse);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_adress');


        }
        return $this->render('account/adresse_add.html.twig', [
            'form'=> $form->createView()
        ]);
    }


    #[Route('compte/modifier{id}/address', name: 'app_adress_edit')]
    public function edit(Request $request, $id): Response
    {
        $adresse = $this->entityManager->getRepository(Adresse::class)->findOneBy(['id'=>$id]);
        if(!$adresse || $adresse->getUser() != $this->getUser()){
            return $this->redirectToRoute('app_adress');
        }
        $form = $this->createForm(AdressType::class, $adresse);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $this->entityManager->flush();
            return $this->redirectToRoute('app_adress');
        }
        return $this->render('account/adresse_add.html.twig', [
            'form'=> $form->createView()
        ]);
    }


    #[Route('compte/supprimer{id}/address', name: 'app_adress_delete')]
    public function delete($id): Response
    {
        $adresse = $this->entityManager->getRepository(Adresse::class)->findOneBy(['id'=>$id]);

        if($adresse && $adresse->getUser() == $this->getUser())
        {
            $this->entityManager->remove($adresse);
            $this->entityManager->flush();
        }
        return $this->redirectToRoute('app_adress');
    }
}
