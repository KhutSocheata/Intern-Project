@extends('agent.layouts.app')
@section('content')
    <div class="card card-primary" style="margin: 100px 400px; display: fixed">
        <div class="card-header">
            <h3 class="card-title">Show More</h3>
            <style>
                strong {
                    color: rgb(68, 199, 160);
                }
            </style>
        </div>


        <div class="cart-title">

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 ">
                <div class="form-group">
                    <strong>ID:</strong>
                    {{ $post->id }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $post->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    {{ $post->description }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    {{ $post->address }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bedroom:</strong>
                    {{ $post->bedroom }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bathroom:</strong>
                    {{ $post->bathroom }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    {{ $post->price }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quare:</strong>
                    {{ $post->size }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cover:</strong>
                    <img src="{{ asset('/cover/' . $post->cover) }}" class="img-responsive"
                        style="max-height:500px; max-width:750px" alt="" srcset="">
                </div>
            </div>


            {{-- <p>Images:</p>
                        @foreach ($property->images as $img)
                            <form action="/deleteimage/{{ $img->id }}" method="post">
                                <button class="btn text-danger">X</button>
                                @csrf
                                @method('delete')
                            </form>
                            <img src="/images/{{ $img->image }}" class="img-responsive"
                                style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                        @endforeach --}}


            <div class="text-left" style="padding: 5px 10px">
                <a class="btn btn-primary " href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>


    </div>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
