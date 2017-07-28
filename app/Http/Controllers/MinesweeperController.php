<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class MinesweeperController extends BaseController
{
    public function index()
    {
      return view('minesweeper');
    }
}
