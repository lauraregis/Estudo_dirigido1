<?php

print "Valor da mercadoria: ";
$Valor = fgets(STDIN);
print "Porcentual de desconto: ";
$porcentdesconto = fgets(STDIN);

    $Desconto = $Valor*($porcentdesconto/100);
    $Valorpagar = $Valor-$Desconto;

print "Valor descontado: $Desconto \n";
print "Valor total a pagar: $Valorpagar";