<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="containerLink">
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('articoli')}}">Articoli</a>
        <a href="{{route('chiSono')}}">Chi Sono</a>
    </div>
    <h1 class="titoloHome">{{$titolo}}</h1>

    <div class="container" id="containerCard">
        <div class="row">
            <div class="card" id="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$arrayProdotti['title']}}</h5>
                    <p class="card-text">{{$arrayProdotti['category']}}</p>
                    <p class="card-text">{{$arrayProdotti['description']}}</p>
                </div>
            </div>
         


















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>