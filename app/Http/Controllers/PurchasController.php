<?php

namespace App\Http\Controllers;
use App\Models\Purchas;
use App\Models\Drug;
use App\Models\Category;
use Illuminate\Http\Request;

class PurchasController extends Controller
{
  public function index(){
    $purchases = Purchas::all();
    return view('admin.purchas.index', compact('purchases'));
  }  

  public function create(){
    $drugs = Drug::all();
    $categories = Category::all();
    return view('admin.purchas.create', compact('drugs','categories'));
}

public function store(Request $req){
    $purchases = new Purchas; 
    $req->validate([
      'price' => 'required',
      'quantity' => 'required',
      ]);

    $purchases->price = $req->price;
    $purchases->quantity = $req->quantity;
    $purchases->drug_id = $req->drug_id;
    $purchases->category_id = $req->category_id;
    $purchases->expire = $req->expire;
 
    $purchases->save();
    return redirect('purchases');
}

public function destroy(Purchas $purchas){
    $purchas->delete();
    return redirect('purchases');
}
}
