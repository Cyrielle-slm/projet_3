<?php foreach ($billets as $b):?>

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <div class="panel panel-info">

    <div class="panel-heading">
        <a href="<?= "index.php?action=billet&id=" . $b['id'] ?>">
          <h1 class="titreBillet"><?= $b['titre'] ?></h1>
        </a>
    </div>
    <div class="panel-body">
       <p> <? if (strlen($b['contenu'])>500){
        $b['contenu']=substr($b['contenu'], 0, 500); 
        echo $b['contenu']?>...<?;
        } ?></p>
        </br><a href="<?="index.php?action=billet&id=". $b['id'] ?>">Lire la suite</a>
    </div>
    <div class="panel-footer">
        <time class="small"><?= $b['date_creation_fr'] ?></time></div>
    </div>

</div>
    <?php endforeach; ?>