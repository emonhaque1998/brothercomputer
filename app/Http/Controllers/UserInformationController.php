<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserInformationController extends Controller
{
    public function allUsersPage(){
        $userDetailAll = User::all();
        return view('page.admin.all-users', ["userDetails" => $userDetailAll]);
    }
}
