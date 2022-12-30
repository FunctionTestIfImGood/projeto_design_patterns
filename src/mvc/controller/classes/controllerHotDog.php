<?php

require_once(__ROOT__ . '\projeto_pessoal\src\mvc\controller\interfaces\i_controllerhotdog.php');
require_once(__ROOT__ . '\projeto_pessoal\src\mvc\model\interfaces\i_modelhotDog.php');
require_once(__ROOT__ . '\projeto_pessoal\src\mvc\model\classes\modelhotDog.php');

class HotDogController implements IControllerHotDog {
    private $modelhotDog;
    public function __construct() {
        $this->modelhotDog = new ModelHotDog();
    }
    public function TestIfUserWantsFries(bool $value): bool {
        return $this->modelhotDog->TestIfUserWantsFries($value);
    }
    public function TestIfUserWantsKetchup(bool $value): bool {
        return $this->modelhotDog->TestIfUserWantsKetchup($value);
    }
    public function TestIfUserWantsMostard(bool $value): bool {
        return $this->modelhotDog->TestIfUserWantsMostard($value);
    }
    public function TestIfUserWantsBacon(bool $value): bool{
        return $this->modelhotDog->TestIfUserWantsBacon($value);
    }
}
