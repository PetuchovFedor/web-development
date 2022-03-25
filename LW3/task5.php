<?php

function getGetParameter($name): ?string
{
    return isset($_GET[$name]) ? $_GET[$name] : null;
}

$email = getGetParameter('email');

$file = "data/" . $email . 'txt';
if ((!empty($email)) and (file_exists($file)))
{
    $userTxt = fopen($file, "r");
    $tempArray = file($file);   
    for ($i = 0; $i < count($tempArray); $i++)
    {
        echo "$tempArray[$i]\n";
    }
    fclose($userTxt);
}
else
{
    echo "File not found";
}