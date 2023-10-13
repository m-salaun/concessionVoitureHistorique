<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/app.css") }}">
    <link rel="stylesheet" href="detailCar.css">
</head>
<body>
    <div class ="ajout">
    <table>
        <form action="/" method="POST">
            @csrf
            <td>
                <div class="form-group">
                    <label>Nom du modele : </label>
                    <input type="text" class="form-control" name="modele">
                </div>
            </td>
            <td>
              <br>
                <button type="submit" class="btn btn-outline-primary" name="idMarque" value="@foreach($cars as $car)
                {{$car->id}}
                @endforeach">Ajouter le modele</button>
            </td>
        </form>    
    </table>
    </div>

    <div class="titre">
    <table>
        <tr>
            <td>
                <h1>
                    Liste des modeles de 
                    @foreach($cars as $car)
                    {{$car->marque}}
                    @endforeach en stock
                </h1>
            </td>
            <td>
                <form action="/deleteMarque" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-primary"  name="idMarque" value="@foreach($cars as $car)
                {{$car->id}}
                @endforeach">Enlever cette marque</button>
                </form>
            </td>
        </tr>
    </table>
    </div>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Modele</th>
      <th scope="col">Nombre en stock</th>
      <th>Modifier ce modele</th>
      <th>Supprimer ce modele</th>
    </tr>
  </thead>
  <tbody>
  @foreach($modeles as $modele)
    <tr>
      <th scope="row">{{$modele->id}}</th>
      <td><a href="listeVoiture/{{$modele->id}}">{{$modele->modele}}</a></td>
      <td>{{$modele->nombreEnStock}}</td>
      <td>
        <form action="/pageModifierCaracteristiqueModele" method="POST">@csrf<button type="submit" class="btn btn-outline-success" name="modifier" value="{{$modele->id}}">Modifier</button></form>
      </td>
      <td>
        <form action="/deleteModele" method="POST">@csrf<button type="submit" class="btn btn-outline-danger" name="modele" value="{{$modele->id}}">Supprimer</button></form>
      </td>
    @endforeach
  </tbody>
</table>
</body>
</html>