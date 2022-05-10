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

$filePath = "../data/" . strtolower($email) . ".txt";
if (file_exists($filePath))
{
    $dataArray = file($filePath);
    for ($i = 0; $i < count($dataArray); $i++)
    {
        echo "<div> $dataArray[$i] </div>";
    }
}
else
{
    echo 'Данного файла не существует';
}
