<?php
class Game{


    private Element $player1;
    private Element $player2;


    public function __construct(Element $player1, Element $player2){
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function getWinner(): ?Element{
        
    }

}