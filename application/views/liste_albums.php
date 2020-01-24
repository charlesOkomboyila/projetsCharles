<html>
        <head>
                <title>Liste des albums</title>
        </head>
        <body>
                <h1>Liste des Bandes dessinées au <?php echo date ('j F Y H:i') ?> </h1>
      

        <?php
        foreach ($list as $album)
        {?>
          <div onclick="location.href='<?php echo base_url('detailalbum/index/').$album->id; ?>'" style="cursor: pointer;" onmouseover="this.style.background='#cccccc22';" onmouseout="this.style.background=''" onmousedown="this.style.background='#cccccc';" onmouseup="this.style.background='#cccccc22'" >
            <img src="./couv/<?php echo $album ->couverture ?>.jpg" alt="couverture album" width="60" height="75">
            <ul style="list-style-type: none">
              <li>Titre : <?php echo $album->titre ?></li>
              <li>Auteur(s) : <?php echo $album ->auteur ?></li>
              <li>Prix : <?php echo $album ->prix ?>€</li>
            </ul>
          </div>
        <?php } ?>
         
        
        </body>
</html>