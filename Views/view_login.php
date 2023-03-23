<?php 

session_start();
var_dump($login);
$_SESSION['nom'] = $login->Nom;
$_SESSION['prenom'] = $login->Prenom;
$_SESSION['ident'] = $login->Identifiant;
$_SESSION['pass'] = $login->Mdp;
$_SESSION['role'] = $login->role;

if ($_SESSION ["role"] === 1){
    header('Location: admin/');
}
else {
        header('Location: user/');
}
