<form name="calc" method="post" enctype="multipart/form-data" 
action="<?php $_SERVER['PHP_SELF'] ?>">
    <label for="Peso"> Peso
    <input type="text" id="Peso" name="peso" required="">
    </label>
    <!-- <label for="Altura"> Altura
    <input type="text" id="Altura" name="altura" required=""> -->
    </label>
    <input type="submit" class="button-green" value="CALCULAR">
</form>

<div id="resultado">
    <?php
    if (isset ($_POST)) {
        $peso = isset($_POST['peso']) ? $_POST['peso'] : false;
        // $altura = isset($_POST['altura']) ? $_POST['altura'] : false;

        if (isset($peso) && $peso > 0 && isset($altura) && $altura > 0) {
            $conta1 = $altura * $altura;
            $conta2 = $peso / $conta1;
            $resultado = number_format($conta2, 2, ".", ",");

            var_dump($altura);
            var_dump($peso);

            if (isset($resultado) && $resultado != '0') {
                ;
                echo '<h1>Seu IMC é:</h1>';
                echo '<h2>' . $resultado . '</h2>';
            }
            if (isset($resultado) && $resultado < 17) {
                echo 'é menor que 17';
            } else {
                echo '<h1>Por favor, utilize apenas numeros!</h1>';
            }
        }
    }
    ?>
</div>