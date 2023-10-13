<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/app.css") }}">

</head>
<body>
    <h1>Modifier</h1>

    <form action="/addVoitureStock" method="POST">
    @csrf
        <table>
            <td>
                <div class="form-group">
                    <label>date / annee-mois-jour: </label>
                    <input type="text" class="form-control" name="date">
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label>kilometrage : </label>
                    <input type="text" class="form-control" name="kilometrage">
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label>puissance : </label>
                    <input type="text" class="form-control" name="puissance">
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label>energie : </label>
                    <input type="text" class="form-control" name="energie">
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label>prix : </label>
                    <input type="text" class="form-control" name="prix">
                </div>
            </td>
            <td>
              <br>
                <button type="submit" class="btn btn-outline-primary" name="idModele" value="">Modifier information du modele</button>
            </td>
        </table>
    </form>
</body>
</html>