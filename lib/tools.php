<?php

// fonction pour ramener de la BDD des (string) en tablaeu(array) pour mettre dans une liste(ul, li)
function lineToArray(string $string)
{
    return explode(PHP_EOL, $string);
}

