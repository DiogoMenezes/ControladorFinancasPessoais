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
use SONFin\View\Twig\TwigGlobals;
use SONFin\View\ViewRenderer;

class ViewPlugin implements PluginInterface
{

    public function register(ServiceContainerInterface $container)
    {
        $container->addLazy(
            'twig', function (ContainerInterface $container) {
                $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../../templates');
                $twig = new \Twig_Environment($loader);

                $auth = $container->get('auth');

                $generator = $container->get('routing.generator');
                $twig->addExtension(new TwigGlobals($auth));
                $twig->addFunction(
                    new \Twig_SimpleFunction(
                        'route',
                        function (string $name, array $params = []) use ($generator) {
                            return $generator->generate($name, $params);
                        }
                    )
                );
                return $twig;
            }
        );

        $container->addLazy(
            'view.renderer', function (ContainerInterface $container) {
                $twigEnviroment = $container->get('twig');
                return new ViewRenderer($twigEnviroment);
            }
        );

    }
}