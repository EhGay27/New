<?php
$solider = new solider();
$solider->name = "Barvo";
$soldierEmoji = "\u{1F482}";
echo $soldierEmoji;

$solider->fight();
$solider->shoot();
$solider->drive();

class Army
{
    public $name;

    public function fight()
    {
        echo $this->name . " is fighting his enemy.<br>";
    }
}

class Solider extends Army
{
    public function shoot()
    {
        echo $this->name . " is shooting the target.<br>";
    }

    public function drive()
    {
        echo $this->name . " is driving the Tank.";
    }
}
