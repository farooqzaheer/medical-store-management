@extends('admin.layout.master')

@section('contents')

<style>
       
       form input{
            width: 500px;
            padding: 3px;
            margin-top: 10px;
            border: 1px solid #eee;
        }
    </style>
 <!-- MAIN CONTENT-->
 <div class="main-content">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card ">
                        <div class="card-header  mb-2">
                            <strong>Sell Drugs</strong>
                        </div>
                        <form action="/sells" method="POST">
                        @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        
                <div class="col-xs-12 col-sm-12 col-md-12">
                                                
                    <select placeholder="select drug"  class="form-control mb-3" name="purchas_id" >
                            @foreach($purchases as $purchas)
                            <option value="{{$purchas->id}}">{{$purchas->drug->name}}</option>
                            @endforeach
                    </select>
                    <input type="number" name="price" class="form-control " placeholder="Drug Price">
                                @error('pirce')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                    <input type="number" name="quantity" class="form-control " placeholder="Drug Quantity">
                                @error('quantity')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                    <select class="form-control mb-2 mt-3 " name="patient_id" >
                            @foreach($patients as $patient)
                            <option value="{{$patient->id}}">{{$patient->name}}</option>
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