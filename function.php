<?php 
session_start();
  function email_control($email) {
    if (isset($email)) {

      if (!str_contains($email, '@') || !str_contains($email, '.')) {
        $_SESSION['auth'] = false;
        return false;
      } else {
        $_SESSION['auth'] = true;
        $_SESSION['email'] = $email;
        return true;
      };

    } else {
      return false;
    };
  };

?>