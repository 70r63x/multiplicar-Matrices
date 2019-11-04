<!DOCTYPE html>
<!-- 
@autor: Jorge Arturo Herrera
@GitHub: 70r63x
-->
<html>
<head>
	<title>Multiplicacion de Matrices</title>
	<?php include("proceso.php") ?>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		.matriz{
			width: 10%;
		}
		.mMatriz{
			font-size: 18px;
			border-radius: 6px;
			text-align: center;
		}
		.mMatriz td{
			padding: 10px;
		}
		.operadores{
			font-size: 25px;
		}
		.copy{
			font-size: 15px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h1>Multiplicacion de Matrices AxB</h1>
			</div>
		</div>
		<div class="row my-4 justify-content-center">
			<div class="col-6 text-center">
				<p>Ingresar el tamaño de la matriz A y B</p>
				<form action="index.php" method="post">
					<div class="row">
						<div class="col-12 my-2">
							<label>A</label>(
							<input type="number" name="a1" required class="matriz">x
							<input type="number" name="a2" required class="matriz">)
						</div>
						<div class="col-12 my-2">
							<label>B</label>(
							<input type="number" name="b1" required class="matriz">x
							<input type="number" name="b2" required class="matriz">)
						</div>
						<div class="col-12">
							<button class="btn btn-primary" type="submit" name="crear" id="crear">Crear matrices</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-8 text-center">
				<hr>
				<p><?php echo $errorMensaje; ?></p>
			</div>
		</div>
		<?php
		if ($show){
		?>
			<form action="index.php" method="post">
				<div class="row">
					<input type="hidden" name="ma1" readonly value="<?php echo $a1 ?>">
					<input type="hidden" name="ma2" readonly value="<?php echo $a2 ?>">
					<input type="hidden" name="mb1" readonly value="<?php echo $b1 ?>">
					<input type="hidden" name="mb2" readonly value="<?php echo $b2 ?>">
					<div class="col-6 text-center">
						<p>Matriz A <?php echo $a1 ?>x<?php echo $a2 ?></p>
						<?php
							for ($i=0; $i < $a1; $i++) { 
								for ($j=0; $j < $a2; $j++) { 
						?>
						<input type="number" name="a<?php echo $i.$j ?>" class="matriz" required><?php if ($j == $a2-1) { ?> <br> <?php } ?>
						<?php
								}
							}
						?>
						<p>Por favor ingresar los valores de la matriz</p>
					</div>
					<div class="col-6 text-center">
						<p>Matriz B <?php echo $b1 ?>x<?php echo $b2 ?></p>
						<?php
							for ($m=0; $m < $b1; $m++) { 
								for ($n=0; $n < $b2; $n++) { 
						?>
						<input type="number" name="b<?php echo $m.$n ?>" class="matriz" required><?php if ($n == $b2-1) { ?> <br> <?php } ?>
						<?php
								}
							}
						?>
						<p>Por favor ingresar los valores de la matriz</p>
					</div>
					<div class="col-12 text-center">
						<button class="btn btn-primary" type="submit" name="multiplicar" id="multiplicar">Multiplicar matrices</button>
					</div>
				</div>
			</form>
		<?php
		}
		?>
		<?php
		if ($showResult){
		?>
		<div class="row justify-content-center">
			<div class="col-2  mr-0 my-auto text-center">
				<table border="1" class="mMatriz m-auto">
					<?php echo $mA ?>
				</table>
			</div>
			<div class="col-1 my-auto text-center">
				<p class="operadores">X</p>
			</div>
			<div class="col-2  ml-0 my-auto text-center">
				<table border="1" class="mMatriz m-auto">
					<?php echo $mB ?>
				</table>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-1 text-center">
				<p class="operadores">=</p>
			</div>
		</div>
		<div class="row justify-content-center mb-5">
			<div class="col-2 m-auto text-center">
				<table border="1" class="mMatriz m-auto">
					<?php echo $mR ?>
				</table>
			</div>
		</div>
		<?php
		}
		?>
	</div>
	<?php include("footer.php") ?>
</body>
</html>