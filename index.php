<?php
require __DIR__ . '/vendor/autoload.php';
use lastguest\Murmur;
?>
<html>
 



 
<body>

	<?php
	 if($_POST)
	 {

	 	$cc=file_get_contenst($_POST["icourl"]);
	 	$cc=base64_encode($cc);
		echo Murmur::hash3($cc);
	 	 
	 }
?>
 

	<form action="index.php" method="post">
		icourl: <input type="text" name="icourl"><br>
		 
		<input type="submit">
	</form>
</body>
</html>