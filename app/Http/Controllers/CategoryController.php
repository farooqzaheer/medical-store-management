<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $req){
        $categories = new Category;
        $categories->name = $req->name;
        $categories->save();
        return redirect('categories');
    }

    public function show(){

    }

    public function edit(Category $category){
        return view('admin.category.edit',compact('category'));
    }

    public function update(Category $category, Request $req){
        $category->fill($req->post())->save();
        return redirect('categories');
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect('categories');
    }
}
