<?php

namespace App\Http\Controllers;
use App\Models\Sell;
use App\Models\Patient;
use App\Models\Purchas;
use Illuminate\Http\Request;

class SellController extends Controller
{
    public function index(){
        $sells = Sell::all();
        return view('admin.sale.index', compact('sells'));
    }

    public function create(){
        $patients = Patient::all();
        $purchases = Purchas::all();
        return view('admin.sale.create', compact('patients','purchases'));
    }

  

    public function store(Request $req){
        $sells = new Sell;
        $purchas = Purchas::find($req->purchas_id); 

        $req->validate([
            'price' => 'required',
            'quantity' => 'required',
            ]);

        $sells->purchas_id = $req->purchas_id;
        $sells->price = $req->price;
        $sells->quantity = $req->quantity;
        $sells->patient_id = $req->patient_id;

        $purchas->quantity -= $req->quantity; 
        $purchas->save(); 

        $sells->save();
        return redirect('sells');
    }

   

    public function destroy(Sell $sell){
        $sell->delete();
        return redirect('sells');
    }
}
