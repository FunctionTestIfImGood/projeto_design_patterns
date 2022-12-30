<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__. '\builder\classes\classHotDog.php');
require_once(__ROOT__.'\builder\interfaces\i_interfacehotdog.php');


$pedidohotDog = new HotDog;
$pedidohotDog->AddBuilder($pedidohotDog)->
                                        addBacon(true)->
                                        addFries(true)->
                                        addKetchup(true)->
                                        addMustard(false);

var_dump($pedidohotDog);                                    