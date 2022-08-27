@extends('agent.layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <div class="card card-primary" style="margin: 100px 400px; display: fixed">
        <div class="card-header">
            <h3 class="card-title">Edit property</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('posts.update', $posts->id) }}"  method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name Property</label>
                    <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Enter Name" value="{{$posts->name}}">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="exampleInputName1" placeholder="Address" value="{{$posts->address}}">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label for="bedroom">Bedroom</label>
                            <input type="text" class="form-control" name="bedroom" id="exampleInputName1" placeholder="Bedroom" value="{{$posts->bedroom}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label for="bathroom">Bathroom</label>
                            <input type="text" class="form-control" name="bathroom" id="exampleInputName1" placeholder="Bathroom" value="{{$posts->bathroom}}">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label for="size">Square</label>
                            <input type="text" class="form-control" name="size" id="exampleInputName1" placeholder="Size" value="{{$posts->size}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label for="price">Prices</label>
                            <input type="text" class="form-control" name="price" id="exampleInputName1" placeholder="Prices" value="{{$posts->price}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input  type="text" class="form-control" value="{{$posts->description}}" name="description" id="exampleInputName1"
                                placeholder="description..">
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
                    <label for="types[]">Reselect Type</label>
                    <div class="col-sm-4">
                        <input type="checkbox" name="types[]" value="Sale"> For Sale 
                    </div>
                    <div class="col-sm-4">
                        <input type="checkbox" name="types[]" value="Rent">For Rent 
                    </div>
                    <div class="col-sm-4">
                        <!-- select -->
                        <input type="checkbox" name="types[]" value="Rental">For Rental 
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
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