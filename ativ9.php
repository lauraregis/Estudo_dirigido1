<?php

print "Tamanho da área a ser pintada(m²): ";
$Area = fgets(STDIN);

//18L = 108m²
//3,6L = 21,6m²

//Folga

    $Areacomfolga = $Area+(($Area*10)/100);

//Apenas latas de 18L

    $Quantidade_lata = ceil($Areacomfolga/108);
    $lata = $Quantidade_lata*80;

print "Você precisará de $Quantidade_lata lata(s) de 18L. \n";
print "Comprar as latas custará um total de " .'R$' ."$lata. \n";
print "\n";
print "ou \n";
print "\n";

//Apenas galões de 3,6L

    $Quantgalao = ceil($Areacomfolga/21.6);
    $galao = $Quantgalao*25;

print "Você precisará de $Quantgalao galão de 3,6L. \n";
print "Comprar os galões custará um total de " .'R$' ."$galao. \n";
print "\n";
print "ou \n";
print "\n";

//Latas de 18L e galões de 3,6L misturados

    $Quantidadegalao = $Quantgalao;
    $Quantidadelata = 0;

//1 lata = 5 galões

if ($Quantidadegalao >= 5) {

    $Quantidade_lata2 = ceil($Quantidade_galao2/5);
    $Quantidade_galao2 = ceil($Quantidade_galao2%5);

}

    $Total = ($Quantidadegalao*25)+($Quantidadelata*80);

print "Você precisará de $Quantidadegalao galão(ões) e $Quantidadelata lata(s) de tinta. \n";
print "total " .'R$' ."$Total=";