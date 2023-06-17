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
                <h2>Parmicy</h2>
            </div>
                <div class="pull-right mb-1">
                    <a class="btn btn-success" href="{{route('purchases.create')}}"> Buy Drugs</a>
                </div>
            </div>
        </div>
                <table class="table table-bordered " id="table">
                    <tr>
                        <th>D.No</th>
                        <th>Purchas ID</th>
                        <th>Drugs</th>
                        <th>Company</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Expire Date</th>
                        <th width="280px">Action</th>
                    </tr>
  
                    <tr>
                        @foreach($purchases as $purchas)
                        <td>{{$loop->iteration}}</td>
                        <td>{{$purchas->id}}</td>
                        <td>{{$purchas->drug->name}}</td>
                        <td>{{$purchas->drug->company}}</td>
                        <td>{{$purchas->drug->category->name}}</td>
                        <td>{{$purchas->price}}</td>
                        <td>{{$purchas->quantity}}</td>
                        <td>{{$purchas->expire}}</td>
                        <td>
                            <form  action="{{route('purchases.destroy',$purchas->id)}}" method="Post">
                                <a onclick="edit()" class="btn btn-primary">Edit</a>
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
                <script>
                    function edit(){
                        alert('you cannot Edit, after 2 days! ')
                    }
                </script>

    @endsection