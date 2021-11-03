<?php
session_start();
include_once 'conexao.php';
$id = $_SESSION['id'];

$numero = filter_input(INPUT_POST,'nrochassi', FILTER_SANITIZE_SPECIAL_CHARS);
$marca  = filter_input(INPUT_POST,'marca',FILTER_SANITIZE_SPECIAL_CHARS);
$modelo = filter_input(INPUT_POST,'modelo',FILTER_SANITIZE_SPECIAL_CHARS);
$ano    = filter_input(INPUT_POST,'ano',FILTER_SANITIZE_NUMBER_INT);
$placa  = filter_input(INPUT_POST,'placa',FILTER_SANITIZE_SPECIAL_CHARS);
$caracteristicas = filter_input(INPUT_POST,'caracteristica',FILTER_SANITIZE_SPECIAL_CHARS);

$queryUpdate = $link -> query("update cadastro set nrochassi='{$numero}',marca='{$marca}',modelo='{$modelo}',ano='{$ano}',placa='{$placa}',caracteristicas='{$caracteristicas}' where id='$id'");
$affected_rows = mysqli_affected_rows($link);

if($affected_rows > 0):
    header("location:../consulta.php");
endif;
?>