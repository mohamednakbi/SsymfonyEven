<?php

namespace ContainerGLc9UcE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_S8Jea_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.s8Jea._' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.s8Jea._'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'gategorieEvenement' => ['privates', '.errored..service_locator.s8Jea._.App\\Entity\\GategorieEvenement', NULL, 'Cannot autowire service ".service_locator.s8Jea._": it references class "App\\Entity\\GategorieEvenement" but no such service exists.'],
        ], [
            'gategorieEvenement' => 'App\\Entity\\GategorieEvenement',
        ]);
    }
}