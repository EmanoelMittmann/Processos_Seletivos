<?php
    $hostname = "localhost";
    $db = "emanoelmittmann";
    $usuario = "root";
    $senha = "";

    $utf8 = header("Content-Type: text/html; charset=utf-8");
    $link = new mysqli($hostname,$usuario,$senha,$db);
    $link->set_charset('utf8');

    if($link->connect_errno){
        echo "falha ao conectar(" . $link->connect_errno. ")" . $link->connect_error;
        exit();
    }



?>