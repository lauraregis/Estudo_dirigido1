<?php
print "digite quantos graus celsius você quer converter em graus farenheit:";
$grauscelsius=(float)fgets(STDIN);
$grausfarenheit=((9*$grauscelsius)/5)+32;
print " $grausfarenheit graus farenheit";