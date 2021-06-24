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

    <div id="app">

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
    
    </div>
    
    <!-- Vue JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Main JS -->
    <script src="./ASSETS/JS/app.js"></script>
    
</body>
</html>