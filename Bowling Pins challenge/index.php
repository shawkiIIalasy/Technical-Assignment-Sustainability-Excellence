<!DOCTYPE html>
<html>
<head>
	<title>Bowling Pins challenge</title>
</head>
<body>
<form method="post" action="">
	<input type="text" name="text">
	<button type="submit">submit</button>
</form>
</body>
</html>
<?php

$arr=isset($_POST['text'])?$_POST['text']:0;
$arr=explode(' ', $arr);

for ($i=1; $i <(int)$arr[0]*2 ; $i+=2) { 

	isWinner((int)$arr[$i],$arr[$i+1]);
}

function isWinner($size,$configuration)
{
	$sum=0;
	$flage=0;
	for($i=0;$i<$size;$i++)
	{
		if($configuration[$i]=='I' and $flage==0)
		{
			$sum++;$flage=1;
		}
		if($configuration[$i]=='X')
		{
			$flage=0;
		}
	}

	if($sum%2==0){echo("LOSE");print("<br>");}
	else {print("WIN");print("<br>");}
}

?>

