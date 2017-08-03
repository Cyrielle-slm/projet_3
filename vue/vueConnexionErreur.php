<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link href="../contenu/style.css" rel="stylesheet">
        <link href="../contenu/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="../contenu/bootstrap/js/jquery.js"></script>
        <script src="../projet_3/contenu/bootstrap/js/bootstrap.min.js"></script>
        <title>Connexion Billet simple pour l'Alaska</title>
    </head>

<body>
<p class="bg-danger text-center">E-mail ou MDP incorrect veuillez reéssayer</p>
   
    <form method="post" action="index.php?action=connexion">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="email" type="text" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="password" type="password" class="form-control" name="passe" placeholder="Password">
        </div>
            <button class="btn btn-primary" type="submit">Connexion</button>
    </form>


    </body>
</html>
