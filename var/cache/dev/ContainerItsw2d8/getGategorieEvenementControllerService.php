<?php

namespace ContainerItsw2d8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGategorieEvenementControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\GategorieEvenementController' shared autowired service.
     *
     * @return \App\Controller\GategorieEvenementController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'GategorieEvenementController.php';

        $container->services['App\\Controller\\GategorieEvenementController'] = $instance = new \App\Controller\GategorieEvenementController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\GategorieEvenementController', $container));

        return $instance;
    }
}