<?php

namespace ContainerM991Ehg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Class\Cart' shared autowired service.
     *
     * @return \App\Class\Cart
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Class/Cart.php';

        return $container->privates['App\\Class\\Cart'] = new \App\Class\Cart(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
