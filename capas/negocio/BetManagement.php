<?php

class BetManagement
{
    public function wager()
    {
        $clientPersistence = new ClientPersistence();
        $client = $clientPersistence->getClient(1);

        $gamePersistence = new GamePersistence();
        $game = $gamePersistence->getGame(1);

        $availableBalance = $this->checkAvailableBalance($client->getBalance(), $game->getCostBet());

        if ($availableBalance) {
            $updatedBalance = $this->discountBalanceClient($client->getBalance(), $game->getCostBet());
            $clientPersistence->updateBalance($client, $updatedBalance);
        }
    }

    private function checkAvailableBalance($balanceClient, $costGame)
    {
        return $balanceClient >= $costGame ? true : false;
    }

    private function discountBalanceClient($balanceClient, $costGame)
    {
        return $balanceClient - $costGame;
    }

}