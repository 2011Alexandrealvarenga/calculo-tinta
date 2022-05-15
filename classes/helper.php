<?php 
function alturaLargura($largura, $altura){    
    return $largura * $altura;
}

function calculoMenosPortaJanela($res_alt_largura, $qt_janela, $qt_porta){
    $janela = ($qt_janela != 0) ? (2.40 * $qt_janela) : 0;
    $porta = ($qt_porta != 0) ? (1.52 * $qt_porta) : 0;

    return $res_alt_largura - $porta - $janela;        
}

function permitidoCalcular($res_alt_largura){
    $min = 1.0;
    $max = 15;

    if (($res_alt_largura <= $min) or ($res_alt_largura >= $max)){              
        return 'Informe um valor maior que 1 e menor que 15 m² <br>';              
    }    
}

function lataQuePreciso($menos_porta_janela){
    $ml_metro = 0.2;

    $ml_metro_preciso =  $menos_porta_janela * $ml_metro;
    if($ml_metro_preciso == 0){
        return '';
    }
    elseif(($ml_metro_preciso >= 0.1) and ($ml_metro_preciso <= 0.5)){

        return 'Vou precisar de 1 lata de 0,5 Litro';
    }
    elseif (($ml_metro_preciso >= 0.6) and ($ml_metro_preciso <= 2.5)){
        return 'Vou precisar de 1 lata de 2,5 Litros';
    }
    elseif (($ml_metro_preciso >= 2.6) and ($ml_metro_preciso <= 3.6)){
        return 'Vou precisar de 1 lata de 3,6 Litros';
    }
    elseif (($ml_metro_preciso >= 2.6) and ($ml_metro_preciso <= 3.6)){
        return 'Vou precisar de 1 lata de 3,6 Litros';
    }
    elseif (($ml_metro_preciso >= 3.7) and ($ml_metro_preciso <= 4.1)){
        return 'Insera a metragem entre 1 e 15 metros';
    }


}



