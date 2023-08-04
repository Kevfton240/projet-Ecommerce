<?php

namespace App\Controller;

use App\Class\Cart;
use App\Entity\Order;
use App\Entity\OrderDetails;
use App\Form\OrderType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class OrderController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/commande ', name: 'app_order')]
    public function index(Cart $cart, Request $request): Response
    {


        $form = $this->createForm(OrderType::class, null,[
            'user'=> $this->getUser()
        ]);

        return $this->render('order/index.html.twig',[
            'form'=> $form->createView(),
            'cart'=> $cart->getFull()

            ]);
    }

    #[Route('/commande/recap ', name: 'app_order_recap', methods: "POST")]
    public function add(Cart $cart, Request $request): Response
    {
        $form = $this->createForm(OrderType::class, null,[
            'user'=> $this->getUser()
        ]);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $date = new \DateTime();
            $carrier = $form->get('carrier')->getData();
            $delivry = $form->get('adresses')->getData();
            $delivry_content = $delivry->getFirstname().''.$delivry->getLastname();
            if ($delivry->getCompany())
            {
                $delivry_content.='<br>'.$delivry->getCompany();
            }
            $delivry_content.='<br>'.$delivry->getAdress();
            $delivry_content.='<br>'.$delivry->getPostal().''.$delivry->getCity();
            $delivry_content.='<br>'.$delivry->getCountry();

            //dd($delivry_content);


           //Enregristre ma commande
            $order = new Order();
            $order->setUser($this->getUser());
            $order->setCreatedAt($date);
            $order->setCarrierName($carrier->getName());
            $order->setCarrierPrice($carrier->getPrice());
            $order->setDelivry($delivry_content);
            $order->isIsPaid(0);

            $this->entityManager->persist($order);



           foreach ($cart->getFull() as $product){
               $orderDetails = new OrderDetails();
               $orderDetails->setMyorder($order);
               $orderDetails->setProduct($product['product']->getName());
               $orderDetails->setQuantity($product['quantity']);
               $orderDetails->setPrice($product['product']->getPrice());
               $orderDetails->setTotal($product['product']->getPrice()* $product['quantity']);
               $this->entityManager->persist($orderDetails);
               //dd($product);
           }

           //$this->entityManager->flush();

            //Enregristre mes produits


        }

        return $this->render('order/add.html.twig',[
            'cart'=> $cart->getFull(),
            'carrier'=> $carrier,
            'delivry'=> $delivry_content

        ]);

        return $this->redirectToRoute('carte');
    }

}
