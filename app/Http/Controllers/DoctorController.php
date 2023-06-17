<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
        $doctors = Doctor::all();
        return view('admin.doctor.index', compact('doctors'));
    }

    public function create(){
        return view('admin.doctor.create');
    }

    public function store(Request $req){
        $doctors = new Doctor;
        // $this->validate($req , [
        //     'doctor_image' => 'required|file|image'
        // ]);

        if($req->hasFile('doctor_image'))
            {

            $fileNameWithEx = $req->file('doctor_image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithEx , PATHINFO_FILENAME);
            $extension = $req->file('doctor_image')->getClientOriginalExtension();
            $uploadName = 'Drug_' . time() . '_Doctor' . '.' . $extension;
            $image = $req->file('doctor_image')->storeAs('public/doctor' , $uploadName);
            $fileNameToStore = 'storage/doctor/' . $uploadName;
        }
        else{
            $fileNameToStore = 'storage/doctor/default.jpg';
        }
        
        $doctors->name = $req->name;
        $doctors->lastname = $req->lastname;
        $doctors->gender = $req->gender;
        $doctors->bio = $req->bio;
        $doctors->doctor_image = $fileNameToStore;
        $doctors->save();
        return redirect('doctors');
    }

    public function destroy(Doctor $doctor){
        $doctor->delete();
        return redirect('doctors');
    }
}
