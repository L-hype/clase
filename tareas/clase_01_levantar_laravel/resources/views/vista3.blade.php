<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('./css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

</head>

<body>

    <div class="content">
        <h1>Hola {{ $nombre }}</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae quo reprehenderit sunt a, ad sit
            adipisci ducimus hic eum blanditiis corporis reiciendis numquam id magnam saepe at debitis ea.</p>
    </div>

</body>
<style>
    * {
        text-align: center;
        margin: 0px auto;
        padding: 0px;
    }

    body {
        background-color: #000;
        font-family: poppins;
    }

    .content {
        background-color: #103030;
        width: 90%;
        height: 100vh;
        color: cadetblue;
        padding-top: 20px;

    }
</style>

</html>
