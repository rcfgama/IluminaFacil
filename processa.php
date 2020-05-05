<div class="home">
<!-- Arquivo processa para o programa Ilumina Fácil, desenvolvido por Ronaldo Gama. Versão 1.1 -->
	<?php

		if (isset($_POST['submit'])) {

			$ambiente = $_POST['ambiente'];
			$comprimento = $_POST['comprimento'];
			$largura = $_POST['largura'];
			$quantidade = $_POST['quantidade'];
			$distancia = $_POST['distancia'];
			$tomadas = $_POST['tomadas'];
			$especiais = $_POST['especiais'];

		}

		if ($ambiente == 1) {
			$lux = 300;
		} else if ($ambiente == 2) {
			$lux = 750;
		} else if ($ambiente == 3) {
			$lux = 200;
		} else if ($ambiente == 4) {
			$lux = 800;
		} else {
			$lux = 500;
		}
		
		$area = $comprimento * $largura;
		$lumens = $area * $lux;
		$lulamp = $lumens / $quantidade;

		if ($lulamp <= 360) {
			$potlamp = 4;
		} else if ($lulamp <= 700) {
			$potlamp = 7;
		} else if ($lulamp <= 1018) {
			$potlamp = 10;
		} else if ($lulamp <= 1507) {
			$potlamp = 15;
		} else if ($lulamp <= 2000) {
			$potlamp = 20;
		} else if ($lulamp <= 3000) {
			$potlamp = 30;
		} else if ($lulamp <= 4120) {
			$potlamp = 40;
		} else if ($lulamp <= 5000) {
			$potlamp = 60;
		} else if ($lulamp <= 7200) {
			$potlamp = 80;
		} else if ($lulamp <= 9500) {
			$potlamp = 100;
		} else {
			$potlamp = 150;
		} 

		$potencia = $quantidade * $potlamp;
		$tug = (($tomadas - $especiais) * 110) * 0.86;
		$tue = ($especiais * 900) * 1;
		$potfinal = $potencia + $tug + $tue;
		$corrente = $potfinal / 127;

		if ($corrente <= 4) {
			$disjuntor = 4;
		} else if ($corrente <= 6) {
			$disjuntor = 6;
		} else if ($corrente <= 10) {
			$disjuntor = 10;
		} else if ($corrente <= 16) {
			$disjuntor = 16;
		} else if ($corrente <= 20) {
			$disjuntor = 20;
		} else if ($corrente <= 25) {
			$disjuntor = 25;
		} else if ($corrente <= 32) {
			$disjuntor = 32;
		} else if ($corrente <= 40) {
			$disjuntor = 40;
		} else if ($corrente <= 50) {
			$disjuntor = 50;
		} else {
			$disjuntor = 63;
		}

		if ((127 - (0.0276 * $distancia)) / (0.01448 * $distancia) > $corrente) {
			$fio = 1.5;
		} else if ((127 - (0.0169 * $distancia)) / (0.00887 * $distancia) > $corrente) {
			$fio = 2.5;
		} else if ((127 - (0.0106 * $distancia)) / (0.00552 * $distancia) > $corrente) {
			$fio = 4;
		} else if ((127 - (0.00707 * $distancia)) / (0.00369 * $distancia) > $corrente) {
			$fio = 6;
		} else {
			$fio = 10;
		}

		echo "Segue abaixo a lista do material para o seu projeto:<br/>";
		echo "<br/>- Lâmpadas de {$potlamp}w.<br/>";
		echo "- Disjuntor de {$disjuntor}A.<br/>";
		echo "- Cabos de {$fio}mm².<br/>";

	?>
		<p></p><br>
		<form action="?b=home" method="post">
			<p><input type="submit" value="VOLTAR" name="submit"></p>
</div>