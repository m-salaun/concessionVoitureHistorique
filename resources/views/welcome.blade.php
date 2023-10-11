<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css"/>
    <link rel="stylesheet" href="{{asset("css/app.css") }}">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

</head>
<body>
    <h1>Liste des marques en stock</h1>
    <div>
        <form action="/ajouterMarque" method="POST">
            @csrf
            <div class="d-flex justify-content-center">
                <div class="form-group">
                    <label>Nom de la marque : </label>
                    <input type="text" class="form-control" name="marque">
                </div>
                <div>
                    <div><br></div>
                    <button type="submit" class="btn btn-outline-primary">Ajouter</button>
                </div>
            </div>
        </form>

        <div class="d-flex justify-content-center">
        <div>
            Liste des marques :
        </div>
        @foreach($cars as $car)
        <div>
            <ul>
                <li>
                    <a href="{{$car->id}}">{{$car->marque}}</a>
                </li>
            </ul>
        </div>
        @endforeach
        </div>
    </div>
</body>
</html>