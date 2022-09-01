@extends('backend.layouts.app')
@section('content')
<div class="content-wrapper px-5 mt-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create Address Of Property</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/admin/addresses" method="POST">
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label for="commune">Commune</label>
                    <input type="text" class="form-control" name="commune" id="exampleInputName1"
                        placeholder="Enter commune">
                </div>
                <div class="form-group">
                    <label for="district">District</label>
                    <input type="text" class="form-control" name="district" id="exampleInputName1"
                        placeholder="Enter district">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" name="city" id="exampleInputName1"
                        placeholder="Enter city">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save Change</button>
            </div>
        </form>
        
    </div>
</div>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
