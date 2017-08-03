

<body>

<form class="form-horizontal" method="post" action="index.php?action=ajouter">
  <div class="form-group">
    <label for="exampleInputEmail1">Titre</label>
    <input type="text" row="3" class="form-control" id="titreBillet" placeholder="Titre" name="titre">
  </div>
  <div class="form-group">
    <label for="contenuBillet">Billet</label>
    <textarea class="form-control" rows="10" placeholder="Billet" name="contenu"></textarea>
  </div>
    <button type="submit" class="btn btn-default">Ajouter</button>
</form>

</body>
</html>