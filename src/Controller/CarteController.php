<?php

namespace App\Controller;

use App\Class\Cart;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarteController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManger = $entityManager;
    }

    #[Route('/mon-panier', name: 'carte')]
    public function index(Cart $cart): Response
    {
        return $this->render('carte/index.html.twig', [
            'cart'=> $cart->getFull()
        ]);
    }

    #[Route('/carte/add/{id}', name: 'app_carte')]
    public function add(Cart $cart, $id): Response
    {
        $cart->add($id);
        //dd($id);

      return $this->redirectToRoute('carte');

    }

    #[Route('/carte/remove/', name: 'remove_carte')]
    public function remove(Cart $cart): Response
    {
        $cart->remove();


        return $this->redirectToRoute('app_products');

    }

    #[Route('/carte/delete/{id}', name: 'delete_carte')]
    public function delete(Cart $cart, $id): Response
    {
        $cart->delete($id);
        return $this->redirectToRoute('carte');

    }

    #[Route('/carte/decreases/{id}', name: 'decreases_carte')]
    public function decreases(Product $product, Cart $cart): Response
    {
        $cart->decreases($product);
        return $this->redirectToRoute('carte');

    }



}
