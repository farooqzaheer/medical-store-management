<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        $patients = Patient::all();
        return view('admin.patient.index', compact('patients'));
    }

    public function create(){
        $doctors = Doctor::all();
        return view('admin.patient.create', compact('doctors'));
    }

    public function store(Request $req){
        $patients = new Patient;
        $req->validate([
            'name' => 'required',
            'doctor_id' => 'required',
            ]);

        $patients->name = $req->name;
        $patients->doctor_id = $req->doctor_id;
        $patients->save();
        return redirect('patients');
    }

    public function destroy(Patient $patient){
        $patient->delete();
        return redirect('patients');
    }
}
