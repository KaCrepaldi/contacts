<?php

require_once('./connection.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$connection->select_db('contacts');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $lastname = test_input($_POST["lastname"]);
    $email = test_input($_POST["email"]);
    $phone= test_input($_POST["name"]);

    $value = '"'. $name . '","' . $lastname . '","' . $email .
    '","' . $phone . '"';

    $sql= "INSERT INTO contacts (name, lastname, email, phone)
    VALUES (" . $values . ")";

if($connection->query($sql)) {
    echo "Contato criado com sucesso. <br>";
header("Location: /contacts");
} else {
    echo "erro na criação da tabela <br>" .$connection->error;
}

$connectio->close();
}

