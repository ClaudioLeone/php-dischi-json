<?php
$php_test_txt = "PHP_TEST";
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
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div id="app">
        <h1>{{ testText }}</h1>
        <h2><?php echo $php_test_txt ?></h2>
    </div>

    <script src="JS/script.js"></script>
</body>
</html>