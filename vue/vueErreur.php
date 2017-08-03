<?php ob_start() //mise en tampon du flux HTML de sortie ?>
        <p>Une erreur est survenue : <?= $msgErreur ?></p>
<?php $contenu = ob_get_clean();//recuperation du flux de sortie ,$contenu,mis en tampon depuis ob_start ?>

<?php require 'gabarit.php'; ?>