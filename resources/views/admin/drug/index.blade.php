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
                <h2>All Drugs</h2>
            </div>
                <div class="pull-right mb-1">
                    <a class="btn btn-success" href="{{route('drugs.create')}}"> Add New Drug</a>
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
                        <th>D.No</th>
                        <th>Drug ID</th>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Expire Date</th>
                        <th>Action</th>
                    </tr>
  
                    <tr>
                        @foreach($drugs as $drug)
                        <td>{{$loop->iteration}}</td>
                        <td>{{$drug->id}}</td>
                        <td>{{$drug->name}}</td>
                        <td>{{$drug->company}}</td>
                        <td>{{$drug->category->name}}</td>
                        <td>{{$drug->price}}</td>
                        <td>{{$drug->expire}}</td>
                        <td>
                            <form action="{{route('drugs.destroy',$drug->id)}}" method="Post">
                                <a href="{{route('drugs.edit',$drug->id)}}" class="btn btn-primary">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button  type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                                        <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                                </svg></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{$drugs->links()}}
                <style>
                    .w-5{
                        display: none;
                    }
                </style>
                <script>
                    function edit(){
                        alert('you cannot Edit, after 2 days! ')
                    }
                </script>

    @endsection