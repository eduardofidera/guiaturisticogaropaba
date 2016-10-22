<?php
	class Db extends PDO {
		function __construct(){
			$user = 'epiz_18868560';
			$pass = '2078450';
			$database = 'epiz_18868560_guiaturisticogrb';
			$dsn = "mysql:host=sql100.epizy.com;dbname=$database";
			//configurar as opcoes
			$options = array(
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			);
			
			try {
				parent::__construct($dsn, $user, $pass, $options);
				
			} catch (PDOException $e){
				echo '<div class="alert alert-danger">';
				echo $e->getMessage();
				echo '</div>';
				
			}
		}
		
	}
?>