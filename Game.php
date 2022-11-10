<?php
class Game{


    private Element $player1;
    private Element $player2;


    public function __construct(Element $player1, Element $player2){
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function getWinner(): ?Element{
        if($this->player1->getName() === $this->player2->getName()){
            return null;
        }
        if($this->player1->getBeats()->getName() === $this->player2->getName())
        {
            return $this->player1;
        }
        return $this->player2;
    }

}