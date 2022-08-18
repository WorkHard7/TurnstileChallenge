<?php

namespace Application;

use Application\Store\NFCCard;

class User
{
    private NFCCard $nfcCard;

    public function getNfcCard(): NFCCard
    {
        return $this->nfcCard;
    }

    public function setNfcCard(NFCCard $nfcCard): void
    {
        $this->nfcCard = $nfcCard;
    }
}