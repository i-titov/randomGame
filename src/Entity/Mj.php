<?php
use Deck;
use Dice;
use Coin;
use DeckAdapter;

class Mj {
    public $desk;
    public $coin;
    public $dice;

    public function __construct() {
        $this->desk = new Desk();
        $this->coin = new Coin();
        $this->dice = new Dice();
    }
    public function rollForCrit(int $critRate)
    {
        switch($critRate){
            case 1:
                echo "Une pièce se lance "+ $this->coin->random()== 0 ? "face" : "pile";
                break;
            case 2:
                echo "Un dé se lance "+$this->dice->random();
                break;
            case 3:
                $adapter = new DeckAdapter($this->desk->random());
                echo $adapter->getDeck(); 
                break;
        }

    }
}