<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImageController extends Controller {
	public function Authenticate($id, $token) {
		if (DB::table('users')->where('id', $id)->where('api_token', $token)->exists()) {
			return true;
		}
		return false;
	}

	public function NewCategory(Request $request) {
		if ($this->Authenticate($request->id, $request->token)) {
		// if (DB::table('users')->where('id', $request->id)->where('api_token', $request->token)->exists()) {
			if (!DB::table('categories')->where('name', $request->name)->exists()) {
				DB::insert('insert into categories (name) values(?)',[$request->name]);
				return "Category added to database";
			}
			return "Category already exists";
		}
		return "Your API id or key is invalid";
	}

	public function GetCategories(Request $request) {
		if ($this->Authenticate($request->id, $request->token)) {
			$categories = DB::select('select * from categories');
			return $categories;
		}
	}
}