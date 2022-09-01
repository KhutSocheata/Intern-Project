@extends('backend.layouts.app')
@section('content')
    <div class="content-wrapper px-5 mt-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Room</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/admin/rooms" method="POST">
                @csrf

                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" name="price" id="exampleInputName1"
                                    placeholder="Enter price">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <label for="floor">Floor</label>
                                <input type="number" class="form-control" name="floor" id="exampleInputName1"
                                    placeholder="Enter floor">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="number_room">Number of room</label>
                                    <input type="number" class="form-control" name="number_room" id="exampleInputDate1"
                                        placeholder="number room">
                                </div>

                            </div>

                        </div>

                        <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="bed">Number Beds</label>
                                    <input type="number" class="form-control" name="bed" id="exampleInputDate1"
                                        placeholder="Number beds">
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <label for="bathroom">Number Bathrooms</label>
                                <input type="number" class="form-control" name="bathroom" id="exampleInputName1"
                                    placeholder="Number bathrooms">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="size">Size</label>
                                    <input type="text" class="form-control" name="size" id="exampleInputDate1"
                                        placeholder="Enter size">
                                </div>

                            </div>

                        </div>
                        <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <label for="nearby">Nearby</label>
                                <input type="text" class="form-control" name="nearby" id="exampleInputName1"
                                    placeholder="Nearby place">
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
    </div>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
