<?php
include_once 'conexao.php';

$querySelect = $link->query("select * from cadastro");
while($registros = $querySelect->fetch_assoc()):
    $id     = $registros['id'];
    $numero = $registros['nroChassi'];
    $marca  = $registros['marca'];
    $modelo = $registros['modelo'];
    $ano    = $registros['ano'];
    $placa  = $registros['placa'];
    $caracteristicas = $registros['caracteristicas'];

    echo "<tr>";
    echo "<td>$numero</td>
    <td>$marca</td>
    <td>$modelo</td>
    <td>$ano</td>
    <td>$placa</td>
    <td>$caracteristicas</td>
    <td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></a></td>
    <td><a href='banco_de_dados/delete.php?id=$id'><i class='material-icons'>delete</i></a></td>";
    echo "</tr>";

endwhile
?>