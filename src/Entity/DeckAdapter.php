<?php
class DeckAdapter(){
    private $deck;
    public function __construct($deck) {
        $this->deck = $deck;
    }
    public function getDeck(){

        switch($this->desk){
            case 11:
                return "As "+$this->getType();
            case 12:
                return "Valet "+$this->getType();
            case 13:
                return "Dame "+$this->getType();
            case 14:
                return "Roi "+$this->getType();
            default:
                return $this->deck +" "+ $this->getType();
        }
    }
        
    private function getType(){
        $type = rand(1,4);
        switch($type){
            case 1:
                return "Cœurs";
            case 2:
                return "Piques";
            case 3:
                return "Carreaux";
            case 4:
                return "Trèfles";
        }
    }
}