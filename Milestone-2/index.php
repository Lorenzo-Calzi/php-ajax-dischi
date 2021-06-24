<?php

    require __DIR__ . '/database/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css "integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w== "crossorigin="anonymous" />
    <!-- Link CSS -->
    <link rel="stylesheet" href="./ASSETS/CSS/style.css">
    <!-- Title -->
    <title>Dischi PHP</title>
</head>
<body>

    <div id="app">

        <header>
            <i class="fab fa-spotify"></i>
        </header>

        <main>
            <div class="container">

                <div class="album "v-for="album in musicData">
                    <img :src="album.poster" alt="copertine album">
                    <h2>{{album.title}}</h2>
                    <h5>{{album.author}}</h5>
                    <h6>{{album.year}}</h6>
                </div>

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