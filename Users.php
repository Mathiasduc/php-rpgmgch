<?php 
include 'Client.php';
$client1 = new Client("voici un ID:120", "voici un email: truc@gmail.com");
$client2 = new Client("un autre id: 12390", "un autre email: machin@gmail.com");

return [
$client1,
$client2
];

?>