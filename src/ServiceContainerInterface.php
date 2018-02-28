<?php
// modo "forte" de checagem de tipo
declare(strict_types=1);
namespace SONFin;


interface ServiceContainerInterface
{
    public function add(string $name,$service);

    public function addLazy(string $name, callable $callable);

    public function get(string $name);

    public function has(string $name);
}