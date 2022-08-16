@extends('backend.layouts.app')
@section('content')
    <div class="card card-primary" style="margin: 100px 400px; display: fixed">
        <div class="card-header">
            <h3 class="card-title">Edit Address Of Property</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/admin/amenities" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="parking">Edit parking</label>
                    <input type="text" class="form-control"  name="parking" id="exampleInputName1" placeholder="Enter new parking">
                </div>
                <div class="form-group">
                    <label for="laundry">Edit laudry</label>
                    <input type="text" class="form-control"  name="laundry" id="exampleInputName1" placeholder="Enter laudry">
                </div>
                
                
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create Now</button>
            </div>
        </form>
    </div>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
