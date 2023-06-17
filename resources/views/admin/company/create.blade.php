@extends('admin.layout.master')

@section('contents')

 <!-- MAIN CONTENT-->
 <div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Add New Drug  </strong>
                        </div>
                        <form action="}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                               
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Drug Name">
                            </div>

                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Drug Type">
                            </div>

                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Drug Company">
                            </div>

                            <div class="form-group">
                                <input type="number" name="email" class="form-control" placeholder="Drug Price">
                            </div>

                            <div class="form-group">
                                <input type="date" name="" class="form-control" placeholder="Drug P">
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
</div>
</div>

</div>  

@endsection