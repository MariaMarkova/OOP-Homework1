<?php

require_once 'autoload.php';

$gsm1 = new GSM('Samsung Galaxy Grand Prime');
$gsm2 = new GSM('Iphone 6S');

$gsm1->insertSimCard('0896722484');
$gsm2->insertSimCard('0896724484');

$gsm1->call($gsm2, 5);

echo $gsm1->printInfoForTheLastOutgoingCall();
echo $gsm1->getSumForCall();

echo $gsm2->printInfoForTheLastIncomingCall();
