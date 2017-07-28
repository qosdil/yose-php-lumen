<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Laravel\Lumen\Routing\Controller as BaseController;

class PrimeController extends BaseController
{
    public function generate(Request $request)
    {
    	$n = $request->number;

    	if (is_int($n) == false) {
    		$response = [
		        'number' => $n,
		        'error' => 'not a number'
		    ];
		    return response()->json($response);	
    	}

    	$bits = array_reverse(str_split(decbin($n)));
	    $output = array();
	    foreach($bits as $key => $bit) {
	        if($bit == 1) {
	            for($i=1;$i<=$key;$i++){
	               $output[] = '2';
	            }   
	        }
	    }
	    $response = [
	        'number' => $n,
	        'decomposition' => $output
	    ];
	    return response()->json($response);
    }
}
