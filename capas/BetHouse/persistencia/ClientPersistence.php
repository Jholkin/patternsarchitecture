<?php

class ClientPersistence
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getConnect();
    }

    public function getClient($id)
    {
        $client = $this->db->query("SELECT * FROM clients WHERE id={'$id'};");
        return $client->fetch(PDO::FETCH_OBJ);
    }

    public function updateBalance($client, $newBalance)
    {
        $sql = "INSERT INTO clients VALUES(null, '{$client->getName()}', '{$newBalance}')";
        $statement = $this->db->prepare($sql);

        return $statement->execute() ? true : false;
    }
}