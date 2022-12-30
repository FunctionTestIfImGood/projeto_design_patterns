<?php

require_once(__ROOT__.'\builder\interfaces\i_interfacehotdog.php');

class HotDog implements IHotDog {
    private $Ketchup;
    private $Bacon;
    private $Fries;
    private $Mustard;
    private $builder;


    public function __construct(){
    }
    public function AddBuilder(IHotDog $builder): IHotDog {
        $this->builder = $builder;
        return $builder;
    }
    public function addKetchup(bool $value): IHotDog {
        $this->Ketchup = $value;
        return $this->builder;
    }
    public function addMustard(bool $value): IHotDog {
        $this->Mustard = $value;
        return $this->builder;
    }
    public function addFries(bool $value): IHotDog {
        $this->Fries = $value;
        return $this->builder;
    }
    public function addBacon(bool $value): IHotDog {
        $this->Bacon = $value;
        return $this->builder; 
    }
}