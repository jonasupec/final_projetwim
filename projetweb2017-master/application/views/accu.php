<?php
	include './connexion.php';
		$real=mysqli_query($link,"SELECT login, MDP FROM Membre;");
			foreach($real as $membre){
			if($_GET['login']==$membre['login'] && $_GET['password']==$membre['MDP']){
        header('Location: http://dwarves.iut-fbleau.fr/~bikoyi/sport/projetweb2017-master/application/views/accueil.php?login=d&password=d&connexion=Connexion');
  exit();
 }
		}
header('Location: http://dwarves.iut-fbleau.fr/~bikoyi/sport/projetweb2017-master/');
  exit();
	?>