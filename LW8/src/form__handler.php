<?php

function getPostParameter($name): ?string
{
    return isset($_POST[$name]) ? $_POST[$name] : null;
}

$email = getPostParameter('email');
$firstName =  getPostParameter('first_name');
$activity = getPostParameter('activity');
$agreement = getPostParameter('agreement');

if (empty($email))
{
    echo 'Почта не указана';
    die();
}

if (empty($agreement))
{
    echo 'Соглашение не получено';
    die();
}
 
$folder = '../data';
if (file_exists($folder))
{
    $filePath = "../data/" . strtolower($email) . ".txt";
}
else
{
    $result = mkdir($folder); 
    $filePath = "../data/" . strtolower($email) . ".txt";
}

if (file_exists($filePath))
{
	$tempArray = file($filePath);
	if (!(empty($firstName)))
	{
		$tempArray[0] = "Имя: $firstName\n";
	}

	if (!(empty($activity)))
	{
		$tempArray[2] = "Деятельность: $activity";
	}

	file_put_contents($filePath, $tempArray);
} 
else
{
	$file = fopen($filePath, "w");
	fwrite($file, "Имя: $firstName\n");
	fwrite($file, "Email: $email\n");
	fwrite($file, "Деятельность: $activity");
	fclose($file);
}
