<?php

namespace App\Model;

class ClassLogout{
  protected function logout()
  {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ".DIRPAGE);
  }
}