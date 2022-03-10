<?php

function getGetParameter($name): string
{
    return isset($_GET[$name]) ? $_GET["$name"] : null;
}


$Password = getGetParameter('password');
$Rel = 0;
$Len =strlen($Password);
$n = 0;
if ($Password !== null)
{
    $Rel = $Rel + 4*$Len;
    for ($i=0; $i <= $Len; $i++)
    {
        if (is_numeric($Password[$i]))
        {
            $n=$n+1;
        }
    }
    $Rel = $Rel + 4*$n;
    $n = 0;
    for ($i=0; $i <= $Len; $i++)
    {
        if (ctype_upper($Password[$i]))
        {
            $n=$n+1;
        }
    }
    $Rel = $Rel + 2*($Len-$n);
    $n = 0;
    for ($i=0; $i <= $Len; $i++)
    {
        if (ctype_lower($Password[$i]))
        {
            $n=$n+1;
        }
    }
    $Rel = $Rel + 2*($Len-$n);
    $n = 0;
    if (ctype_alpha($Password))
    {
        $Rel = $Rel -$Len;
    }
    if (is_numeric($Password))
    {
        $Rel =$Rel - $Len;
    }
    foreach (count_chars($Password) as $i => $val)
    {
        if ($val > 1)
        {
            $Rel = $Rel -$val;
        }
    }
    echo "The reliability of your password $reliability";
    echo $Rel;
}
