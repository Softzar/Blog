<?php

require 'vendor/autoload.php';

$Test = new Softzar\Blog\Blog();


var_dump($Test->getSentinelInstance()->register([
    'email'    => 'test@example.com',
    'password' => 'foobar',
]));