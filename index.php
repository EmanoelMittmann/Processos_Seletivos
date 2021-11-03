<?php session_start();
 include_once './includes/header.inc.php';
 include_once './includes/menu.inc.php';
?>

    <div class="row container">
        <p>&nbsp;</p>
        <form action="Banco_de_dados/create.php" method="post" class="col s12">
            <fieldset class="formulario">
                <legend>Cadastro de Automoveis</legend>
                <h5 class="light center width 10px"></h5>

                <div class="input-field col s12"> 
                    <input type="text" name="nrochassi" id="nrochassi" maxlength="17" required autofocus>
                    <label for="nrochassi">Numero de Chassi</label>
                </div>
                <div class="input-field col s12"> 
                    <input type="text" name="marca" id="marca" maxlength="15" required autofocus>
                    <label for="marca">Marca do Veiculo</label>
                </div>
                <div class="input-field col s12"> 
                    <input type="text" name="modelo" id="modelo" maxlength="15" required autofocus>
                    <label for="modelo">Modelo de Veiculo</label>
                </div>
                <div class="input-field col s12"> 
                    <input type="text" name="ano" id="ano" maxlength="4" required autofocus>
                    <label for="ano">Ano</label>
                </div>
                <div class="input-field col s12"> 
                    <input type="text" name="placa" id="placa" maxlength="10" required autofocus>
                    <label for="placa">Placa</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" name="caracteristica" id="caracteristica" maxlength="10" required autofocus>
                    <label for="caracteristica">Caracteristica</label>
                </div>
                <div class="input-field col s12">
                    <input type="submit" value="cadastrar" class="btn blue">
                    <input type="reset" value="limpar" class="btn black">
                </div>
            </fieldset>
           
        </form>
    </div>
    
    
<?php include_once 'includes/footer.inc.php'?>
                
