<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kid;
use Illuminate\Http\Request;

class KidController extends Controller
{
    public function index()
    {
        $kids = Kid::with('medical-records', 'immunizations')->get();
        return view('pages.admin.kid.index', [
            'kids' => $kids,
        ]);
    }

    public function show($id)
    {
        $kid = Kid::with('medical-records', 'immunizations')->findOrFail($id);
        return view('pages.admin.kid.show', [
            'kid' => $kid,
        ]);
    }


}
