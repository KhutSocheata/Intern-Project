@extends('backend.layouts.app')
@section('content')
    <div class="card card-primary" style="margin: 100px 400px; display: fixed">
        <div class="card-header">
            <h3 class="card-title">Edit User</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Edit name</label>
                    <input type="text" class="form-control" name="name" value="{{$user->name}}" id="exampleInputName1" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="email">Edit email</label>
                    <input type="email" class="form-control"name="email"  value="{{$user->email}}" id="exampleInputName1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <div class="col-sm-6">
                        <!-- select -->
                        <div class="form-group">
                            <label for="type">Change Type User</label>
                            <select class="custom-select" name="type" > 
                                <option value="1">Admin</option>
                                <option value="2">Agent</option>
                                <option value="0">Customer</option>
                            </select>
                        </div>
                    </div>
                </div>
 
                
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection