<?php

namespace App\Http\Controllers;

use App\Blogs;
use App\User;
use App\Users;
use Illuminate\Http\Request;

use App\Http\Requests;

class BlogsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        $blogs = Blogs::all();
        $users = Users::all();
        return view('blog.index', ['blogs'=>$blogs, 'users'=>$users]);
    }
    public function userBlogs(Users $user) {
        $blogUser = Users::where('id', $user->id)->firstOrFail();
        return view('blog.userblogs', ['user'=>$blogUser]);
    }
}
