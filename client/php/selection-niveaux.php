<?php
require_once('bd_connect.php');
session_start();
if (!isset($_SESSION['UserName'])) {
    header("location:index.php");
}else{
    $query="select solo_level from users where name_users='".$_SESSION['UserName']."' ";
    $result=mysqli_query($conn,$query);
    if (mysqli_fetch_assoc($result)) {
        $user_level = mysqli_fetch_array($result);
    }else{
        header("location:menu.php?error_levels-loading=les niveaux n'ont pas peux être chargés");
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/selection_niveaux.css">
    <title>Pendu - Connexion</title>
</head>

<body>
    <main>
        <div class="profil-picture">
            <a href="#">
                <div class="profil-container">
                    <img src="../img/account_circle-white-18dp.svg" alt="profil Picture">
                    <span class="username-session">
                        <?php 
                            if (isset($_SESSION['UserName'])) {
                                echo $_SESSION['UserName'];
                                echo ' <a class="logout-btn waves-effect waves-light btn" href="logout.php?logout">logout</a> ';
                            }else{

                            }
                        ?>
                    </span>
                </div>
            </a>
        </div>
        <h1>Selection de niveaux></h1>
        <div class="arrow-back">
            <a href="menu.php"><img src="../img/arrow_back-white-18dp.svg" alt="arrow back"></a><br>
            <span>Retour</span>
        </div>

        <div class="levels">
            <div class="level level1"><span class="center-align">Level 1</span></div>

            <div class="level level2 locked">
                <span class="center-align">Level 2</span>
                <i class="material-icons lock">lock</i>
            </div>

            <div class="level level3 locked">
                <span class="center-align">Level 3-1</span>
                <i class="material-icons lock">lock</i>
            </div>

            <div class="level level4 locked">
                <span class="center-align">Level 4-1</span>
                <i class="material-icons lock">lock</i>
            </div>

            <div class="level level3 locked">
                <span class="center-align">Level 3-2</span>
                <i class="material-icons lock">lock</i>
            </div>

            <div class="level level4 locked">
                <span class="center-align">Level 4-2</span>
                <i class="material-icons lock">lock</i>
            </div>

            <div class="level level5 locked">
                <span class="center-align">Level 5</span>
                <i class="material-icons lock">lock</i>
            </div>

            <div class="level level6 locked">
                <span class="center-align">Level 6</span>
                <i class="material-icons lock">lock</i>
            </div>

            <div class="level level7 locked">
                <span class="center-align">Level 7</span>
                <i class="material-icons lock">lock</i>
            </div>

            <div class="level level-bonus locked">
                <span class="center-align">Magasin</span>
                <i class="material-icons lock">lock</i>
            </div>

        </div>
    </main>
    <script src="../js/solo-levels.js"></script>
</body>

</html>