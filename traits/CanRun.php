<?php
/**
 * Created by PhpStorm.
 * User: ШулякД
 * Date: 05.03.2020
 * Time: 16:27
 */

trait CanRun
{
 public function CheckRun($foot){
     if($foot){
         return true;
     }

     return false;
 }
}