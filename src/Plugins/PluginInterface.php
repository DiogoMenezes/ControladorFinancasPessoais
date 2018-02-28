<?php
/**
 * Created by PhpStorm.
 * User: dgm
 * Date: 2/28/2018
 * Time: 1:09 PM
 */

namespace SONFin\Plugins;


use SONFin\ServiceContainerInterface;

interface PluginInterface
{
    public function register(ServiceContainerInterface $container);
}