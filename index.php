<?php
require 'vendor/autoload.php';

use Application\Store\Store;
use Application\Turnstile;
use Application\User;

$store = new Store();
$turnstile = new Turnstile();
$user = new User();

$card = $store->getNfcCard();
$user->setNfcCard($card);
//$card->addCredit(10);
$store->refill($user->getNfcCard(), 10);

for ($i = 0; $i <= 10; $i++) {
    echo $i . ' ';
    $turnstile->pass($user->getNfcCard());
}