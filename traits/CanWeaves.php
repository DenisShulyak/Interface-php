<?php
/**
 * Created by PhpStorm.
 * User: ШулякД
 * Date: 05.03.2020
 * Time: 16:27
 */

trait CanWeaves
{
        public function CheckWeaves($isWeb){
if($isWeb){
    return true;
}
return false;
        }
}