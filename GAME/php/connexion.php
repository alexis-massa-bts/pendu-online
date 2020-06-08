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
    <link rel="stylesheet" href="/css/connexion.css">
    <title>Pendu - Connexion</title>
</head>

<body>
    <h1 class="center-align">Pendu</h1>
    <h2 class="center-align">Connexion</h2>

    <main class="center-align">
        <div class="card z-depth-5">
            <form>
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">mail</i>
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <input id="password" type="password" class="validate">
                        <label for="password">Mot de passe</label>
                    </div>
                </div>
                <div class="row">
                    <button class="btn waves-effect waves-light" type="submit" name="action">se connecter
                        <i class="material-icons right">login</i>
                      </button>
                </div>
            </form>
        </div>
    </main>

</body>

</html>