<?php

class Dice implements RandomInterface{
    public function random(){
        return rand(1,6);
    }
}