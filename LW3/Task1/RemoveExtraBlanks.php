<?php

function getGetParameter($name): string
{
    return isset($_GET[$name]) ? $_GET["$name"] : null;
}


$Str = getGetParameter('text');
$Str = str_replace('  ', ' ', $Str);
$Str = trim($Str);
echo $Str;