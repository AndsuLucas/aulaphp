<?php 

function dieDump($dump){
    echo "<pre>";

    var_dump($dump);

    echo "</pre>";
    die("Código finalizado.");
}