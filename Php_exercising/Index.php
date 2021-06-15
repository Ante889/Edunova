<?php

$i=1; $j=0;

$i = $j++; // i=0 j=1 Dobro

$i = $j++ - --$i;// i=2 j=2

$j = ++$i - --$j;// i=3 j=2

echo $j + ++$i; //=2 + 4 = 6 