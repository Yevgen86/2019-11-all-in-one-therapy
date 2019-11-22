<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(Request $request)
    {
        if (!empty($request))
            $query = $request->query();

        $patients = Patient::sortable()->paginate(10);
        return view('patients', compact('patients', 'request'));

    }

    // TODO: Check this function to work right
    public function show($id)
    {
        $patient = Patient::where('id','=', $id);
        return view('patient', $patient{$id});
    }
}
