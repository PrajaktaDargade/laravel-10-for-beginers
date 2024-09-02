<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller{
    public function showUsers(){
        $user = DB::table('users')->get();
        // return $users;
        dump($users);
    }
}
?>
