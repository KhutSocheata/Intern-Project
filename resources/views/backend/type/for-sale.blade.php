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
                        <div class="col-sm-6" >
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active">Amenity</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Default box -->
            <div class="card" style="margin: 0px 40px">
                <div class="card-header">
                    <h3 class="card-title">Table For Sale</h3>
                </div>
                <div class="card-body p-0">
                    <table id="example2" class="table table-bordered table-hover table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 1%">
                                    ID.
                                </th>
                                <th class="text-center">
                                    Parking
                                </th>
                                <th class="text-center">
                                    Laundry
                                </th>
                                <th class="text-center">
                                    Create At
                                </th>

                                <th style="width: 20%" class="text-center">
                                    Operations
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1.
                                </td>
                                <td class="text-center">
                                    <a>
                                       1st floor
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a>
                                        1st floor
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
                                       11-11-2022 11:11
                                    </a>
                                </td>
                                {{-- <td class="project-state">
                                    <span class="badge badge-success">Renting</span>
                                </td> --}}
                                <td class="project-actions text-right">
                                    
                                    <a class="btn btn-info btn-sm" href="/admin/address/add">
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
