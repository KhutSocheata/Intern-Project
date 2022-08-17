@extends('backend.layouts.app')
@section('content')
    <section class="content">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header" style="margin: 0px 30px">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <div class="form-inline">
                                <div class="input-group" data-widget="sidebar-search">
                                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-sidebar">
                                            <i class="fas fa-search fa-fw"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active">Property</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Default box -->
            <div class="card" style="margin: 0px 40px">
                <div class="card-header">
                    <h3 class="card-title">Property</h3>
                    <a href="/admin/property/create">
                        <a class="btn btn-success float-sm-right btn-info btn-sm" href="{{ route('property.create') }}">
                            Create New Address</a>
                    </a>
                </div>
                <div class="card-body p-0">
                    <table id="example2" class="table table-bordered table-hover table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 1%">
                                    ID.
                                </th>
                                <th class="text-center">
                                    Name
                                </th>
                                <th class="text-center">
                                    Address
                                </th>
                                <th class="text-center">
                                    Prices
                                </th>
                                <th class="text-center">
                                    Cover
                                </th>
                                {{-- <th style="width: 10%" class="text-center">
                                    Status
                                </th> --}}
                                <th style="width: 10%" class="text-center">
                                    Create_At
                                </th>
                                <th style="width: 20%" class="text-center">
                                    Operations
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1; @endphp
                            @foreach ($properties as $property)
                                <tr>
                                    <td class="text-center">
                                        <a>
                                            {{ $property->id }}
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a>
                                            {{ $property->name }}
                                        </a>
                                    </td>
                                    {{-- <td class="text-center">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="Avatar" class="table-avatar"
                                                src="{{ asset('backend/dist/img/avatar.png') }}">
                                        </li>
                                    </ul>
                                </td> --}}
                                    <td class="text-center">
                                        <a>
                                            {{ $property->address }}
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a>
                                            {{ $property->price }}
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{asset('/cover/' . $property->cover) }}" class="img-responsive" style="max-height:50px; max-width:80px" alt="" srcset="">
                                    </td>
                                    <td class="text-center">
                                        <a>
                                            {{ $property->created_at }}
                                        </a>
                                    </td>
                                    {{-- <td class="project-state">
                                    <span class="badge badge-success">{{ $product->status }}</span>
                                </td> --}}
                                    <td class="project-actions text-right">
                                        <form action="{{ route('property.destroy', $property->id) }}" method="post">
                                             @csrf
                                            @method('DELETE')
                                            <a href="{{ route('property.show', $property->id) }}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="fas fa-pencil-alt"></i> View
                                            </a>
                                            <a href="{{ route('property.edit', $property->id) }}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="fas fa-pencil-alt"></i> Edit
                                            </a>
                                            {{-- <button type="submit" style="border: none" class="action_btn"
                                                data-toggle="tooltip" data-placement="top" title="Delete"> <i
                                                    class="fas fa-trash"></i></button> --}}
                                            <input name="_method" type="hidden" value="DELETE" >
                                            <button type="submit" class=" btn btn-danger btn-sm btn-flat show-alert-delete-box " data-toggle="tooltip" title='Delete' style="border-radius: 4px">
                                                <i class='fas fa-trash' style='color:#ffffff; '></i>Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.card -->

    </section>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
