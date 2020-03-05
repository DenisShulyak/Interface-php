<?php
/**
 * Created by PhpStorm.
 * User: ШулякД
 * Date: 05.03.2020
 * Time: 16:26
 */

trait CanFly
{
public function CheckFly($isWings){
    if($isWings){
    return true;
    }
     return false;
}
}