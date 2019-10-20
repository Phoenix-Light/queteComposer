<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use App\Wcs\Hello;
use HelloWorld\SayHello;

//Creation of a new instance of Hello class from Directory src/Wcs/Hello.php
$Hello = new Hello();

//Creation of a new instance of SayHello class from Directory vendor/ehime/hello-World/src/HelloWorld/SayHello.php
$Helloworld = new SayHello();


//Use Hello class method talk()
echo $Hello->talk() . '<br>';

//Use SayHello class method world()
echo SayHello::world();