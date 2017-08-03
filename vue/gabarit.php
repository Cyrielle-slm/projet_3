<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link href="contenu/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="contenu/bootstrap/css/bootstrap.min.css.map" rel="stylesheet">
        <link rel="icon" type="image/png" href="contenu/img/plume.png" />
        <script src="contenu/bootstrap/js/jquery.js"></script>
        <script src="contenu/bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="contenu/style.css" rel="stylesheet">
        <title>Blog roman Billet simple pour l'Alaska</title>
    </head>

<body>
<div class="container-fluid globalGabarit">
    <div class="hautPage">
      <?include('menu.php');?>
        <div class="page-header"> 
            <h2 class="titreblog text-center">
            <a href="index.php">
            Billet simple pour l'Alaska
            </a>
            </h2>
         <div class="presentation">
            <p class="text-center">Bienvenue sur mon blog roman.
                Je m'appel Jean Forteroche je suis écrivain 
                J'ai choisi de pulier mon roman sous forme de billet que je publirais petit a petit sur ce blog; pour que mon roman sois accessible au plus grand nombre.
            </p>
        </div> 
        </div>
    </div> 
       
    <div class="container">
      <?= $contenu?>   
    </div>

    <footer class="container-fluid pdp text-center">
        <h6>Mention légales</h6>
        <p class="small"> Site réalisé dans le cadre d'une formation. Ce site n'est qu'un exercice et sera supprimé.<p>
    </footer>
    
</div>
</body>
</html>