<?php 
    $connection = mysql_connect("localhost","root","");

     if( ! $connection ) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("Utenti", $connection );
    

    $nome = $_REQUEST['nome'];
	$cognome = $_REQUEST['cognome'];
    $email = $_REQUEST['email'];
	$richiesta = $_REQUEST['testo'];

    $query = 'INSERT INTO Anagrafe ( Nome, Cognome, Email, Richiesta ) VALUES ( "'. mysql_real_escape_string($nome) .'" , "'. mysql_real_escape_string($cognome) .'" , "'. mysql_real_escape_string($email) .'", "'. mysql_real_escape_string($richiesta) .'" ) ';
    mysql_query($query) or die ("happened: ". mysql_error() );

mysql_close($connection);

?>