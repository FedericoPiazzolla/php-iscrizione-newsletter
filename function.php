<?php 

  function email_control($email) {
    if (isset($email)) {

      if (!str_contains($email, '@') || !str_contains($email, '.')) {
        return false;
      } else {
        return true;
      };

    } else {
      return false;
    };
  };

?>