<?php
print "digite quantos km foram percorridos:";
$km=(float)fgets(STDIN);
print "digite quantos dias o carro foi alugado:";
$alugueldocarro=(int) fgets(STDIN);
$preco=(60*$alugueldocarro)+(0.15*$km);
print "você tem que pagar $preco Reais \n";