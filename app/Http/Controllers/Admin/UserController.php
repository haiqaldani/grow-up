<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pages.admin.user.index', [
            'users' => $users,
        ]);
    }

    public function edit($id)
    {
        $user = User::with('parents', 'kids')->findOrFail($id);
        return view('pages.admin.user.edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request, $id)
    {

        $data = $request->all();
        $item = User::findOrFail($id);

        $item->update($data);

        return redirect()->route('user.index');
    }
}
