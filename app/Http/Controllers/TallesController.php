<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Talles;

class TallesController extends Controller
{

    public function store(Request $request) {
        $input = $request->all();
        $talle = new Talles();
        $talle->talle = $input['talle'];
        $talle->save();
        return redirect()
            ->route('admin.section', ['seccion' => 'talles'])
            ->with('feedback.message', 'Talle creado correctamente')
            ->with('feedback.type', 'success');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'talle' => 'required|string|max:5',
        ]);

        $talle = Talles::findOrFail($id);
        $talle->talle = $request->input('talle');
        $talle->save();
        return redirect()
            ->route('admin.section', ['seccion' => 'talles'])
            ->with('feedback.message', 'Talle actualizado correctamente')
            ->with('feedback.type', 'success');
    }

    public function destroy($id)
    {
        $talle = Talles::findOrFail($id);
        $talle->delete();
        
        return redirect()
            ->route('admin.section', ['seccion' => 'talles'])
            ->with('feedback.message', 'Talle eliminado correctamente')
            ->with('feedback.type', 'success');
    }
}
