<?php

require_once 'Element.php';
require_once 'Game.php';
require_once  'Player.php';

$paper = new Element("Paper");
$scissors = new Element("Scissors");
$rock = new Element("Rock");

//iestatam vērtību, kurš kuru uzvar
$rock->setBeats($scissors);
$paper->setBeats($rock);
$scissors->setBeats($paper);

$elements = [
    $paper,
    $scissors,
    $rock
];

foreach ($elements as $key => $element){
    echo "{$key}.{$element->getName()}".PHP_EOL;
}

$selection = (int)readline('Enter element: ');
$selectedElement = $elements[$selection];
$opponentElement = $elements[array_rand($elements)];

//echo $selectedElement->getName() . " VS " . $opponentElement->getName() . PHP_EOL;
//inicializē spēli, kurā ir visi spēles elementi
$game = new Game($selectedElement, $opponentElement);
$winner = $game->getWinner();

if($winner === null){
    echo "The game is a tie!";
}