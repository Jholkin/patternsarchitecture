<?php

class GamePersistence
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getConnect();
    }

    public function getAll()
    {
        $games = $this->db->query("SELECT * FROM games;");

        return $games;
    }

    public function getGame($id)
    {
        $game = $this->db->query("SELECT * FROM game WHERE id={'$id'};");
        return $game->fetch(PDO::FETCH_OBJ);
    }
}