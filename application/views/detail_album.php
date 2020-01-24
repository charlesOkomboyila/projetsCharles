<html>
        <head>
                <title>Bande dessinée</title>
        </head>
        <body>
                <h1>Détail de l'album</h1>
                <pre><?php print_r ($album); ?></pre>
                <div>       
                       
                        <img src="../../../couv/<?php echo $album ->couverture ?>.jpg" alt="couverture album" width="60" height="75"> 
                        <ul style="list-style-image: none">
                                <li>Titre : <?php echo $album->titre ?></li>
                                <li>Auteur(s) : <?php echo $album ->auteur ?></li>
                                <li>Prix : <?php echo $album ->prix ?>€</li>
                                <li>Héros : <?php echo $album ->hero ?></li>                                
                                <li>Genre : <?php echo $album ->genre ?></li>
                                <li>Editeur : <?php echo $album ->editeur ?></li>
                                <li>Fournisseur : <?php echo $album ->fournisseur ?></li>
                                <li>ISBN : <?php echo $album ->ISBN ?></li>                    
                        </ul>
                        

                        <p>Résumé :<?php echo $album ->resume ?> </p>
                </div>
        </body>
</html>