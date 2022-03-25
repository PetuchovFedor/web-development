<?php
header("Content-Type: text/plain");
function getGetParameter(string $name): ?string
{
    return isset($_GET[$name]) ? $_GET[$name] : null;
}

$str = getGetParameter('text');
if (!$str) 
{  
    echo "No text parameter";
}

while (strpos($str, "  ", 1))
{
    $str = str_replace("  ", " ", $str);
}  
$str = trim($str);
echo $str;