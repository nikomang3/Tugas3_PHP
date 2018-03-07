<?php 
	function sukuN($n, $a, $b){
		$Un = $a+($n-1)*$b;
		return $Un;
	}
	function jmlN($n, $a, $b){
		$Sn = $n/2*(2*$a+($n-1)*$b);
		return $Sn;
	}
	echo "Suatu deret aritmetika yaitu 120, 130, 140, 150, 160, .... <br> Hitung berapa suku ke 10 dan jumlah 10 suku pertama!<br>";
	$a=120; $b=10; $n=10;
	echo "<br>Diketahui: "."a = ".$a." b = ".$b." n = ".$n."<br>";
	echo "<br>Ditanya: U10 dan S10<br>";
	echo "<br>Jawab: <br>";

	echo "Un = a + (n-1) * b<br>";
	echo "U".$n." = ".$a." + (".$n." - 1) * ".$b."<br>";
	$hasilUn=sukuN($n, $a, $b);
	echo "U".$n." = ".$hasilUn."<br>";

	echo "<br>";
	echo "Sn  = n/2 * (2 * a + (n - 1)* b)<br>";
	echo "S".$n." = ".$n."/2 * (2*".$a." + (".$n." - 1) * ".$b." )<br>";
	$hasilSn=jmlN($n, $a, $b);
	echo "S".$n." = ".$hasilSn;
 ?>