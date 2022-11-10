<?php

require_once 'Element.php';
require_once 'Game.php';

$elements = [
    new Element("Paper"),
    new Element("Scissors"),
    new Element("Rock")
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