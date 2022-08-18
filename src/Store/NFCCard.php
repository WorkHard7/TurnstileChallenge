<?php

namespace Application\Store;

use Exception;

class NFCCard
{
    private int $credits = 0;

    public function addCredit(int $number): void
    {
        $this->credits += $number;
    }

    public function removeCredit(): void
    {
        $this->credits--;
    }

    /**
     * @throws Exception
     */
    public function getCreditAmount(): int
    {
        return $this->credits;
    }
}