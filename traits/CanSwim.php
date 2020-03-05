<?php
/**
 * Created by PhpStorm.
 * User: ШулякД
 * Date: 05.03.2020
 * Time: 16:26
 */

trait CanSwim
{
public function CheckSwim($isGills){

    if($isGills){
        return true;
    }

    return false;
}
}