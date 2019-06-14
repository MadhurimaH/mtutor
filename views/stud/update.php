<?php 
	if ($viewmodel['errCode'] != 0) {
		header('HTTP/1.0 400 Bad Request', true, 400);
		echo $viewmodel['error'];
	}
?>