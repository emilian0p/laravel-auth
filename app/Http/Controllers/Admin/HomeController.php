<!-- home controller -->

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    @return void 

    public function __construct()
    {
        $this->middleware('auth');
    }

    return \Illuminate\Contracts\Support\Renderable    

    public function index()
    {
        $user = Auth::user();
        $id = Auth::id();

        return view('adminhome', ['id' => $id, 'user' => $user]);
    }
}