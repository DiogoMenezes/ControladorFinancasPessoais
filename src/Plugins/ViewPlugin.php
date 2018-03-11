<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/03/2018
 * Time: 06:28
 */

namespace SONFin\Plugins;


use SONFin\ServiceContainerInterface;
use Interop\Container\ContainerInterface;
use SONFin\View\ViewRenderer;

class ViewPlugin implements PluginInterface
{
    public function register(ServiceContainerInterface $container)
    {
        $container->addLazy('twig', function (ContainerInterface $container) {
            $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../../templates');
            $twig = new \Twig_Environment($loader);
            return $twig;
        });

        $container->addLazy('view.renderer', function (ContainerInterface $container) {
            $twigEnvironment = $container->get('twig');
            return new ViewRenderer($twigEnvironment);
        });
    }
}