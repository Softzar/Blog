<?php

namespace Softzar\Blog;

use Softzar\Blog\Bootstrap\EloquentBootstrap;
use Cartalyst\Sentinel\Native\Facades\Sentinel;

class Blog
{

    protected $eloquent;
    protected $sentinel;

    /**
     * @param EloquentBootstrap|null $eloquentBootstrap
     */
    public function __construct(EloquentBootstrap $eloquentBootstrap = null)
    {
        if($eloquentBootstrap === null) {
            $eloquentBootstrap = new EloquentBootstrap;
        }

        $this->eloquent = $eloquentBootstrap->getEloquent();
        $this->sentinel = (new Sentinel())->getSentinel();
    }


    public function getEloquentInstance()
    {
        return $this->eloquent;
    }


    public function getSentinelInstance()
    {
        return $this->sentinel;
    }
}