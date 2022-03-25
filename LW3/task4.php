<?php

function getGetParameter($name): ?string
{
    return isset($_GET[$name]) ? $_GET[$name] : null;
}

$email = getGetParameter('email');
$firstName =  getGetParameter('first_name');
$name = getGetParameter('name');
$age = getGetParameter('age');
if (empty($email))
{
    echo 'email can not be empty';
}
$file = "data/" . $email . 'txt';
if (strlen($email) > 0)
{
	if (file_exists($file))
	{
		$tempArray = file($file);
		if (!(empty($firstName)))
		{
			$tempArray[1] = "First name: $firstName\n";
		}

		if (!(empty($name)))
		{
			$tempArray[2] = "Name: $name\n";
		}

		if (!(empty($age)))
		{
			$tempArray[3] = "Age: $age";
		}

		file_put_contents($file, $tempArray);
	} 
    else
	{
		$userTxt = fopen($file, "w");
        fwrite($userTxt, "Email: $email\n");
		fwrite($userTxt, "First name: $firstName\n");
		fwrite($userTxt, "Name:  $name\n");
		fwrite($userTxt, "Age: $age");
		fclose($userTxt);
	}
}