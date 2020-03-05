<?php
/**
 * Created by PhpStorm.
 * User: ШулякД
 * Date: 05.03.2020
 * Time: 16:28
 */

trait CanWallow
{
 public function CheckWallow($isPiglet){
     if($isPiglet){
         return true;
     }
     return false;
 }
}