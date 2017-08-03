
<html>

<body>

<article>
    <header>
        <h3 id="titreBillet" class="text-center">
            <?php echo $billet['titre']; ?>
            <p class="small"><?php echo $billet['date_creation_fr'];?> </p>
        </h3>
    </header>
    <p> <?php echo $billet['contenu']; ?></br></p>
</article>

<hr />
    
     <h3 id="titreCommentaires" class="text-primary small">
            Commentaire pour "<?php echo $billet['titre'] ?>"
     </h3>
    

<form id="formcomm" method="post" action="index.php?action=commenter" class="text-center">
    <input class="form-control" id="auteur" name="auteur" type="text" placeholder="Pseudo"/><br/>
    <textarea class="from-control" id="txtCommentaire" name="contenu" placeholder="Commentaire">
    </textarea><br/>
    <input type="hidden" name="id" value="<?= $billet['id'] ?>"/>
    <input type="submit" value="Commenter" class="btn btn-info"/>
</form>

    <?php foreach ($commentaires as $comm): ?>
    <br/><em><?= $comm['auteur'] ?> dit :</em>
    <p><?= $comm['commentaire'] ?></p>
    <p><?= $comm['date_commentaire'] ?></p>
        <button class="btn btn-default btn-xs"><a href="index.php?action=signaler&id=<?=$comm['id']?>&idBillet=<?=$billet['id']?>">Signaler</a></button>

<hr/>
<?php endforeach;?>


</body>
</html>
