@extends('backend.layouts.app')
@section('content')
    <div class="card card-primary" style="margin: 100px 400px; display: fixed">
        <div class="card-header">
            <h3 class="card-title">Edit Room</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>

            <div class="card-body">
                
                <div class="row">
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label for="exampleInputName1">Price</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter price">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputDate1">Number Beds</label>
                                <input type="text" class="form-control" id="exampleInputDate1" placeholder="Number beds">
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputDate1">Number of room</label>
                                <input type="text" class="form-control" id="exampleInputDate1" placeholder="number room">
                            </div>
                            
                        </div>
                       
                    </div>
                 <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <label for="exampleInputName1">Number Bathrooms</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Number bathrooms">
                            </div>
                        </div>
                </div>
            </div>

            <div class="card-body">
                
                <div class="row">
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label for="exampleInputName1">Floor</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter floor">
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputDate1">Size</label>
                                <input type="text" class="form-control" id="exampleInputDate1" placeholder="Enter size">
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label for="exampleInputName1">Near</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Near_by">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputDate1">Create At </label>
                                <input type="datetime-local" class="form-control" id="exampleInputDate1" placeholder="Create_at">
                            </div>   
                        </div>
                    </div>
                   
                </div>
            </div>
            
            
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save Change</button>
            </div>
        </form>
    </div>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
