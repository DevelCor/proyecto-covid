<?php

namespace App\Http\Controllers;

use App\Models\Illness;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    //
    public function index()
    {
        $illness = Illness::all();

        return view('admin.report', ['illness' => $illness]);
    }

    public function getReports(Request $request)
    {
        $find_by = $request->all();
        if (isset($find_by['illness'])) {
            $report = Illness::where('name', '=', $find_by['illness'])->get();
            $report['persons'] = count($report);
            $report['illness'] = $find_by['illness'];
            $report['total'] = count(Illness::all());
        } else if (isset($find_by['symp'])) {
            $report = Illness::where($find_by['symp'], '=', 1)->get();
            $report['persons'] = count($report);
            $report['symp'] = $find_by['symp'];
            $report['total'] = count(Illness::all());

            if ($report['symp'] === 'diagnostic') {
                $report['symp'] = 'diagnosticadas';
            } else if ($report['symp'] === 'attented') {
                $report['symp'] = 'previamente atendidas';
            } else if ($report['symp'] === 'fever') {
                $report['symp'] = 'con fiebre';
            } else if ($report['symp'] === 'skin_rashes') {
                $report['symp'] = 'con erupciones de piel';
            } else if ($report['symp'] === 'muscleaches') {
                $report['symp'] = 'con dolores musculares';
            } else if ($report['symp'] === 'headaches') {
                $report['symp'] = 'con dolores de cabeza';
            } else if ($report['symp'] === 'cough') {
                $report['symp'] = 'con tos';
            } else if ($report['symp'] === 'vomit') {
                $report['symp'] = 'con vomitos';
            } else if ($report['symp'] === 'extra_symptoms') {
                $report['symp'] = 'con sintomas extras';
            }
        }

        return view('admin.report',['report' => $report]);
    }
}
