<?php

namespace Application\Store;

class Store
{
    public function refill(NFCCard $card, int $amount): void
    {
        $card->addCredit($amount);
    }

    public function getNfcCard(): NFCCard
    {
        return new NFCCard();
    }
}