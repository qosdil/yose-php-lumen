<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Laravel\Lumen\Routing\Controller as BaseController;

class AstroportController extends BaseController
{
    public function astroport(Request $request)
    {
    	$name = $request->input('ship');
      	return view('astroport', array('name'=>$name));
    }
}
