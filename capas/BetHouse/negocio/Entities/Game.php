<?php

class Game
{
    private $id;
    private $name;
    private $costBet;

    public function __construct()
    {
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCostBet()
    {
        return $this->costBet;
    }
}