<?php 

/* 
Site: E-Corp
Autor: Bruno Santos
Data: 22 de maio, 2020
*/

/* Define a página atual pela URL */
$pagina = 'home';

if(isset($_GET['i'])){
	$pagina = addslashes($_GET['i']);
}

/* Carrega o header.php */
include 'app/views/header.php';

/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
	case 'home':
		include 'app/views/home.php';
		break;

	case 'servicos':
		include 'app/views/servicos.php';
		break;

	case 'juntese':
		include 'app/views/juntese.php';
		break;

	default:
		include 'app/views/home.php';
		break;
}

/* Carrega o footer.php */
include 'app/views/footer.php';