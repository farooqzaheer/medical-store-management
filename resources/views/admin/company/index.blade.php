@extends('admin.layout.master')

@section('contents')

    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-lg-12 margin-tb mt-5">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example Tutorial</h2>
            </div>
            <div class="pull-right mb-1">
                <a class="btn btn-success" href="   "> Create Company</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <table class="table table-bordered ">
        <tr>
        <th>S.No</th>
        <th>Company Name</th>
        <th>Company Email</th>
        <th>Company Address</th>
        <th>Action</th>
    </tr>
  
    <tr>
        <td>ahmad</td>
        <td>jalil</td>
        <td>jalil</td>
        <td>jalil</td>
     
    <td>
    <form action="" method="Post">
        <a class="btn btn-primary" href="">Edit</a>
        @csrf
        @method('DELETE')
        <button  type="submit" class="btn btn-danger">Delete</button>
    </form>
</td>
    </tr>
   
</table>
   

@endsection