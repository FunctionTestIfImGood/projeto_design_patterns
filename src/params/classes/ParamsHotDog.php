<?php
require_once(__ROOT__ . '\projeto_pessoal\src\params\interfaces\i_paramsinterface.php');

class ParamsHotDog implements IParamsHotDog {
    private $wantsKetchup;
    private $wantsMustard;
    private $wantsBacon;
    private $wantsFries;
    private $builder;

    public function __construct() {

    }

    public function SetBuilder(IParamsHotDog $builder): IParamsHotDog{
        $this->builder = $builder;
        return $this->builder;
    }
    public function SetWantsKetchup(bool $Value): IParamsHotDog {
        $this->wantsKetchup = $Value;
        return $this->builder;
    }
    public function SetWantsFries(bool $Value): IParamsHotDog{
        $this->wantsFries = $Value;
        return $this->builder;
    }
    public function SetWantsMustard(bool $Value): IParamsHotDog{
        $this->wantsMustard = $Value;
        return $this->builder;
    }
    public function SetWantsBacon(bool $Value): IParamsHotDog{
        $this->wantsBacon = $Value;
        return $this->builder;
    }
    public function ReturnWantsKetchup(): bool{
        return $this->wantsKetchup;
    }
    public function ReturnWantsFries(): bool{
        return $this->wantsFries;
    }
    public function ReturnWantsMustard(): bool{
        return $this->wantsMustard;
    }
    public function ReturnWantsBacon(): bool{
        return $this->wantsBacon;
    }
}

