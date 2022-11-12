<?php

namespace App\Controller;

use App\Model\ClassApi;

class ControllerApi extends ClassApi{

  public function __construct()
  {
    echo json_encode(parent::retornaProjetos());
  }
}