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
            $permitido = permitidoCalcular($res_alt_largura);
            $var_lataquepreciso = lataQuePreciso($menos_porta_janela);
            
        }
    ?>
    <div class="content">  
        <div class="item-alt-lar">
            <div class="alt-lar">            
                <span>Altura: </span>
            </div>
            <input type="text" name="altura" value="0"  onkeypress="handleNumber(event, ' {-7,3} ')" size=25>                   
        </div>
        <div class="item-alt-lar">
            <div class="alt-lar">            
                <span>Largura: </span>
            </div>
            <input type="text" name="largura" value="0"  onkeypress="handleNumber(event, ' {-7,3} ')" size=25>                  
        </div>        

        <h4>Esses valores seram retirados do resultado:</h4>
        <div class="item-jan-por">
            <div class="jan-porta">
                <span>Quantidade de janelas(s): </span>
            </div>
            <select name="janela">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
        <div class="item-jan-por">
            <div class="jan-porta">
                <span>Quantidade de porta(s): </span>
            </div>            
            <select name="porta">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select><br>
        </div>
        <input class="btn-send" type="submit">
    </div>
    </form>
    </div>
    <hr>
    <div class="result">
        <h5>Quantidade em metros <?php echo $menos_porta_janela ;?> m² da àrea a ser pintada por demão</h5>
        <?php 
        if($permitido){
            echo $permitido;
        }
        elseif($var_lataquepreciso){
            echo $var_lataquepreciso;
        }
        ?>
    
    </div> 
</div>
        
</body>
</html>



