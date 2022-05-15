<?php 
require 'classes/helper.php';
require 'js/reload.js';

;?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de uso de Tinta</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>    
    <div class="container">    
        <div class="title-content">
            <h1 class="title">Cálculo de uso de Tinta por metro quadrado</h1>
            <h2 class="subtitle">Qual a dimensão da àrea que pretende pintar?</h2>
            <h3 class="description">Nos campos abaixo, informe em metros, altura e a largura da àrea onde será pintada</h3>
        </div>
        <div class="inputs">
            <form method="post" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']?>">
                <?php
                    if(isset($_POST)){
                        $altura = isset($_POST['altura']) ? $_POST['altura']:false;
                        $largura = isset($_POST['largura']) ? $_POST['largura']:false;
                        $qt_janela = isset($_POST['janela']) ? $_POST['janela']:false;
                        $qt_porta = isset($_POST['porta']) ? $_POST['porta']:false;

                        $res_alt_largura = alturaLargura($largura, $altura);
                        $menos_porta_janela =  calculoMenosPortaJanela($res_alt_largura, $qt_janela, $qt_porta);
                    }
                ?>
                <div class="content">                   
                    <span>Altura: </span><input type="text" name="altura" value="0" maxlength="4" ><br>                   
                    <span>Largura: </span><input type="text" name="largura" value="0" maxlength="4"><br>   

                    <h4>Esses valores seram retirados do resultado:</h4>
                    <span>Quantidade de janelas(s): </span>
                    <select name="janela">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select><br>
                    <span>Quantidade de porta(s): </span>
                    <select name="porta">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select><br>
                    <input class="btn-send" type="submit">
                </div>
            </form>
        </div>
        <hr>
        <div class="result">
            <h5>Quantidade em metros <?php echo $menos_porta_janela ;?> m² da àrea a ser pintada por demão</h5>
            <h5><?php echo lataQuePreciso($menos_porta_janela); ?></h5><br>
            <!-- <?php echo var_dump($alturaLargura);?> -->
            <!-- echo 'menos porta e janela '. $menos_porta_janela.'<br>';
    
            echo'total de metros sem desconto ' . $res_alt_largura .'<br>';
    
            echo lataQuePreciso($menos_porta_janela); -->
        
        </div> 
    </div>
        
</body>
</html>



