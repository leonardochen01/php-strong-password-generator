<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Strong Password Generator</title>
</head>
<body>

  <h1 class="mb-5 mx-5">Generatore di password</h1>

  <form action="index.php" method="GET"> <!-- creo il form e invio la richiesta in GET!-->

  <label for="password" class="mx-5">Inserisci il numero che determina la lunghezza della password:</label> 
    <input type="number" id="length" name="length" required>
    <input type="submit" value="Genera password" class="mx-5">

  </form>

</body>
</html>