<?php

class Movie {
    public $name;
    public $genre;
    public $duration = 0;
    public $avg_vote;

    function __construct($_name, $_duration){
        $this->name = $_name;
        $this->duration = $_duration;
    }
}






$top_gun = new Movie('Top Gun', 110);
$top_gun->genre = 'azione';
$top_gun->avg_vote = 8;
var_dump($top_gun);

$forrest_gump = new Movie('Forrest Gump', 142);
$forrest_gump->genre = 'drammatico';
$forrest_gump-> avg_vote = 10;
var_dump($forrest_gump);

$sharknado = new Movie('Sharknado', 86);
$sharknado->genre = 'trash';
$sharknado->avg_vote = 5;
var_dump($sharknado);