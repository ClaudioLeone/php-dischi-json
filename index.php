<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotifake</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body class="bg-dark bg-gradient">
    <div id="app">
        <header>
            <div class="top-bar d-flex align-items-center">
                <div id="icon">
                    <i class="fa-brands fa-spotify ms-fa-spotify"></i>
                </div>
            </div>
        </header>
        
        <main>
            <div class="container d-flex flex-wrap justify-content-between px-5 py-5 gap-5">
                    <div v-for="(record, index) in recordsList" :key="index"  class="card text-white bg-dark ms-card-style">
                        <img :src="record.poster" class="card-img-top" alt="record.title">

                        <div class="card-body">
                            <p class="card-text">
                                <h5 class="title text-center">{{ record.title }}</h5>
                                <h6 class="author font-weight-normal text-center">{{ record.author }}</h6>
                                <h5 class="year text-center">{{ record.year }}</h5>
                            </p>
                        </div>
                    </div>                
            </div>
        </main>
    </div>

    <script src="JS/script.js"></script>5
</body>
</html>