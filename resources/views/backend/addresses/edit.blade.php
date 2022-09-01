@extends('backend.layouts.app')
@section('content')
<div class="content-wrapper px-5 mt-4">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Address Of Property</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('addresses.update', $address->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="commune">Edit Commune</label>
                    <input type="text" class="form-control" name="commune" value="{{$address->commune}}" id="exampleInputName1" placeholder="Enter commune">
                </div>
                <div class="form-group">
                    <label for="district">Edit District</label>
                    <input type="text" class="form-control"name="district"  value="{{$address->district}}" id="exampleInputName1" placeholder="Enter district">
                </div>
                <div class="form-group">
                    <label for="city">Edit City</label>
                    <input type="text" class="form-control" name="city" value="{{$address->city}}" id="exampleInputName1" placeholder="Enter city">
                </div>
                
                
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
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
