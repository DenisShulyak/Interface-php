<?php
include_once ('Animal.php');
//public function __construct($isFoot, $isWings, $isMouth, $isGills)
$animal = new Animal(true, true, false, false);

echo $animal->info();