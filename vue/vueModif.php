
<body>
  <form class="form-horizontal" method="post" action="index.php?action=modifBillet&id=<?echo $billet['id']?>";>
    <div class="form-group">
      <label for="exampleInputEmail1">Titre</label>
      <input type="text" class="form-control" id="titreBillet" placeholder="Titre" name="titre" value="<?= $billet['titre']?>">
    </div>

    <div class="form-group">
      <label for="contenuBillet">Billet</label>
      <textarea class="form-control" rows="10" placeholder="Billet" name="contenu"><?= $billet['contenu']?></textarea>
    </div>

        <input type="submit" class="btn btn-default" value="Editer">

  </form>


</body>
</html>
