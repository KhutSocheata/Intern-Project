@extends('backend.layouts.app')
@section('content')
    <div class="card card-primary" style="margin: 100px 400px; display: fixed">
        <div class="card-header">
            <h3 class="card-title">Create New Property</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName1">Name Property</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Address</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Address">
                </div>          
                <div class="row">
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label>Bedroom</label>
                            <select class="custom-select">
                                <option>Any</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label>Bathroom</label>
                            <select class="custom-select">
                                <option>Any</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label for="exampleInputName1">Square</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Size">
                        </div>      
                    </div>
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label for="exampleInputName1">Prices</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Prices">
                        </div>      
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Choose image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label>Check Status</label>
                            <select class="custom-select">
                                <option>Renting</option>
                                <option>Selling</option>
                                <option>Avariable</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
