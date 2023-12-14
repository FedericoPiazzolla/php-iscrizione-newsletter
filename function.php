<?php 
session_start();
  /**
   * Controlla se la mail è ben formata sia con @ che con il .
   * @param mixed string $email
   * 
   * @return [boolean]
   * false se la mail non è valida, altrimenti true
   */
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