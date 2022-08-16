@extends('backend.layouts.app')
@section('content')
    <section class="content">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6" style="margin: 0px">


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
                                <li class="breadcrumb-item active">DataTables</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Default box -->
            <div class="card" style="margin: 0px 10px">
                <div class="card-header">
                    <h3 class="card-title">List All Agency</h3>
                    <a class="btn btn-success float-sm-right btn-info btn-sm" href="{{ route('users.create') }}"> Create New User</a>

                </div>
                <div class="card-body p-0">
                    <table id="example2" class="table table-bordered table-hover table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 1%">
                                    ID
                                </th>
                                <th class="text-center">
                                    Name
                                </th>
                                
                                <th class="text-center">
                                    Email
                                </th>
                                <th class="text-center">
                                    Type
                                </th>
                                <th class="text-center">
                                    Create At
                                </th>
                                <th style="width: 15%" class="text-center">
                                    Operations
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($users as $key => $user)
                            @if($user->type == 'manager')

                            
                            <tr>
                                <td>
                                    {{ $user->id}}.
                                </td>
                                <td class="text-center">
                                    <a>
                                    {{ $user->name }}    
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
                                    {{ $user->email }}
                                        
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a>
                                    {{$user->type}}                                        
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a>
                                        {{ $user->created_at}}
                                    </a>
                                </td>
                                <td class="project-actions text-right">

                                    <div class="project-actions text-right">
                                        <div class="project-actions text-right">
                                            <form action="{{ route('users.destroy', $user->id) }}"
                                                method="POST">
                                                <a href="{{ route('users.edit', $user->id) }}"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top"
                                                    title="Edit">
                                                    <i class="fas fa-pencil-alt"></i> Edit
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                {{-- <button type="submit" style="border: none" class="action_btn"
                                                    data-toggle="tooltip" data-placement="top" title="Delete"> <i
                                                        class="fas fa-trash"></i></button> --}}

                                                <input name="_method" type="hidden" value="DELETE" >
                                                <button type="submit"
                                                    class=" btn btn-danger btn-sm btn-flat show-alert-delete-box "
                                                    data-toggle="tooltip" title='Delete' style="border-radius: 4px"><i class='fas fa-trash'
                                                        style='color:#ffffff; '></i> Delete</button>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            @endif

                           
                        @endforeach
                            
                        </tbody>
                    </table>
                    
                </div>
                <!-- /.card-body -->     
            </div>

            <section class="content-header">
                
            </section>

            <!-- Default box -->
            <div class="card" style="margin: 0px 10px">
                <div class="card-header">
                    <h3 class="card-title">List All Customers</h3>
                    

                </div>
                <div class="card-body p-0">
                    <table id="example2" class="table table-bordered table-hover table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 1%">
                                    ID
                                </th>
                                <th class="text-center">
                                    Name
                                </th>
                                
                                <th class="text-center">
                                    Email
                                </th>
                                <th class="text-center">
                                    Type
                                </th>
                                <th class="text-center">
                                    Create At
                                </th>
                                <th style="width: 15%" class="text-center">
                                    Operations
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($users as $key => $user)
                            @if($user->type == 'user')

                            
                            <tr>
                                <td>
                                    {{ $user->id}}.
                                </td>
                                <td class="text-center">
                                    <a>
                                    {{ $user->name }}    
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
                                    {{ $user->email }}
                                        
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a>
                                    {{$user->type}}                                        
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a>
                                        {{ $user->created_at}}
                                    </a>
                                </td>
                                <td class="project-actions text-right">

                                    <div class="project-actions text-right">
                                        <div class="project-actions text-right">
                                            <form action="{{ route('users.destroy', $user->id) }}"
                                                method="POST">
                                                <a href="{{ route('users.edit', $user->id) }}"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top"
                                                    title="Edit">
                                                    <i class="fas fa-pencil-alt"></i> Edit
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                {{-- <button type="submit" style="border: none" class="action_btn"
                                                    data-toggle="tooltip" data-placement="top" title="Delete"> <i
                                                        class="fas fa-trash"></i></button> --}}

                                                <input name="_method" type="hidden" value="DELETE" >
                                                <button type="submit"
                                                    class=" btn btn-danger btn-sm btn-flat show-alert-delete-box "
                                                    data-toggle="tooltip" title='Delete' style="border-radius: 4px"><i class='fas fa-trash'
                                                        style='color:#ffffff; '></i> Delete</button>
                                            </form>
                                        </div>
                                    </div>

                                </td>
                            </tr> 
                            @endif
                        @endforeach
                            
                        </tbody>
                    </table>
                    <p style="padding: 10px">{!! $users->links() !!}</p>

                  
                  
                </div>
                
                
                <!-- /.card-body -->     
            </div>
           {{-- <div class="project-actions text-center">{!! $users->links() !!}</div> --}}
        <!-- /.card -->
        </div>

    </section>
    
    
        <!-- /.card-body -->
    </div>
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
