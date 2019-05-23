<?php
if (isset($_GET) && isset($_GET['id'])) {

    require './clientSoap.php';
    $id = (int) $_GET['id'];
    var_dump($client->getContact($id));
} else {
    echo "Nada para apresentar";
}

