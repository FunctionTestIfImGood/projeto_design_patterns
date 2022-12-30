<?php

interface IHotDog {
    public function AddBuilder(IHotDog $builder): IHotDog;
    public function addKetchup(bool $value): IHotDog;
    public function addMustard(bool $value): IHotDog;
    public function addFries(bool $value): IHotDog;
    public function addBacon(bool $value): IHotDog;
}