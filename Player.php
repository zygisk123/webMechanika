<?php
class Player{

    public $name;
    public $score;
    function __construct($name = null){
        $this->name = $name;
        $this->score = 0;
    }

    public function changeScore($points)
    {
        $this->score += $points;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getScore()
    {
        return $this->score;
    }
}

?>