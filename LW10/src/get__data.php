<?php

function getPostParameter($name): ?string
{
    return isset($_POST[$name]) ? $_POST[$name] : null;
}

$email = getPostParameter('email');

if (empty($email))
{
    echo 'Введите email';
	die();
}

// $folder = '../data';
// if (file_exists($folder))
// {
//     $file = "../data/" . $email . ".txt";
// }
// else
// {
//     $result = mkdir($folder); 
//     $file = "../data/" . $email . ".txt";
// }

$file = "../data/" . $email . ".txt";
if (file_exists($file))
{
    $tempArray = file($file);
    for ($i = 0; $i < count($tempArray); $i++)
    {
        echo "<div> $tempArray[$i] </div>";
    }
    // $params;
}
else
{
    echo 'Данного файла не существует';
}
