<?php
require "Client.php";
$client1    = Client::getInstance();
echo $client1->step;
echo "\r\n";

$client2    = Client::getInstance();
echo $client1->step;
echo "\r\n";
 ?>
