@extends('admin.layout.master')

@section('contents')

 <!-- MAIN CONTENT-->
 <div class="main-content">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card ">
                        <div class="card-header  mb-2">
                            <strong>Add New Drug</strong>
                        </div>
                        <form action="/drugs" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                               
                        <div class="col-xs-12 col-sm-12 col-md-12">
                           
                                <input type="text" name="name" class="form-control mb-3" placeholder="Drug Name">
                                @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                <input type="text" name="company" class="form-control mb-3" placeholder="Company Name">
                                @error('company')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            <select class="form-control mb-2" name="category_id" >
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                            </select>
                            <input type="number" name="price" class="form-control mb-3" placeholder="Drug Price">
                                <input type="date" name="expire" class="form-control mb-3" placeholder="Drug Expire">

                            <div class="form-group">
                            <div class="form-group">
                               <button type="submit" class="btn btn-primary ml-3">Submit</button> 
                            </div>  
                            </div>  
                        </div>
                    </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
</div>  

@endsection