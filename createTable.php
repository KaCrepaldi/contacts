<?php
require_once('./connection.php');

$sql = "CREATE TABLE contact (" .
    "id INT(6) UNSIGNED AUTO_INCREMENT".
    "name VARCHAR(30) NOT NULL ,".
    "lastname VARCHAR(30),".
    "phone VARCHAR(30) NOT NULL,".
    "email VARCHAR(30),".
    "create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,".
    "primary key(id)".
    ");";

$connection->select_db('contacts');

if($connection->query($sql)) {
    echo "Tabela contact criada com sucesso.";
} else {
    echo "erro na criação da tabela <br>" .$connection->error;
}


$connection->close();