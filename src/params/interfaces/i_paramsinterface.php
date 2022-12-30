<?php

interface IParamsHotDog {
    public function SetBuilder(IParamsHotDog $builder): IParamsHotDog;
    public function SetWantsKetchup(bool $Value): IParamsHotDog;
    public function SetWantsFries(bool $Value): IParamsHotDog;
    public function SetWantsMustard(bool $Value): IParamsHotDog;
    public function SetWantsBacon(bool $Value): IParamsHotDog;
    public function ReturnWantsKetchup(): bool;
    public function ReturnWantsFries(): bool;
    public function ReturnWantsMustard(): bool;
    public function ReturnWantsBacon(): bool;

}    