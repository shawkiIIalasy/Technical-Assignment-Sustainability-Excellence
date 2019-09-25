<?php 
function isPrime($number){ 
    if ($number == 1) 
    return 0; 
      
    for ($i = 2; $i <= sqrt($number); $i++){ 
        if ($number % $i == 0) 
            return 0; 
    } 
    return 1; 
} 
  
$number = isset($_POST["number"])? (int)$_POST["number"]:0; 
$flag = isPrime($number); 
?>
<html>
<head>
	<title>Prime number challenge</title>
</head>
<body>

	<form method="post" action="" >
		<input type="number" name="number">
		<span><?=$flag?"Prime":"notPrime"?></span>
		<hr>
		<button>Submit</button>
	</form>
</body>
</html>