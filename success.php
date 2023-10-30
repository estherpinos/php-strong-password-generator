<?php 

session_start();
if (isset($_SESSION["password"])) {
  $password=$_SESSION["password"];

}else{
   //reindirizzare
   header('Location: ./index.php');
}

require_once __DIR__ . './partials/head.php';

?>


<body>

<div class="container d-flex justify-content-center">

  <div class="contents text-center ">
    <h2 class=" text-muted">Strong password Generator</h2>
    <h4 class=" text-white ">Genera una password sicura</h4>
    <div class="alert alert-success" role="alert">
      <?php echo $password ?>
    </div>

  </div>
</div>
  
</body>
</html>