<?php
require_once 'RandomInterface.php';
use RandomInterface;
class Coin implements RandomInterface{
    public function random():int{
        return rand(0,1) ;
    }
}