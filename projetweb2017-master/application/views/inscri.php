<?php
	include './connexion.php';
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$login=$_GET['login'];
$password=$_GET['password'];
$mail=$_GET['mail'];
$avatar=$_GET['avatar'];


$req_pre = mysqli_prepare($link, 'INSERT INTO Membre (Nom, Prenom, Login, MDP, Mail) VALUES (?, ?, ?, ?, ?)');
mysqli_stmt_bind_param($req_pre, "sssss", $nom, $prenom, $login, $password, $mail);

if($avatar==null)
  mysqli_stmt_execute($req_pre);
else{
  $req_pre2 = mysqli_prepare($bdd, 'INSERT INTO Membre VALUES (?, ?, ?, ?, ?, ?)');
mysqli_stmt_bind_param($req_pre, "sssssss", $nom, $prenom, $login, $password, $mail, $avatar);
  mysqli_stmt_execute($req_pre2);
}
header('Location: http://dwarves.iut-fbleau.fr/~bikoyi/sport/projetweb2017-master/');
exit();
?>
