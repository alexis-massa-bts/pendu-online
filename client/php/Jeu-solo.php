<?php
session_start();
if (!isset($_SESSION['UserName'])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

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
    <script src="../js/timer.js"></script>
    <link rel="stylesheet" href="../css/timer.css">
    <link rel="stylesheet" href="../css/jeu-solo.css">
    <title>Pendu - Solo</title>
</head>

<body>
    <header>
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
    </header>

    <main>
        <div class="timer countdown-bar" id="countdownB"">
            <div></div>
            <div></div>
        </div>

        <div class="sidebar center-align">

            <div class="row bonus bonus1">
                <div class="col s8 offset-s2">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Temps</span>
                            <p>Ajoute +10s au timer</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Activer</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row bonus bonus2">
                <div class="col s8 offset-s2">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Révèle</span>
                            <p>Révèle 1 lettre pour le mot</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Activer</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row bonus bonus3">
                <div class="col s8 offset-s2">
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Vie</span>
                            <p>Ajoute </p>
                        </div>
                        <div class="card-action">
                            <a href="#">Activer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>                    
        <div class="hangman-display">

        </div>

        <div class="alphabet-mainContainer">
            <div class="alphabet-container row">
                <button class="btn col s1">A</button>
                <button class="btn col s1">B</button>
                <button class="btn col s1">C</button>
                <button class="btn col s1">D</button>
                <button class="btn col s1">E</button>
                <button class="btn col s1">F</button>
                <button class="btn col s1">G</button>
                <button class="btn col s1">H</button>
                <button class="btn col s1">I</button>
                <button class="btn col s1">J</button>
                <button class="btn col s1">K</button>
            </div>
            <div class="alphabet-container row">
                <button class="btn col s1">L</button>
                <button class="btn col s1">M</button>
                <button class="btn col s1">N</button>
                <button class="btn col s1">O</button>
                <button class="btn col s1">P</button>
                <button class="btn col s1">Q</button>
                <button class="btn col s1">R</button>
                <button class="btn col s1">S</button>
                <button class="btn col s1">T</button>
                <button class="btn col s1">U</button>
                <button class="btn col s1">V</button>

            </div>
            <div class="alphabet-container row">
                <button class="btn col s1">W</button>
                <button class="btn col s1">X</button>
                <button class="btn col s1">Y</button>
                <button class="btn col s1">Z</button>
            </div>
        </div>
    </main>

    <script type="text/javascript">
            $(document).ready(function () {
                countdown('countdownB', 0, 0, 0, 10);
            });
    </script>
</body>

</html>