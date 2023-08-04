<?php

namespace App\Class;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\Session;

class Cart

{
    private Session $session;
    private EntityManagerInterface $entityManager;

   public function __construct(EntityManagerInterface $entityManager, RequestStack $requestStack)
   {
     $this->session = $requestStack->getSession();
     $this->entityManager = $entityManager;
   }

    public function add($id)
    {
        $cart = $this->session->get('cart' ,[]);

        if (! empty($cart[$id])){
            $cart[$id]++;
        }else{
            $cart[$id]=1;
        }
        $this->session->set('cart', $cart);

    }

    public function get()
    {
        return $this->session->get('cart');
    }

    public function remove()
    {
        return $this->session->remove('cart');

    }

    public function delete($id)
    {
        $cart = $this->session->get('cart',[]);

        unset($cart[$id]);
        return $this->session->set('cart', $cart);
    }

    public function decreases(Product $product)
    {
        $cart = $this->session->get('cart', []);

        if ($cart[$product->getId()] > 1){
            $cart[$product->getId()]--;

        }else{
            unset($cart[$product->getId()]);
        }
        return $this->session->set('cart', $cart);
    }

    public function getFull()
    {
        $cartComplete = [];
        if ($this->get())
        {
            foreach ($this->get()as $id => $quantity){
                $product_object = $this->entityManager->getRepository(Product::class)->findOneBy(['id'=>$id]);
                if(!$product_object){
                    $this->delete($id);
                    continue;
                }
                $cartComplete[] =[
                    'product' => $product_object,
                    'quantity'=> $quantity
                ];

        }
        }
        return $cartComplete;
    }

}
