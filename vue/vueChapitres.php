<?php foreach ($billetChap as $b):?>

<article class="accueil">
    <header>
        <a href="<?= "index.php?action=billet&id=" . $b['id'] ?>">
            <h1 class="titreBillet"><?= $b['titre'] ?></h1>
        </a>
            <time><?= $b['date_creation_fr'] ?></time>
    </header>
        <p><?= $b['contenu'] ?></p>
</article>
        <a href="<?= "index.php?action=billet&id=" . $b['id'] ?>"> Commentaires <span class="glyphicon glyphicon-comment"></span></a>

 <hr/>
<?php endforeach; ?>