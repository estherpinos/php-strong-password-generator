

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php strong password</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class=" bg-primary">

<div class="container d-flex justify-content-center">

  <div class="contents text-center ">
    <h2 class=" text-muted">Strong password Generator</h2>
    <h4 class=" text-white ">Genera una password sicura</h4>
    <div class="alert alert-success" role="alert">
      Scegliere una password con al meno 8 caratteri e massimo 32 caratteri.
    </div>
     
    <div class="genera-pw bg-white p-3 rounded-1 ">
      <form method="POST" action="index.php">

        <div class="row">
          <div class="col-9">
            <p>Lunghezza password:</p>
          </div>
          <div class="col">
            <input type="number" id="lunghezza" name="lunghezza" min="8" max="32" required>
          </div>
        </div>
        
        <div class="row">
          <button  @click='generaPasswordCasuale()'>Genera Password Casuale</button>
        </div>
            
      </form>

    </div>

  </div>

</div>
  
</body>
</html>