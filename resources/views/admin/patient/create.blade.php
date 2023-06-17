@extends('admin.layout.master')

@section('contents')

 <!-- MAIN CONTENT-->
 <div class="main-content">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card ">
                        <div class="card-header  mb-2">
                            <strong>Add New Patient </strong>
                        </div>
                        <form action="/patients" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                               
                        <div class="col-xs-12 col-sm-12 col-md-12">
                           
                                <input type="text" name="name" class="form-control mb-3" placeholder="Patient Name">
                                @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            
                            <select class="form-control mb-2" name="doctor_id" >
                                    @foreach($doctors as $doctor)
                                    <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                                    @endforeach
                            </select>

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