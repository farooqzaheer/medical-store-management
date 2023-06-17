@extends('admin.layout.master')

@section('contents')
<style>
    #table{
        border: 2px solid red;
        margin-top: 10px;
        background: #fff;
        text-align: center;
    }
</style>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-lg-12 margin-tb mt-5">
            <div class="pull-left">
                <h2>Categories of Drugs</h2>
            </div>
                <div class="pull-right mb-1">
                    <a class="btn btn-success" href="{{route('categories.create')}}"> Create Category</a>
                </div>
            </div>
        </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
                @endif
                <table class="table table-bordered " id="table">
                    <tr>
                        <th>S.No</th>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
  
                    <tr>
                        @foreach($categories as $category)
                        <td>{{$loop->iteration}}</td>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>
                            <form action="{{route('categories.destroy',$category->id)}}" method="Post">
                                <a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button  type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <script>
                    function edit(){
                        alert('you cannot Edit, after 2 days! ')
                    }
                </script>

    @endsection