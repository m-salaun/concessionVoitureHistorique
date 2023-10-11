<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/detailCar.css">
    <link rel="stylesheet" href="{{asset("css/app.css") }}">
</head>
<body>
  <style>
  body {
    height: 100vh;
    margin: 0;
  }

  h1{
    color : rgb(0, 0, 0);
    text-align: center;
    text-decoration: underline;
  }

  .titre{
    display: flex;
    border-collapse: collapse;
    justify-content: center;
    align-items: center;
  }
  </style>
  <div class="titre">
  <table>
    <tr>
      <td>
        <h1>Liste des  @foreach($modeles as $modele){{$modele->modele}}@endforeach en stock</h1>
        
      </td>
      <td>
      <form action="" method="POST"> @csrf<button type="submit" class="btn btn-outline-primary">+</button></form>
      </td>
    </tr>
  </table>
  </div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">date</th>
      <th scope="col">kilometrage</th>
      <th>puissance</th>
      <th>energie</th>
      <th>prix</th>
      <th>modifier</th>
      <th>supprimer</th>
    </tr>
  </thead>
  <tbody>
  @foreach($voitures as $voiture)
    <tr>
      <th scope="row">{{$voiture->id}}</th>
      <td>{{$voiture->date}}</td>
      <td>{{$voiture->kilometre}} km</td>
      <td>
        {{$voiture->puissances}} chavaux
      </td>
      <td>
        {{$voiture->energie}}
      </td>
      <td>
        {{$voiture->prix}} €
      </td>
      <td>
        <form action="" method="POST">@csrf<button type="submit" class="btn btn-outline-success">Modifier</button></form>
      </td>
      <td>
        <form action="" method="POST">@csrf<button type="submit" class="btn btn-outline-danger">Supprimer</button></form>
      </td>
    @endforeach
  </tbody>
</table>
</body>
</html>