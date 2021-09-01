<?php

class Movie {
    public $name;
    public $genre;
    public $duration = 0;
    public $avg_vote;
    public $quality;

    function __construct($_name, $_duration){
        $this->name = $_name;
        $this->duration = $_duration;
    }

    public function getQuality(){
        if($this->avg_vote < 6){
            $this->quality = 'bad';
        } else {
            $this->quality = 'good';
        }
        return $this->quality;
    }
}

$top_gun = new Movie('Top Gun', 110);
$top_gun->genre = 'azione';
$top_gun->avg_vote = 8;
$top_gun->getQuality($top_gun->avg_vote);
var_dump($top_gun);

$forrest_gump = new Movie('Forrest Gump', 142);
$forrest_gump->genre = 'drammatico';
$forrest_gump-> avg_vote = 10;
$forrest_gump->getQuality($forrest_gump->avg_vote);
var_dump($forrest_gump);

$sharknado = new Movie('Sharknado', 86);
$sharknado->genre = 'trash';
$sharknado->avg_vote = 5;
$sharknado->getQuality($sharknado->avg_vote);
var_dump($sharknado);