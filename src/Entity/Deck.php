<?php
class Deck implements RandomInterface{
    public function random(){
        return rand(1,14);
    }
}