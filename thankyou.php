<?php 
  session_start();

  if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    header('location: index.php');
    die;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="text-center">
  <h1 class="m-5">
    UTENTE LOGGATO CON SUCCESSO, <br> 
    ti invieremo aggiornamenti alla tua mail: <?php echo $_SESSION['email'] ?>
  </h1>
  <a href="./logout.php" class="btn btn-danger">ESCI</a>
</body>
</html>