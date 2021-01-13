<?php
error_reporting(E_ALL);
use lastguest\Murmur;
include "vendor/autoload.php";
include "MurmurHashUtils.php";
 
	 if($_POST)
	 {
	 	//var_dump($_POST["icourl"]);
	 	$cc=file_get_contents($_POST["icourl"]);
	 	 
	 	$cc=base64_encode($cc);
		 
 		$cc=join('\n',str_split($cc,76));
  		$cc=$cc.'\n';
		echo $cc;
		echo "<br/>";
		echo "mmh3 is ".   murmurhash1($cc); 
		echo "<br/>";
		echo "mmh3 is ".   murmurhash1_aligned($cc); 
		echo "<br/>";
		echo "mmh3 is ".   murmurhash2($cc); 
		echo "<br/>";
		echo "mmh3 is ".   murmurhash64a($cc); 
		echo "<br/>";
		echo "mmh3 is ".   murmurhash64b($cc); 
		echo "<br/>";
		echo "mmh3 is ".   murmurhash2a($cc); 
		echo "<br/>";

		echo "mmh3 is ".   murmurhash_neutral2($cc); 
		echo "<br/>";

		echo "mmh3 is ".   murmurhash_aligned2($cc); 
		echo "<br/>";

		
		echo "mmh3 is ".   murmurhash3_x86_32($cc); 
		echo "<br/>";
 
 

	 	 //999357577
	 	 //999357577

	 }
?>
 
<html>
<body>

	
 

	<form action="index.php" method="post">
		icourl: <input type="text" name="icourl" value="http://115.152.145.213:81/favicon.ico"><br>
		 
		<input type="submit">
	</form>
</body>
</html>