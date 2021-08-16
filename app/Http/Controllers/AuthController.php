<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119034,
        'name' => 'Aulia Ayu Dyah Lestari',
        'gender' => 'Female',
        'phone' => '081231888226',
        'absen' => '06',
        'class' => 'XII RPL 1'];
  }
}