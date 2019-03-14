<?php

print "Digite a distância da viagem(km): ";
$Dist = fgets(STDIN);
print "Digite a velocidade média da viagem(km/h): ";
$Velmedia = fgets(STDIN);

    $Tempoviagem = $Dist/$Velmedia;

print "O tempo de viagem será de: $Tempodeviagem"