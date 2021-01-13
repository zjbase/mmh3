<?php
use lastguest\Murmur;
include "vendor/autoload.php";
 
?>
<html>
<body>

	<?php
	 if($_POST)
	 {
	 	//var_dump($_POST["icourl"]);
	 	$cc=file_get_contents($_POST["icourl"]);
	 	 
	 	$cc=base64_encode($cc);
		 
 		$cc=join('\n',str_split($cc,76));
  		$cc=$cc.'\n';
		echo $cc;
		echo "<br/>";
		echo "mmh3 is ".   Murmur::hash3_int($cc,'base64');

	 	 //999357577
	 	 //999357577

	 }
?>
 

	<form action="index.php" method="post">
		icourl: <input type="text" name="icourl" value="http://115.152.145.213:81/favicon.ico"><br>
		 
		<input type="submit">
	</form>
</body>
</html>