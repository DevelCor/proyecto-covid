<?php

namespace App\Http\Controllers;

use App\Models\Illness;
use Illuminate\Http\Request;

class IllnessController extends Controller
{
    public function store(Request $request) {
        $data = $request->all();

        $illness = Illness::create([
            'name' => $data['illness'],
            'diagnostic' => isset($data['diagnostic']) ? 1 : 0 ,
            'attented' => isset($data['attented']) ? 1 : 0,
            'fever' => isset($data['fever']) ? 1 : 0,
            'skin_rashes' => isset($data['skin_rashes']) ? 1 : 0,
            'cough' => isset($data['cough']) ? 1 : 0,
            'muscleaches' => isset($data['muscleaches']) ? 1 : 0,
            'headaches' => isset($data['headaches']) ? 1 : 0,
            'vomit' => isset($data['vomit']) ? 1 : 0,
            'extra_symptoms' => isset($data['extra_symptoms']) ? $data['extra_symptoms'] : 0,
            'user_id' => auth()->user()->id,
        ]);

        if ($illness) {
            return redirect()->back()->with('success','Registro Enviado Correctamente');
        }
        return redirect()->back()->withErrors('Problema al guardar el registro :(');

    }
}
