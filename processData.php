<?php

    $nome = $_REQUEST['nome'];
    $cognome = $_REQUEST['cognome'];
    $email = $_REQUEST['email'];
    $richiesta = $_REQUEST['testo'];

    $connection = mysql_connect("localhost","root","");

    if( ! $connection ) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("Utenti", $connection );

    $query = 'INSERT INTO Anagrafe ( Nome, Cognome, Email, Richiesta ) VALUES ( "'.
             mysql_real_escape_string($nome) . '" , "' .
             mysql_real_escape_string($cognome) .'" , "' .
             mysql_real_escape_string($email) . '", "'.
             mysql_real_escape_string($richiesta) .'" ) ';

    mysql_query($query) or die ("happened: ". mysql_error() );
    mysql_close($connection);

	$template = './template.txt';
	$pattern = array();
	$pattern[0] = '/{nomeUtente}/';
	$pattern[1] = '/{cognomeUtente}/';
    $pattern[2] = '/{messaggio}/';

	$replacement = array();
	$replacement[0] = $nome;
	$replacement[1] = $cognome;
    $replacement[2] = $richiesta;

	$file = file_get_contents( $template );
	$file = preg_replace( $pattern, $replacement, $file );
	
	$subject = 'Avvenuta ricezione dati';
	$headers = 'From: silvia.scalisi@gmail.com' . "\n" .
    		   'Reply-To: silvia.scalisi@gmail.com' . "\n" .
    		   'X-Mailer: PHP/' . phpversion();

	mail( $email, $subject, $file, $headers, $email );

    header( 'Location: ./' ) ;
?>
