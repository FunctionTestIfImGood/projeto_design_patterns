<?php

interface IModelHotDog {
    public function TestIfUserWantsFries(bool $value): bool;
    public function TestIfUserWantsKetchup(bool $value): bool;
    public function TestIfUserWantsMostard(bool $value): bool;
    public function TestIfUserWantsBacon(bool $value): bool;
}
