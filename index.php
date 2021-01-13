<?php
require __DIR__ . '/vendor/autoload.php';
use lastguest\Murmur;
?>
<html>
 



 
<body>

	<?php
	 if($_POST)
	 {



		echo Murmur::hash3("Hello World");
	 	var_dump($_POST);
	 }
?>
 

	<form action="index.php" method="post">
		icourl: <input type="text" name="icourl"><br>
		 
		<input type="submit">
	</form>
</body>
</html>