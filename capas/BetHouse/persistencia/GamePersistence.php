<<<<<<< HEAD
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
=======
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

    public function save()
    {
        
    }
>>>>>>> b0d67e9d143fd6799c9215295c010701d95a39f2
}