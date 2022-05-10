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
    $file = "../data/" . strtolower($email) . ".txt";
}
else
{
    $result = mkdir($folder); 
    $file = "../data/" . strtolower($email) . ".txt";
}

if (file_exists($file))
{
	$tempArray = file($file);
	if (!(empty($firstName)))
	{
		$tempArray[0] = "Имя: $firstName\n";
	}

	if (!(empty($activity)))
	{
		$tempArray[2] = "Деятельность: $activity";
	}

	file_put_contents($file, $tempArray);
} 
else
{
	$userTxt = fopen($file, "w");
	fwrite($userTxt, "Имя: $firstName\n");
	fwrite($userTxt, "Email: $email\n");
	fwrite($userTxt, "Деятельность: $activity");
	fclose($userTxt);
}
