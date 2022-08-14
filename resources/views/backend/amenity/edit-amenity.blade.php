@extends('backend.layouts.app')
@section('content')
    <div class="card card-primary" style="margin: 100px 400px; display: fixed">
        <div class="card-header">
            <h3 class="card-title">Edit Address Of Property</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName1">Edit parking</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter new parking">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Edit laudry</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter laudry">
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
