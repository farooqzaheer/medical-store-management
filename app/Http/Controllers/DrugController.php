<?php

namespace App\Http\Controllers;
use App\Models\Drug;
use App\Models\Category;
use Illuminate\Http\Request;
use DB;

class DrugController extends Controller
{
    public function index(){
        $drugs = Drug::paginate(5);
        return view('admin.drug.index', compact('drugs'));
    }

    public function create(){
        $categories = Category::all();
        return view('admin.drug.create', compact('categories'));
    }

    public function store(Request $req){
        $drugs = new Drug;
        $req->validate([
            'name' => 'required| max:20 | min:3',
            'company' => 'required',
            'price' => 'required'
            ]);
        $drugs->name = $req->name;
        $drugs->company = $req->company;
        $drugs->category_id = $req->category_id;
        $drugs->price = $req->price;
        $drugs->expire = $req->expire;
        $drugs->save();
        return redirect()->route('drugs.index')
        ->with('success','Drug has been created successfully.');;
    }

  

    public function destroy(Drug $drug){
        $drug->delete();
        return redirect('drugs');
    } 
}
