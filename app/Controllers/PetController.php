<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PetController extends BaseController
{
  private $pet;
  public function __construct()
  {
    $this->pet = new \App\Models\PetModel();
  }

  public function home()
  {
    $data = [
      'tablepet' => $this->pet->findAll()
    ];
    return view('index', $data);
  }
}