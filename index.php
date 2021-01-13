<?php
use lastguest\Murmur;
include "vendor/autoload.php";
 
?>
<html>
<body>

	<?php
	 if($_POST)
	 {
	 	var_dump($_POST["icourl"]);
	 	$cc=file_get_contents($_POST["icourl"]);
	 	 
	 	$cc=base64_encode($cc);
		 
 		$cc=join('\n',str_split($cc,76));
  
		echo $cc;
		echo "<br/>";
		echo "mmh3 is ".   Murmur::hash3($cc);
 
		echo "<br/>";
		$s='AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAQAQAAAAAAAAAAAAAAAAA\nAAAAAAAAAAAAkJCSYJCQksmQkJL/kJCS/5CQkv+QkJL/kJCS/5CQkv+QkJL/kJCS/5CQkv+QkJL/\nkJCS25CQknIAAAAAkpKUb6Cgov/ExMr/0tLY/9LS2P/S0tj/0tLY/9LS2P/S0tj/0tLY/9LS2P/S\n0tj/0tLY/8nJzv+np6r/kpKUkJWVlti/v8D/xsbI/8bGyP/CwsT/jo6Q/11dXv8vLy//KCgp/1FR\nUv+OjpD/wMDC/8bGyP/Gxsj/xcXH/5iYmf+YmJn/x8fI/8fHyP/Dw8T/aGhp/xISEv8HBwf/FxcV\n/x4eHP8JCQn/CAgI/z09Pf/CwsL/x8fI/8fHyP+goKH/m5ud/8jIyf/IyMn/kJCQ/xEREf8YGBf/\nR0dG/2BgZf9/fYT/pqaj/1paVf8CAgL/X19g/8jIyf/IyMn/o6Ol/5+fof/Kysv/w8PD/yEgIf8X\nFxf/NDQ0/ygpLP8SECj/Cwk5/0VEdP+rqLT/b3Fs/wAAAP+jo6T/ysrL/6enqP+ioqT/zMzN/4OD\nhP8TExP/IiIi/wwNDf8AAAD/AAAm/ywpcP8rKW//JiNp/5eWnP8sLCn/OTk6/8zMzf+pqav/pqao\n/8/Pz/9ZWVn/Ghoa/xUUE/8mIA7/FxQQ/wAAMP9xbb3/jYnQ/wsLTP9CQWP/UFBK/wUFBf/Pz8//\nra2v/6urrf/T09T/XV1d/xsbHv8iHxL/s5tV/0E4H/9wY0L/LSg1/wICPv8AADD/Hx5C/0pKRv8H\nBwb/09PU/7KytP+vr7H/3t7f/4iIif8nJyv/FhQL/8etXf+mkU7/V04y/y0pF/8AAAD/AAAM/ycm\nNP80NDP/Kysr/97e3/+3t7n/srK0/+Pj5P/Fxcb/SkpL/wMFBf+WgkT/07Vj/6+WUv9HPSH/BQQA\n/wUFBf82Njb/FRUU/4qKi//j4+T/u7u8/7a2uP/o6Or/6Ojq/4+Pj/84ODv/AAAA/415Qf+xmFT/\nSD4i/wYFBf8dHR3/JiYm/ysrK//l5ef/6Ojq/7+/wf+5ubz/7u7w/+7u8P/p6ev/l5eY/z9AQf8J\nCw7/AAAC/wcHCP8XFxf/Hx8f/0tLTP/f3+D/7u7w/+7u8P/CwsX/vLy/2+vr7f/z8/X/8/P1//Pz\n9f/ExMb/hYWG/0xMTv8/QUH/aGho/6Ojpf/z8/X/8/P1//Pz9f/y8vT/wMDD/7+/wXLNzc//7u7x\n//b2+f/29vn/9vb5//b2+f/29vn/9vb5//b2+f/29vn/9vb5//b2+f/x8fT/1NTX/7+/wZAAAAAA\nwcHDcsHBw9vBwcP/wcHD/8HBw//BwcP/wcHD/8HBw//BwcP/wcHD/8HBw//BwcP/wcHD6sHBw4EA\nAAAAgAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA\nAAAAAAAAgAEAAA==\n';
		echo $s;
		echo "<br>";
		echo "mmh3 is ".  Murmur::hash3($s);
 
//  mmh3.hash('foo');
//-156908512
 

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