<?php include_once 'includes/header.inc.php'?>
<?php include_once 'includes/menu.inc.php'?>

<div class="row container">
    <div class="col s12">
        <h5 class="light">Consultas</h5>

        <table class="stripped">
            <thead>
                <tr>
                    <th>Numero de Chassi</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Ano</th>
                    <th>Placa</th>
                    <th>caracteristicas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once 'banco_de_dados/read.php';
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php include_once 'includes/footer.inc.php'?>