
<body>
<p class="bg-primary">ADMINISTRATION</p>
    <?php foreach ($billets as $b):?>

  <article>
    <header>
      <a href="<?= "index.php?action=billet&id=".$b['id'] ?>">
          <h1 class="titreBillet"><?= $b['titre'] ?></h1>
      </a>
          <time><?= $b['date_creation_fr'] ?></time>
    </header>
        <p><?= $b['contenu'] ?></p>
  </article>
   <a href="index.php?action=modif&id=<?=$b['id'] ?>"><button type="button" class="btn btn-info btn-xs">Modifier</button></a>
   <button type="button" class="btn btn-defaut btn-xs"><a href="index.php?action=suppr&id=<?=$b['id'] ?>">Effacer</a></button>
 
<hr/>



<?php endforeach;?>
</body>
</html>