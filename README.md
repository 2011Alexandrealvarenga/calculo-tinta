https://gitlab.com/digitalrepublic/code-challenge

Regras de neg�cio

1 - Nenhuma parede pode ter menos de 1 metro quadrado nem mais de 15 metros quadrados, 
mas podem possuir alturas e larguras diferentes
2 - O total de �rea das portas e janelas deve ser no m�ximo 50% da �rea de parede
3 - A altura de paredes com porta deve ser, no m�nimo, 30 cent�metros maior que a altura da porta
4 - Cada janela possui as medidas: 2,00 x 1,20 mtos
5 - Cada porta possui as medidas: 0,80 x 1,90
6 - Cada litro de tinta � capaz de pintar 5 metros quadrados
7 - N�o considerar teto nem piso.
8 - As varia��es de tamanho das latas de tinta s�o:

0,5 L
2,5 L
3,6 L
18 L


/*
1 litro = 5 metros

$metro_litro = 0.2;
$metro_litro_tinta =  $t_resultado (10) * $metro_litro;

10 metros / 200 ml = 2 litros
se preciso 10 metros entao 10 * 2 ml = 2 litros

ok 0,5 L = 2,5metros 
ok 2,5 L = 12,5 metros 
ok 3,6 L = 18 metros 
ok 4,1 l = 20 metros (1 lata 3,6 litros + 1 lata 0,5 litro)
6,1 l = 30 metros (1 lata 2,5 litros + 1 lata 3,6 litros)

18 L  = 90(metros)
*/

            // if()
            // quantidade de latas

            // $qtd_lata = $t_resultado / $lata;
            // echo $qtd_lata;