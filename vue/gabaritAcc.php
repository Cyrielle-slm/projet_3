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
    <div class="hautPageAcc">
      <?include('menu.php');?>
    <div class="page-header phacc"> 
    <div class="presentation">
       <h2 class="titreblog text-center">
   
         <a href="index.php">
            Billet simple pour l'Alaska
         </a>
        </h2>
    
            <p class="text-center">Bienvenue sur mon blog roman.
                Je m'appel Jean Forteroche je suis écrivain 
                J'ai choisi de pulier mon roman sous forme de billet que je publirais petit a petit sur ce blog; pour que mon roman sois accessible au plus grand nombre.
            </p>
    </div> 
    </div>
    </div> 
       
    <div class="container containacc">
      <div class="row">
         <?= $contenu?>   
    </div>
    </div>


    <p class="bg-primary text-center"><a href="index.php?action=chapitres" class="bio">Tous les billets depuis le debut ici.</a></p>


    <div class="biographie">
    <h2>Biographie & Remerciments</h2>
    <p>Haec ubi latius fama vulgasset missaeque relationes adsiduae Gallum Caesarem permovissent, 
    quoniam magister equitum longius ea tempestate distinebatur, iussus comes orientis Nebridius 
    contractis undique militaribus copiis ad eximendam periculo civitatem amplam et oportunam studio properabat
    ingenti, quo cognito abscessere latrones nulla re amplius memorabili gesta, dispersique ut solent avia 
    montium petiere celsorum.
    Cyprum itidem insulam procul a continenti discretam et portuosam inter municipia crebra urbes 
    duae faciunt claram Salamis et Paphus, altera Iovis delubris altera Veneris templo insignis. tanta autem 
    tamque multiplici fertilitate abundat rerum omnium eadem Cyprus ut nullius externi indigens adminiculi indigenis viribus a fundamento ipso carinae ad supremos usque carbasos aedificet onerariam navem omnibusque armamentis instructam mari committat.
    Principium autem unde latius se funditabat, emersit ex negotio tali. Chilo ex vicario et coniux eius Maxima 
    nomine, questi apud Olybrium ea tempestate urbi praefectum, vitamque suam venenis petitam adseverantes 
    inpetrarunt ut hi, quos suspectati sunt, ilico rapti conpingerentur in vincula, organarius Sericus et
    Asbolius palaestrita et aruspex Campensis.</p>
        <blockquote class="blockquote-reverse">Jean Forteroche.</blockquote>
    </div>


    <footer class="container-fluid pdp text-center">
        <h6>Mention légales</h6>
        <p class="small"> Site réalisé dans le cadre d'une formation. Ce site n'est qu'un exercice et sera supprimé.<p>
    </footer>

</div>
</body>
</html>