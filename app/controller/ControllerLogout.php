<?php

namespace App\Controller;
use App\Model\ClassLogout;

class ControllerLogout extends ClassLogout{
  public function __construct()
  {
    parent::logout();
  }
}