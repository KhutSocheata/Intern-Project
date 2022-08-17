@extends('backend.layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <div class="card card-primary" style="margin: 100px 400px; display: fixed">
        <div class="card-header">
            <h3 class="card-title">Edit property</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('property.update', $properties->id) }}"  method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name Property</label>
                    <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Enter Name" value="{{$properties->name}}">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="exampleInputName1" placeholder="Address" value="{{$properties->address}}">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label for="bedroom">Bedroom</label>
                            <input type="text" class="form-control" name="bedroom" id="exampleInputName1" placeholder="Bedroom" value="{{$properties->bedroom}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label for="bathroom">Bathroom</label>
                            <input type="text" class="form-control" name="bathroom" id="exampleInputName1" placeholder="Bathroom" value="{{$properties->bathroom}}">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label for="size">Square</label>
                            <input type="text" class="form-control" name="size" id="exampleInputName1" placeholder="Size" value="{{$properties->size}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label for="price">Prices</label>
                            <input type="text" class="form-control" name="price" id="exampleInputName1" placeholder="Prices" value="{{$properties->price}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label for="image">Cover</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" id="input-file-now-custom-3" class="form-control m-0" name="cover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label for="image">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" id="input-file-now-custom-3" class="form-control m-0" name="images[]" multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label>Type</label>
                            <select class="custom-select">
                                <option>For Rent</option>
                                <option>For Sale</option>
                                <option>for Rental</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <a class="btn btn-primary" href="{{ route('property.index') }}"> Back</a>
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
