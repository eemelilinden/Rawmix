<?php

require_once('template.php');
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';

switch ($page) {

	
	case '404':
		$content = '404.php';
		break;
	
	case '500':
		$content = '500.php';
		break;
	
	default:
		$content = 'src/main.php';
		break;

}
?>