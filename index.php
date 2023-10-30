
<?php 

include __DIR__ ."./functions.php";

$min=8;
$max= 32;


if (isset($_POST["lunghezza"]) && !empty($_POST['lunghezza'])) {

  $lunghezza = $_POST['lunghezza'];

  if ($lunghezza < $min || $lunghezza> $max) {
    $message= 'Errore!';
  }else{

    session_start();
    $_SESSION['password'] = generaPasswordCasuale($lunghezza);

    //reindirizzare
    header('Location: ./success.php');
 
  } 
}

require_once __DIR__ . './partials/head.php';
?>



<body class=" bg-primary">

<div class="container d-flex justify-content-center">

  <div class="contents text-center ">
    <h2 class=" text-muted">Strong password Generator</h2>
    <h4 class=" text-white ">Genera una password sicura</h4>
    <div class="alert alert-success" role="alert">
      Scegliere una password con al meno <?php echo $min ?> caratteri e massimo <?php echo $max ?> caratteri.
    </div>
     
    <div class="genera-pw bg-white p-3 rounded-1 ">
      <form method="POST" action="index.php">

        <div class="row">
          <div class="col-9">
            <p class=" text-start ">Lunghezza password:</p>
          </div>
          <div class="col">
            <input type="number" id="lunghezza" name="lunghezza" min="8" max="32" required>
          </div>
        </div>
        
        <div class="row">

        <div class="col-auto"><button class="btn btn-primary" type="submit" >Invia</button></div>
        <div class="col-auto"><button class="btn btn-secondary" type="reset" >Reset</button></div>
          
        </div>
            
      </form>

    </div>

  </div>

</div>
  
</body>
</html>