@extends('agent.layouts.app')
@section('content')
    <div class="card card-primary" style="margin: 100px 400px; display: fixed">
        <div class="card-header">
            <h3 class="card-title">Edit Address Of Property</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/agent/contacts" method="POST">
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputName1"
                        placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="exampleInputName1"
                        placeholder="Enter phone number">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputName1"
                        placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="message">message</label>
                    <input type="text" class="form-control" name="message" id="exampleInputName1"
                        placeholder="Enter message">
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

