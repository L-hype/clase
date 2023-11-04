<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$name}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
</head>

<body>

    <div class="content">

        <h1>Hola {{ $name . ' ' . $lastN }}</h1>

        <div class="text">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit nemo animi ipsa facilis rem ad eaque eum
                aut
                eos vitae, incidunt quis officiis laborum magni impedit delectus debitis optio voluptate!
            </p>
        </div>

    </div>

</body>
<style>
    * {
        margin: 0px auto;
        padding: 0px;
        text-align: center
    }

    body {
        background-color: #000;
        font-family: Outfit;
    }
    .content {
        width: 90%;
        height: 100vh;
        color: cadetblue;
    }

    .text {
        width: 70%;
        margin: auto;
    }
</style>

</html>
