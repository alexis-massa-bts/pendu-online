<?php
require_once('bd_connect.php');
session_start();

if (isset($_POST['login'])){

    if (empty($_POST['username']) || empty($_POST['password'])) {
        
        header("location:connexion.php?empty=veuillez entrer les identifiants de connexions");
    }else{
        $query="select * from users where name_users='".$_POST['username']."' and pass_users='".$_POST['password']."' ";
        $result=mysqli_query($conn,$query);

        if (mysqli_fetch_assoc($result)) {
            $_SESSION['UserName'] = $_POST['username'];
            header("location:menu.php");
        }else{
            header("location:connexion.php?invalide=les idendifiants ne sont pas corrects");
        }
    }
}else{
    echo 'un probléme est survenu, vérifier la connexion avec la base de donnée';
}

?>