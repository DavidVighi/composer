<?php
CONST BR = '<br/>';

require __DIR__.'/../vendor/autoload.php';

$hello = new Hello();
$helloworld = new namespace\HelloWorld\SayHello();
echo $hello->Talk();
echo BR;
echo $helloworld->world();
