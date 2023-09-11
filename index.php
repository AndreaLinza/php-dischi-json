<?php


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="./style.css">

    <title>Lista Dischi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

</head>



<body>

    <div id="app">

        <header>
            <nav class="navbar">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="./img/logo.svg" alt="Spotify" width="250" height="40">
                    </a>
                </div>
            </nav>
        </header>

        <main>
            <div class="container mt-5">
                <div class="row row-cols-3 g-3">
                    <div class="col" v-for="disk in listDisks">
                        <div class="card p-3" style="background-color: #112030">
                            <div class="m-auto ratio ratio-1x1 w-75">
                                <img :src="disk.poster" class="card-img-top"  alt="disk_img">
                            </div>
                            <div class="card-body text-center text-light">
                                <h5 class="card-title fw-bold">{{disk.title}}</h5>
                                <p class="card-text fs-5">{{disk.author}}</p>
                                <p class="card-text fw-bold fs-5">{{disk.year}}</p>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </main>

    </div>
    <script src="./script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>


</html>