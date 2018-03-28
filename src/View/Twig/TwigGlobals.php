<?php

namespace SONFin\View\Twig;

use SONFin\Auth\AuthInterface;
use Twig_Extension;
use Twig_Extension_GlobalsInterface;

class TwigGlobals extends Twig_Extension implements Twig_Extension_GlobalsInterface
{
    /**
     * @var AuthInterface
     */
    private $auth;

    /**
     * TwigGlobals constructor.
     */
    public function __construct(AuthInterface $auth)
    {
        $this->auth = $auth;
    }

    public function getGlobals()
    {
        return [
            'Auth' => $this->auth
        ];
    }
}