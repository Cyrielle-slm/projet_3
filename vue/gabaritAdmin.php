
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
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
        <link href="contenu/style.css" rel="stylesheet">
        <title>Blog roman Billet simple pour l'Alaska Admin </title>
    </head>

    <body>
<div class="container-fluid globalGabarit">
    <div class="hautPage">
      <nav class="navbar navbar-default navbarGabarit">
            <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand lead" href="index.php">Billet simple pour l'Alaska</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="<?= "index.php?action=ListeBillet"?>" class="small"><span class="glyphicon glyphicon-align-center"></span> Liste billet</a></li>
                    <li><a href="index.php?action=FormAjout" class="small"><span class="glyphicon glyphicon-font"></span>  Ajout de billet</a></li>
                    <li><a href="<?= "index.php?action=ListeComm"?>" class="small"><span class="glyphicon glyphicon-comment"></span>  Commentaires</a></li>
        
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php?action=deconnexion" class="small"><span class="glyphicon glyphicon-user"></span>  Déconnexion</a></li>
                </ul>
            </div>
            </div>
        </nav>  
    
    <div class="page-header headAdmin"> 
       <h2 class="titreblog text-center">
         <a href="<?= "index.php?action=ListeBillet"?>">
            Administration
         </a>
        </h2>
   </div> 
   </div>    
    <div class="container">
        <?= $contenu?>   
    </div>

</div>
    
</body>
</html>