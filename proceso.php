<!-- 
@autor: Jorge Arturo Herrera
@GitHub: 70r63x
-->
<?php
	$show = false;
	$showResult = false;
	$errorMensaje = '';
	$matrizA;
	if (isset($_POST["crear"])) {
		$a1 = $_POST["a1"];
		$a2 = $_POST["a2"];
		$b1 = $_POST["b1"];
		$b2 = $_POST["b2"];

		if ($a2 != $b1) {
			$errorMensaje = 'Esta matriz no se puede multiplicar';
			$showResult = false;
		}else{
			$show = true;
			$showResult = false;
			$errorMensaje = '';
			
		}
	}

	if (isset($_POST["multiplicar"])) {
		$a1 = $_POST["ma1"];
		$a2 = $_POST["ma2"];
		$b1 = $_POST["mb1"];
		$b2 = $_POST["mb2"];
		$mA = '';
		$mB = '';
		$mR = '';
		$showResult = true;

		for ($i=0; $i < $a1; $i++) {
			$mA = $mA."<tr>";
			for ($j=0; $j < $a2; $j++) {
				$matrizA [$i][$j] = $_POST["a".$i.$j];
				$mA = $mA."<td>".$matrizA [$i][$j]."</td>";
			}
			$mA = $mA."</tr>";
		}

		for ($m=0; $m < $b1; $m++) { 
			$mB = $mB."<tr>";
			for ($n=0; $n < $b2; $n++) { 
				$matrizB [$m][$n] = $_POST["b".$m.$n];
				$mB = $mB."<td>".$matrizB [$m][$n]."</td>";
			}
			$mB = $mB."</tr>";
		}
		
		for ($w=0; $w < $a1; $w++) { 
			$mR = $mR."<tr>";
			for ($x=0; $x < $b2; $x++) {
				$suma = 0;
				for ($y=0; $y < $a2; $y++) {
					$suma = $suma+($matrizA[$w][$y]*$matrizB[$y][$x]);
				}
				$matrizResul[$w][$x] = $suma;
				$mR = $mR."<td>".$matrizResul[$w][$x]."</td>";
			}
			$mR = $mR."<tr>";
		}
	}
?>