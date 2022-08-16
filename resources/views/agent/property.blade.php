@extends('agent.layouts.app')
@section('content')
    <section class="content">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
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
            <div class="card" style="margin: 20px">
                <div class="card-header">
                    <h3 class="card-title">Property</h3>
                    <a  href="/agent/property/create">
                        <button class="float-sm-right btn btn-info btn-sm" >+ Create</button>
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
                                    Image
                                </th>
                                <th class="text-center">
                                    Address
                                </th>
                                <th class="text-center">
                                    Price
                                </th>
                                <th class="text-center">
                                    Bed
                                </th>
                                <th class="text-center">
                                    Bathroom
                                </th>
                                <th class="text-center">
                                    Size
                                </th>
                                <th class="text-center">
                                    Create At
                                </th>
                                <th style="width: 10%" class="text-center">
                                    Status
                                </th>
                                <th style="width: 15%" class="text-center">
                                    Operations
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pizzas as $key => $pizza)
                            <tr>
                                
                                <td>
                                    {{ ++$key}}
                                </td>
                                <td class="text-center">
                                    <a>
                                        {{ $pizza->name}}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="Avatar" class="table-avatar"
                                                src="{{ asset('backend/dist/img/avatar.png') }}">
                                        </li>
                                    </ul>
                                </td>
                                <td class="text-center">
                                    <a>
                                        {{ $pizza->address}}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a>
                                        {{ $pizza->price}}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a>
                                        {{ $pizza->bed}}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a>
                                        {{ $pizza->bathroom}}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a>
                                        {{ $pizza->size}}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a>
                                        {{ $pizza->created_at}}
                                    </a>
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-success">Renting</span>
                                </td>
                                <td class="project-actions text-right">
                                    
                                    <a class="btn btn-info btn-sm" href="/agent/property/edit">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="/remove">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
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
        $(function () {
          $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
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
