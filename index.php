<?php

function printspace ($space ,$forfloors, $nbrstar)
    {
        $maxspace = $forfloors/2 ;
        $nbrspace = $maxspace - $nbrstar;
        return (str_repeat($space, $nbrspace));
    }

function printstar1 ($star, $nbrstar1)
    {
        str_repeat ($star, $nbrstar1);
        return (str_repeat($star, $nbrstar1));
    }

function printstar2 ($star, $nbrstar2)
    {
        str_repeat ($star, $nbrstar2);
        return (str_repeat($star, $nbrstar2));
    }

function printstar3 ($star, $nbrstar3)
    {
        str_repeat ($star, $nbrstar3);
        return (str_repeat($star, $nbrstar3));
    }

$nbrstar1 = 1;
$nbrstar2 = 3;
$nbrstar3 = 7;

$space = " ";
$star = "*";
$floors = 4 ;
$forfloors = 7 + 4 * $floors;
$printspace1 = printspace($space, $forfloors, $nbrstar1);
$printspace2 = printspace($space, $forfloors, $nbrstar2);
$printspace3 = printspace($space, $forfloors, $nbrstar3);
$printstar1 = printstar1($star, $nbrstar1);
$printstar2 = printstar1($star, $nbrstar2);
$printstar3 = printstar1($star, $nbrstar3);

/*echo("<pre style = 'margin: 0;'>" . $printspace . $printstar . "</pre>");*/


for ($i=0 ; $i < $floors ; $i++) {
    echo("<pre style = 'margin: 0;'>" . $printspace1 . $printstar1 . "</pre>");
    echo("<pre style = 'margin: 0;'>" . $printspace2 . $printstar2 . "</pre>");
    echo("<pre style = 'margin: 0;'>" . $printspace3 . $printstar3 . "</pre>");
}

