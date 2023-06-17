@extends('admin.layout.master')

@section('contents')

 <!-- MAIN CONTENT-->
 <div class="main-content">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card ">
                        <div class="card-header  mb-2">
                            <strong>Add New Doctor </strong>
                        </div>
                        <form action="/doctors" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                               
                        <div class="col-xs-12 col-sm-12 col-md-12">
                           
                                <input type="text" name="name" class="form-control mb-3" placeholder="Doctor Name">
                            
                            
                                <input type="text" name="lastname" class="form-control mb-3" placeholder="Last Name">
                            
                            <select class="form-control mb-2" name="gender" >
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                            </select>
                            <textarea id='editor'  class="form-control mb-2" type='text' name='bio' col='30' row='5' >
                                       this is the text </textarea>
                             <input type="file" name="doctor_image" class="form-control mb-3">

    
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
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


@endsection