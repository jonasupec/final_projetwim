<?php
	include './connexion.php';
$nom=$_GET['nom'];

$password=$_GET['password'];
$sport=$_GET['sports'];
$ville=$_GET['ville'];
$description=$_GET['description'];
if($_GET['mixite']=="oui")
  $mixite=1;
else
  $mixite=0;
$logo=$_GET['logo'];
$photo=$_GET['photo'];
$admin="Floflo";

if($logo==null && $photo==null){
  $req_pre = mysqli_prepare($link, 'INSERT INTO Equipe (Nom, MDP, Sport, Ville, Description, Mixite, Admin) VALUES (?, ?, ?, ?, ?, ?, ?)');
echo "$nom $password $sport $ville $description $mixite $admin";
mysqli_stmt_bind_param($req_pre, "sssssis", $nom, $password, $sport, $ville, $description, $mixite, $admin);
mysqli_stmt_execute($req_pre);
  
  
}
else if($logo==null){
  $req_pre = mysqli_prepare($link, 'INSERT INTO Equipe (Nom, MDP, Sport, Ville, Description, Mixite, Photo, Admin) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
echo "$nom $password $sport $ville $description $mixite $admin";
mysqli_stmt_bind_param($req_pre, "sssssiss", $nom, $password, $sport, $ville, $description, $mixite, $photo, $admin);
mysqli_stmt_execute($req_pre);
  
  
  
}
else if($photo==null){
  $req_pre = mysqli_prepare($link, 'INSERT INTO Equipe (Nom, MDP, Sport, Ville, Description, Mixite, Logo, Admin) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
echo "$nom $password $sport $ville $description $mixite $logo $admin";
mysqli_stmt_bind_param($req_pre, "sssssiss", $nom, $password, $sport, $ville, $description, $mixite, $logo, $admin);
mysqli_stmt_execute($req_pre);
  
  
}
else {
$req_pre = mysqli_prepare($link, 'INSERT INTO Equipe (Nom, MDP, Sport, Ville, Description, Mixite, Logo, Photo, Admin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)');
echo "$nom $password $sport $ville $description $mixite $logo $photo $admin";
mysqli_stmt_bind_param($req_pre, "sssssisss", $nom, $password, $sport, $ville, $description, $mixite, $logo, $photo, $admin);
mysqli_stmt_execute($req_pre);
}

header('Location: http://dwarves.iut-fbleau.fr/~bikoyi/sport/projetweb2017-master/application/views/accueil2.php?login=d&password=d&connexion=Connexion');
exit();
?>
