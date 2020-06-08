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
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link rel="stylesheet" href="/css/inscription.css">
    <title>Pendu - Connexion</title>
</head>

<body>
    <h1 class="center-align">Pendu</h1>
    <h2 class="center-align">Inscription</h2>

    <main class="center-align">
        <div class="card z-depth-5">
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">Nom</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Prénom</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="pseudo" type="text" class="validate">
                            <label for="pseudo">Pseudo</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Mot de passe</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="confirm-password" type="password" class="validate">
                            <label for="confirm-password">Confirmer le mot de passe</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="g-recaptcha col s6" data-sitekey="6LcAkP4UAAAAAGYHaYVb183hd7DlViqXN5hUehpb"></div>
                    </div>
                    <div class="row">
                        <button class="btn waves-effect waves-light" type="submit" name="action">s'inscrire
                            <i class="material-icons right">login</i>
                          </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

</body>

</html>