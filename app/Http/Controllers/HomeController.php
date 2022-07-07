<?php

namespace App\Http\Controllers;

use App\Models\Kid;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kids = Kid::all()->where('user_id', auth()->id());
        return view('pages.home', ['kids' => $kids]);
    }
    public function create()
    {
        return view('pages.create-kid');
    }
}
