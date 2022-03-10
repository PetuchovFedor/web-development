<?php

function getGetParameter($name): string
{
    return isset($_GET[$name]) ? $_GET["$name"] : null;
}
$Str = getGetParameter('identifiler');
if (empty($Str))
{
    header("Content-Type: text/plain");
    echo  'No identifiler';
}

    if ((!(is_numeric($Str[0]))) or (!(ctype_alpha($Str[0]))))
    {         
        for ($i = 1; $i < strlen($Str); $i++)
        {
            if ((!(is_numeric($Str[$i]))) and (!(ctype_alpha($Str[$i]))))
            {
                echo 'No. The identifier must consist of either letters or numbers';
                return;
            }                         
        }
        echo 'Yes';
    }
    else
    {       
        echo 'No. The identifier must not start with a number';
    }

