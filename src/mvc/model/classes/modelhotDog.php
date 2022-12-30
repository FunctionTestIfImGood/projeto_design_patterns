<?php
require_once(__ROOT__ . '\projeto_pessoal\src\mvc\model\classes\modelhotDog.php');

class ModelHotDog implements IModelHotDog {
    public function __construct() {

    }
    public function TestIfUserWantsFries(bool $value): bool {
        return ($value);
    }
    public function TestIfUserWantsKetchup(bool $value): bool {
        return ($value);
    }
    public function TestIfUserWantsMostard(bool $value): bool {
        return ($value);
    }
    public function TestIfUserWantsBacon(bool $value): bool{
        return ($value);
    }
    
}