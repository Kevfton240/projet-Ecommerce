<?php

namespace App\Controller\Admin;

use App\Entity\Carrier;
use App\Entity\Category;
use App\Entity\Order;

use App\Entity\Product;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{

    public function __construct(
        private AdminUrlGenerator $adminUrlGenerator
    )
    {
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
       $url=$this->adminUrlGenerator->setController(UserCrudController::class)
           ->generateUrl();
       return $this->redirect($url);


    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('La Boutique Française');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud(label: "User",icon: 'fa fa-users',entityFqcn: User::class);
        yield MenuItem::linkToCrud(label: "Category",icon: 'fas fa-list',entityFqcn: Category::class);
        yield MenuItem::linkToCrud(label: "Product",icon: "fa fa-tag",entityFqcn: Product::class);
        yield MenuItem::linkToCrud(label: 'Carrier',icon: 'fa fa-truck',entityFqcn: Carrier::class);
        yield MenuItem::linkToCrud(label: "Orders",icon: 'fa-solid fa-cart-shopping',entityFqcn: Order::class);
    }
}
