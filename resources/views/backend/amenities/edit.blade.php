@extends('backend.layouts.app')
@section('content')
    <div class="card card-primary" style="margin: 100px 400px; display: fixed">
        <div class="card-header">
            <h3 class="card-title">Edit Address Of Property</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('amenities.update', $amenity->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="parking">Edit parking</label>
                    <input type="text" class="form-control" name="parking" value="{{$amenity->parking}}" id="exampleInputName1" placeholder="Enter new parking">
                </div>
                <div class="form-group">
                    <label for="laundry">Edit laudry</label>
                    <input type="text" class="form-control" name="laundry" value="{{$amenity->laundry}}" id="exampleInputName1" placeholder="Enter laudry">
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
