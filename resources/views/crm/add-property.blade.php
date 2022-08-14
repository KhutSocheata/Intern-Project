@extends('crm.layouts.app')
@section('content')
    <div class="card card-primary" style="margin: 100px 500px; display: fixed">
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
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Input Address">
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
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleInputDate1">Create At</label>
                                <input type="datetime-local" class="form-control" id="exampleInputDate1" placeholder="Create At">
                            </div>
                            
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
