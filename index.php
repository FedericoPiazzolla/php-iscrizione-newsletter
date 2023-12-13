<?php 
  function email_control($email) {
    if (isset($email)) {

      if (!str_contains($email, '@') || !str_contains($email, '.')) {
        return false;
      } else {
        return true;
      };
    };
  };

  $email_convalidation = email_control($_POST['email']);
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

    <h2 class="text-center mt-5 alert <?= $email_convalidation ? 'alert-success' : 'alert-danger' ?>">
      <?= $email_convalidation ? 'Indirizzo Mail valido!!' : 'Indirizzo Email NON valido' ?>
    </h2>
    </div>
  </main>
</body>

</html>