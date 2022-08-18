<?php

namespace Application;

use Application\Store\NFCCard;
use Exception;

class Turnstile
{

    /**
     * @throws Exception
     */

    public function pass(NFCCard $nfcCard): void
    {
        if ($nfcCard->getCreditAmount() > 0) {
            $nfcCard->removeCredit();
            echo 'User passed successfully' . "\n";
        } else {
            echo 'Out of credit. Access denied!' . "\n";
        }
    }
}