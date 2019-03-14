<?php 
print "digite o nº de dias" ;
$dias = (INT) fgets(STDIN); 
print "Digite o número de horas:";
$horas = (int) fgets(STDIN);
print "Digite o número de minutos:";
$minutos = (int) fgets(STDIN);
print "Digite o número de segundos:";
$segundos = (int) fgets(STDIN);



$segundosdias = $dias*86400;
$segundoshoras = $horas*3600;
$segundosmin = $minutos*60;

$nsei = $segundosdias+$segundoshoras+$segundosmin+$segundos;

print "o total de segundos utilizados é $nsei \n";
