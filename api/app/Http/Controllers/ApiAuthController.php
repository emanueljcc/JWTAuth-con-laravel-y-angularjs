<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ApiAuthController extends Controller
{
    public function userAuth(Request $request){
    	$credentials = $request->('email','password');
    	$token = null;

    	try{
    		if (!$token = JWTAuth::attempt($credentials)) {
    			return reponse()->json(['error'=>'invalid_credentials']);
    		}
    	}catch(JWTException $ex){
    		return response()->json(['error'=>'somthing_when_wrong'],500);
    	}

    	return response()->json(compact('token'));

    }
}
