@extends('backend.layouts.app')
@section('content')
    <div class="card card-primary" style="margin: 100px 400px; display: fixed">
        <div class="card-header">
            <h3 class="card-title">Show More</h3>
            <style>
                strong{
                    color: rgb(68, 199, 160);
                }
            </style>
        </div>
        
                   
                    <div class="cart-title">
                        
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 ">
                            <div class="form-group">
                                <strong>ID:</strong>
                                {{ $property->id }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {{ $property->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Address:</strong>
                                {{ $property->address }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Bedroom:</strong>
                                {{ $property->bedroom }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Bathroom:</strong>
                                {{ $property->bathroom }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Price:</strong>
                                {{ $property->price }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Quare:</strong>
                                {{ $property->size }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Cover:</strong>
                                <img src="{{asset('/cover/' . $property->cover) }}" class="img-responsive" style="max-height:50px; max-width:80px" alt="" srcset="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Relate Image:</strong>
                                {{ $property->image }}
                            </div>
                        </div>
                        <div class="text-left" style="padding: 5px 10px">
                            <a class="btn btn-primary " href="{{ route('property.index') }}"> Back</a>
                        </div>
                    </div>
                
        
    </div>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
