<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImageController extends Controller {
	// public function authenticate($id,$key){
	// 	if (!DB::table('users')->where('id', $id)->where('api_token', $key)->exists()) {
	// 		return "Does not exist";
	// 	}
	// 	return "Exists";
	// }
	public function authenticate($request){
		return $request;
	}
}