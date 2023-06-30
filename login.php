<?php 
	if(isset($_POST['NomeUser']) && isset($_POST['EmailUser'])){
		$name = $_POST['NomeUser'];
        $email = $_POST['EmailUser'];
        
		$resume = '
			#User A:
			Nome do Usuario: '.$name.';
			Email do Usuario: '.$email.'.
		';

		$file = fopen("res.txt", 'a+');
        fwrite($file, $resume);
        fclose($file);
	}
?>