<?php

namespace App\Controller;

use App\Model\ClassApi;

class ControllerApi extends ClassApi{

  public function __construct()
  {
    header('Content-Type: application/json');

    echo json_encode(parent::retornaProjetos());
  }
}