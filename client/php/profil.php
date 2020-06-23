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
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="../css/profil.css">
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
        <a href="#" class="waves-effect waves-light btn-large btn-modify"><i class="material-icons left">person</i>Modifier</a>
    </header>
    <hr>
    <main>
        <div class="row" id="sortable">
            <div class="col s1" style="margin-left:3em;"></div>
            <div class="col s3 stats results">
                <h2 class="ui-widget-header">historiques des resultats</h2>
            </div>
            <div class="col s3 stats games">
                <h2>historiques des parties</h2>
            </div>
            <div class="col s3 stats bonus">
                <h2>Bonus obtenus</h2>
            </div>
            <div class="col s1"></div>
        </div>
    </main>
    <script>
        $( function() {
            $( "#sortable" ).sortable();
            $( "#sortable" ).disableSelection();
        } );
    </script>
</body>

</html>