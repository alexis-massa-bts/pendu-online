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
    <link rel="stylesheet" href="../css/menu.css">
    <title>Pendu - Menu Principal</title>
</head>

<body>
    <header>
        <div class="profil-picture">
            <a href="#">
                <div class="profil-container">
                    <img src="../img/account_circle-white-18dp.svg" alt="profil Picture">
                </div>
            </a>
        </div>
        <div class="title">
            <h1 class="center-align">Pendu</h1>
            <h2 class="center-align">Menu Principal</h2>
        </div>
        <div class="friends-panel right">
            <div class="friends-container">
                <i class="material-icons friends-panel-icon" style="color:white;">person</i>
                <span>amis</span>
            </div>
        </div>
        <div class="friends-panel-view">
            <div class="row center-align">
                <form class="col s12 center-align">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">person_search</i>
                        <input id="icon_prefix" placeholder="chercher un amis" type="text" class="validate">
                    </div>
                </form>
            </div>
            <hr>
            <div class="friends-display">
                <div class="chip">
                    <img src="../img/account_circle-black-18dp.svg" alt="Contact Person">
                    <span>Name</span>
                    <i class="material-icons">mail</i>
                </div>
            </div>
        </div>
    </header>

    <div class="buttons center-align">
        <a href="#" class="waves-effect waves-light btn-large"><i class="material-icons left">person</i>Solo</a><br>
        <a href="#" class="waves-effect waves-light btn-large"><i class="material-icons left">people</i>Multijoueurs</a><br>
        <a href="#" class="waves-effect waves-light btn-large"><i class="material-icons left">tune</i>Options</a>
    </div>

    <script>
    $('.friends-panel').click(function() {
        if ($('.friends-panel-view').is(":visible")) {
            $('.friends-panel-icon').css('color', 'white');
            $('.friends-panel-view').slideUp(300);
        }else{
            $('.friends-panel-icon').css('color', '#2BBBAD');
            $('.friends-panel-view').slideDown(300);
        }
        

    });
    </script>
</body>

</html>