@extends('admin.layout.master')

@section('contents')

 <!-- MAIN CONTENT-->
 <div class="main-content">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card ">
                        <div class="card-header  mb-2">
                            <strong>Add New Category </strong>
                        </div>
                        <form action="/categories" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                               
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Category Name">
                            </div>
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