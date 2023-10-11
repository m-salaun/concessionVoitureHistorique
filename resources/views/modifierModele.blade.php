<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/detailCar.css"/>
    <link rel="stylesheet" href="{{asset("css/app.css") }}">

</head>
<body>
    <h1>Modifier @foreach($modeles as $modele)
        {{$modele->modele}}        
    @endforeach
    </h1>
    <form action="/modifierCaracteristiqueModele"  method="POST">
    @csrf
        <table>
            <tr>
                <td>
                    <div class="form-group">
                        <label>Nom du modele : </label>
                        <input type="text" class="form-control" name="nom">
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" class="btn btn-primary" name="idModele" value="@foreach($modeles as $modele)
                        {{$modele->id}}
                        @endforeach">
                        Modifier
                    </button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>