<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudInsertController extends Controller {
   public function insertform(){
      return view('stud_create');
   }
	
   public function newUser() {
      $this->middleware('auth:api');
      $username = 'kenschnetz';
      $email = 'ken@ken.com';
      $password = Hash::make('password');
      $token = str_random(60);
      DB::table('users')->insert([
          ['username' => $username, 'email' => $email, 'password' => $password, 'api_token' => $token],
      ]);
      return "Record inserted successfully.";
   }

   public function insert(Request $request){
      $name = $request->input('stud_name');
      DB::insert('insert into student (name) values(?)',[$name]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
   }
}