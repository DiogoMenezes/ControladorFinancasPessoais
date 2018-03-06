<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 05/03/2018
 * Time: 23:50
 */
declare(strict_types=1);

namespace SONFin\Plugins;


use Aura\Router\RouterContainer;
use SONFin\ServiceContainerInterface;


class RoutePlugin implements PluginInterface
{

    public function register(ServiceContainerInterface $container)
    {
        $routerContainer = new RouterContainer();
        /* Registrar as rotas da aplicação */
        $map = $routerContainer->getMap();
        /* Tem a função de identificar a rota que está sendo acessada*/
        $matcher = $routerContainer->getMatcher();
        /* Tem a função de gerarlinks combase nas rotas registradas*/
        $generator = $routerContainer->getGenerator();

        $container->add('routing', $map);
        $container->add('routing.matcher', $matcher);
        $container->add('routing.generator', $generator);
    }
}