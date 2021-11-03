<?php
session_start();
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php';
?>
<div class="row container">
    <div class="col s12">
        <h5 class="light">Edição de Registro</h5><hr>
    </div>
</div>
<?php
    include_once 'banco_de_dados/conexao.php';

    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT); 
    $_SESSION['id'] = $id;  
    $querySelect = $link->query("select * from cadastro where id='$id'");

while($registros = $querySelect->fetch_assoc()):
    $id     = $registros['id'];
    $numero = $registros['nroChassi'];
    $marca  = $registros['marca'];
    $modelo = $registros['modelo'];
    $ano    = $registros['ano'];
    $placa  = $registros['placa'];
    $caracteristicas = $registros['caracteristicas'];
endwhile;
?>

<!--FORMULÁRIO DE CADASTRO-->

<div class="row container">
        <p>&nbsp;</p>
        <form action="Banco_de_dados/update.php" method="post" class="col s12">
            <fieldset class="formulario">
                <legend>Cadastro de Automoveis</legend>
                <h5 class="light center width 10px"></h5>

                <div class="input-field col s12"> 
                    <input type="text" name="nrochassi" id="nrochassi" value="<?php echo $numero?>" maxlength="17" required autofocus>
                    <label for="nrochassi">Numero de Chassi</label>
                </div>
                <div class="input-field col s12"> 
                    <input type="text" name="marca" id="marca" value="<?php echo $marca?>" maxlength="15" required autofocus>
                    <label for="marca">Marca do Veiculo</label>
                </div>
                <div class="input-field col s12"> 
                    <input type="text" name="modelo" id="modelo" value="<?php echo $modelo?>" maxlength="15" required autofocus>
                    <label for="modelo">Modelo de Veiculo</label>
                </div>
                <div class="input-field col s12"> 
                    <input type="text" name="ano" id="ano" value="<?php echo $ano?>" maxlength="4" required autofocus>
                    <label for="ano">Ano</label>
                </div>
                <div class="input-field col s12"> 
                    <input type="text" name="placa" id="placa" value="<?php echo $placa?>" maxlength="10" required autofocus>
                    <label for="placa">Placa</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="caracteristica" id="caracteristica" value="<?php echo $caracteristicas?>" maxlength="10" required autofocus>
                    <label for="caracteristica">Caracteristica</label>
                </div>
                <div class="input-field col s12">
                    <input type="submit" value="Alterar" class="btn blue">
                    <a href="consulta.php" class="btn red">cancelar</a>
                </div>
            </fieldset>
           
        </form>
    </div>
    
    

<?php include_once 'includes/footer.inc.php'?>