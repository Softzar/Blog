<?php

namespace Softzar\Blog\Bootstrap;

use Illuminate\Database\Capsule\Manager as Capsule;

class EloquentBootstrap
{
    protected $instance;

    /**
     * BlogBootstrap constructor.
     * TODO: Separar em um arquivo de configuracao
     */
    public function __construct()
    {
        $this->instance = new Capsule;

        $this->instance->addConnection([
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'Blog',
            'username'  => 'homestead',
            'password'  => 'secret',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ]);

        $this->instance->bootEloquent();
    }

    public function getEloquent()
    {
        return $this->instance;
    }
}