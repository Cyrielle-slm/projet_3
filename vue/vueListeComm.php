
<body>
    <p class="bg-primary">ADMINISTRATION</p>


        <?php foreach ($comm as $commentaire): ?>
         
  <table class="table table-striped">
    <tbody>
      <tr>
        <td><a href="<?= "index.php?action=ListeComm"?>"> <h5><?= $commentaire['auteur'] ?> dit :</h5></a><br/>
            <p><?= $commentaire['commentaire'] ?></p>
            <em>Commentaire du billet numero : <?= $commentaire['id_billet'] ?></em><br/>
            <em>Commentaire posté le : <?= $commentaire['date_commentaire'] ?></em><br/>
        </td>
        <td>
         <button type="button" class="btn btn-danger btn-xs"><a href="index.php?action=supprComm&id=<?=$commentaire['id']?>&idBillet=<?= $commentaire['id_billet'] ?>">Supprimé</a></button><br/>
            Signalement <span class="badge"><?= $commentaire['signalement'] ?></span></a><br/>
           
        </td>
      </tr>
    </tbody>
  </table>



      <?php endforeach; ?>
</body>
</html>