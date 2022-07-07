<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TypeOfImmunzationRequest;
use App\Models\TypeOfImmunization;
use Illuminate\Http\Request;

class TypeOfImmunizationController extends Controller
{

    public function index()
    {
        $tois = TypeOfImmunization::all();
        return view('pages.admin.type-of-immunization.index', [
            'tois' => $tois,
        ]);
    }

    public function create()
    {
        return view('pages.admin.type-of-immunization.create');
    }

    public function store(TypeOfImmunzationRequest $request)
    {
        $data = $request->all();
        TypeOfImmunization::create($data);

        return redirect()->route('type-of-immunization.index');
    }

    public function edit($id)
    {
        $toi = TypeOfImmunization::findOrFail($id);
        return view('pages.admin.type-of-immunization.create',[
            'toi' => $toi,
        ]);
    }

    public function update(TypeOfImmunzationRequest $request, $id)
    {
        $data = $request->all();
        $item = TypeOfImmunization::findOrFail($id);

        $item->update($data);

        return redirect()->route('type-of-immunization.index');
    }

    public function destroy($id)
    {
        $item = TypeOfImmunization::findorFail($id);
        $item->delete();

        return redirect()->route('type-of-immunization.index');

    }
}
