<?php
include_once 'IKind.php';
include_once 'IBird.php';
include_once 'IFish.php';
include_once 'IHuman.php';
include_once 'IPig.php';
include_once 'ISpider.php';

class Animal implements IBird
{


    use CanFly, CanRun, CanSwim, CanWallow, CanWeaves;


    public $name;
    public $isFoot;
    public $isWings;
    public $isMouth;
    public $isGills;
    public function __construct($isFoot, $isWings, $isMouth, $isGills)
    {
    $this->isFoot = $isFoot;
    $this->isWings = $isWings;
    $this->isMouth = $isMouth;
    $this->isGills = $isGills;
    }


    public function move()
    {
        if ($this->isFoot){
            return 'Ходит';
        }
        return 'Ползает';
    }

    public function eat()
    {
        if($this->isMouth){
            return 'Кушает';
        }
        return 'Употребляет иным способом';
    }

    public function drink()
    {
        if($this->isMouth){
            return 'Пьет';
        }
        return 'Пьет иным способом';
    }

    public function fly()
    {
        if($this->isWings){
            return 'Летает';
        }
        return 'Летать не дано';
    }

    public function swim()
    {
        if($this->isGills){
            return 'Плавает';
        }
        return 'Дышать под водой не дано';
    }

    public function info()
    {
        return $this->move() . ", ". $this->eat() .",". $this->drink() . ", ". $this->fly() . ', ' . $this->swim();
    }

    public function chik_cherik()
    {
      return  $this->CheckFly($this->isWings);
    }
}