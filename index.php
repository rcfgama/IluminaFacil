<?php

/* Página indez para o programa Ilumina Fácil desenvolvido por Ronaldo Gama - versão: 1.1 */

$pag = 'home';

if (isset($_GET['b'])) {
	$pag = addslashes($_GET['b']);
}

include 'header.php';

switch ($pag) {
	case 'home':
		include 'home.php';
		break;

	case 'sobre':
		include 'sobre.php';
		break;

	case 'processa':
		include 'processa.php';
		break;

	default:
		include 'home.php';
		break;
}

include 'footer.php';