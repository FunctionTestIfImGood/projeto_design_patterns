<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__. '\projeto_pessoal\src\builder\classes\classHotDog.php');
require_once(__ROOT__.'\projeto_pessoal\src\builder\interfaces\i_interfacehotdog.php');
require_once(__ROOT__ . '\projeto_pessoal\src\mvc\controller\interfaces\i_controllerhotdog.php');
require_once(__ROOT__ . '\projeto_pessoal\src\mvc\controller\classes\controllerHotDog.php');
require_once(__ROOT__. '\projeto_pessoal\src\params\classes\ParamsHotDog.php');


$pedidohotDog = new HotDog;
$pedidohotDog->AddBuilder($pedidohotDog)->
                                        addBacon(true)->
                                        addFries(true)->
                                        addKetchup(true)->
                                        addMustard(false);
$parametroshotDog = new ParamsHotDog();
$parametroshotDog->SetBuilder($parametroshotDog)
                 ->SetWantsBacon($pedidohotDog->Bacon)
                 ->SetWantsFries($pedidohotDog->Fries)
                 ->SetWantsMustard($pedidohotDog->Mustard)
                 ->SetWantsKetchup($pedidohotDog->Ketchup);                                        

$controllerhotDog = new HotDogController();      


function TestIfUserWantsBacon() {
    global $controllerhotDog;
    global $parametroshotDog;
    if ($controllerhotDog->TestIfUserWantsBacon($parametroshotDog->ReturnWantsBacon())) {
        echo "O usuário quer bacon!\n";
    } else {
        echo "O usuário não quer bacon!\n";
    }
}

function TestIfUserWantsFries() {
    global $controllerhotDog;
    global $parametroshotDog;
    if ($controllerhotDog->TestIfUserWantsFries($parametroshotDog->ReturnWantsFries())) {
        echo "O usuário quer batata palha!\n";
    } else {
        echo "O usuário não quer batata palha!\n";
    }
    
}
function TestIfUserWantsMustard() {
    global $controllerhotDog;
    global $parametroshotDog;
    if ($controllerhotDog->TestIfUserWantsMostard($parametroshotDog->ReturnWantsMustard())) {
        echo "O usuário quer mostarda!\n";
    } else {
        echo "O usuário não quer mostarda!\n";
    }
    
}
function TestIfUserWantsKetchup() {
    global $controllerhotDog;
    global $parametroshotDog;
    if ($controllerhotDog->TestIfUserWantsKetchup($parametroshotDog->ReturnWantsKetchup())) {
        echo "O usuário quer ketchup!\n";
    } else {
        echo "O usuário não quer ketchup!\n";
    }
    
}


TestIfUserWantsBacon();
TestIfUserWantsKetchup();
TestIfUserWantsMustard();
TestIfUserWantsFries();