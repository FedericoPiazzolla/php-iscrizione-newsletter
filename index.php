<?php
include __DIR__ . "/function.php";

if (isset($_POST['email'])) {
  $email_convalidation = email_control($_POST['email']);
  if ($_SESSION['auth'] === true) {
    header('Location: ./thankyou.php');
    die;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NewsLetter</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <main>
    <div class="container my-5">

      <h1 class="text-center">Perfavore Inserisca la sua Mail</h1>

      <!-- Email form -->
      <form class="form-control align-items-center d-flex flex-column" action="index.php" method="POST">

        <label class="form-label" for="email">Email Address</label>
        <input class="form-control" type="text" id="email" name="email" placeholder="name@gmail.com">

        <button class="btn btn-primary mt-4" type="submit">LOGIN</button>
      </form>
      <!-- /Email Form -->

      <!-- Message of login -->
      <?php if (isset($email_convalidation)) { ?>
        <h2 class="text-center mt-5 alert <?= $email_convalidation ? 'alert-success' : 'alert-danger' ?>">
          <?= $email_convalidation ? 'Indirizzo Mail valido!!' : 'Indirizzo Email NON valido' ?>
        </h2>
      <?php } ?>
      <!-- /Message of login -->

    </div>
  </main>
</body>

</html>