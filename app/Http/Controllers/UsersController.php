<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = Users::all();
        return view('users.index', ['users'=>$users]);
    }
    public function edit(Users $user) {
        return view('users.edit', ['user'=>$user]);
    }
    public function save(Request $request, Users $user) {
        $user->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
        return back();
    }
    public function delete(Users $user) {
        Users::destroy($user->id);
        return back();
    }
}
