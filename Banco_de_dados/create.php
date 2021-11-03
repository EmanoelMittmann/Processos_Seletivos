<?php
session_start();
include_once 'conexao.php';

$numero = filter_input(INPUT_POST,'nrochassi', FILTER_SANITIZE_SPECIAL_CHARS);
$marca  = filter_input(INPUT_POST,'marca',FILTER_SANITIZE_SPECIAL_CHARS);
$modelo = filter_input(INPUT_POST,'modelo',FILTER_SANITIZE_SPECIAL_CHARS);
$ano    = filter_input(INPUT_POST,'ano',FILTER_SANITIZE_NUMBER_INT);
$placa  = filter_input(INPUT_POST,'placa',FILTER_SANITIZE_SPECIAL_CHARS);
$caracteristicas = filter_input(INPUT_POST,'caracteristica',FILTER_SANITIZE_SPECIAL_CHARS);

$querySelect = $link->query("select nrochassi from cadastro");
$array_nrochassis = []; 

while($nrochassi = $querySelect->fetch_assoc()):
    $nrochassi_existentes = $nrochassi['nrochassi'];
    array_push($array_nrochassis,$nrochassi_existentes);
endwhile;

if(in_array($numero,$array_nrochassis)):
    $_SESSION['msg'] = "<p class = 'center red-text'>".'Ja existe um carro com esse chassi'."</p>";
    header("location:../index.php");
else:
    $queryInsert = $link->query("insert into cadastro values(default,'$numero','$marca','$modelo','$ano','$placa','$caracteristicas')");
    $affected_rows = mysqli_affected_rows($link);

    if($affected_rows > 0): 
        $_SESSION['msg']="<p class='center green-text'>Cadastro efetuado com sucesso</p>";
        header("Location:../index.php");

    endif;
endif;
?>