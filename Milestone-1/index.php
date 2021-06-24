<?php

    require __DIR__ . '/database/db.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./ASSETS/CSS/style.css">
    <title>Document</title>
</head>
<body>

    <main>
        <div class="container">

                <?php
                foreach ($dischi as $elements) { ?>
                    <div class="album">

                        <img src="<?php echo($elements['poster']); ?>" alt="copertine album">
                        <h2><?php echo($elements['title']); ?></h2>
                        <h5><?php echo($elements['author']); ?></h5>
                        <h6><?php echo($elements['year']); ?></h6>
                            
                    </div>
                <?php } ?>

        </div>
    </main>
    
</body>
</html>