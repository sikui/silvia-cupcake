<?php
	$to = $_REQUEST['email'];
	$template = './template.txt';
	$pattern = array();
	$pattern[0] = '/{nomeUtente}/';
	$pattern[1] = '/{cognomeUtente}/' ;

	$replacement = array();
	$replacement[0] = $_REQUEST['nome'];
	$replacement[1] = $_REQUEST['cognome'];
	

	$file = file_get_contents( $template );
	
	$file = preg_replace( $pattern, $replacement, $file );
	
	$subject = 'Avvenuta ricezione dati';
	$headers = 'From: silvia.scalisi@gmail.com' . "\r\n" .
    		   'Reply-To: silvia.scalisi@gmail.com' . "\r\n" .
    		   'X-Mailer: PHP/' . phpversion();

	mail ( $to, $subject, $file, $headers );

	
	
?>
