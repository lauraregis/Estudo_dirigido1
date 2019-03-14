<?php

print "digite o salário atual: ";
$Salarioatual = fgets(STDIN);
print "digite a porcentagem do aumento: ";
$Porcentagemdeaumento = fgets(STDIN);

    $Aumentodosalario = $Salario*($Porcentagem_de_aumento/100);
    $Salarionovo = $Salario+$Aumentodosalario;

print "Valor adicionado ao salário: $Aumentodosalario \n";
print "Salário novo: $Salarionovo";