<?php

$connection = new PDO(
    "mysql:host=localhost;charset=utf8;dbname=gerenciamentodefaltas",
    "root","password"
);
$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
