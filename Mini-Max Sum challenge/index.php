<!DOCTYPE html>
<html>
<head>
	<title>Mini-Max Sum</title>
</head>
<body>
<form method="post" action="">
	<input type="number" name="N1[]"><br>
	<input type="number" name="N1[]"><br>
	<input type="number" name="N1[]"><br>
	<input type="number" name="N1[]"><br>
	<input type="number" name="N1[]"><br>
	<button type="submit">submit</button>
</form>
</body>
</html>
<?php

$arr=isset($_POST['N1'])?$_POST['N1']: array();
miniMaxSum($arr);
function miniMaxSum($arr)
{
	sort($arr);

	$min=0;$max=0;
	for($i=0;$i<sizeof($arr)-1;$i++)
	{
		$min+=intval($arr[$i]);
		$max+=intval($arr[$i+1]);
	}
	print($min . "   ".$max."<br>");
}
?>

