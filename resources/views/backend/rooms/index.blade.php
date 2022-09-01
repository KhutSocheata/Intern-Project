@extends('backend.layouts.app')
@section('content')
<div class="content-wrapper"> 
    <section class="content">
        
            <!-- Content Header (Page header) -->
            <section class="content-header" >
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6" style="padding: 0px 30px">
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
                            <ol class="breadcrumb float-sm-right" style="padding: 0px 30px">
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
                    <h3 class="card-title">Detail Of Room</h3>
                    <a class="btn btn-success float-sm-right btn-info btn-sm" href="{{ route('rooms.create') }}"> Create New Room</a>
                </div>
                <div class="card-body p-0">
                    <table id="example2" class="table table-bordered table-hover table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 1%">
                                    ID.
                                </th>
                                <th class="text-center">
                                    Price
                                </th>
                                <th class="text-center">
                                    Floor
                                </th>
                                <th class="text-center">
                                    Number_Room
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
                                    Near_By
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
                            @foreach( $rooms as $key => $room)
                            <tr>
                                <td>
                                    {{$room->id}}.
                                </td>
                                <td class="text-center">
                                    <a>
                                        {{ $room->price}}$
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a>
                                        {{ $room->floor}}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a>
                                        {{ $room->number_room}}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a>
                                        @if( $room->bed==1)
                                        {{ $room->bed}} bed
                                        @else
                                        {{ $room->bed}} beds
                                        @endif
                                        
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a>
                                        {{ $room->bathroom}}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a>
                                        {{ $room->size}}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a>
                                        {{ $room->nearby}}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a>
                                        {{ $room->created_at}}
                                    </a>
                                </td>
                                
                                <td class="project-actions text-right">

                                    <div class="project-actions text-right">
                                        <div class="project-actions text-right">
                                            <form action="{{ route('rooms.destroy', $room->id) }}"
                                                method="POST">
                                                <a href="{{ route('rooms.edit', $room->id) }}"
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
                            @endforeach
                        </tbody>
                    </table>
                    <p style="padding: 10px">{!! $rooms->links() !!}</p>
                    




                </div>
                <!-- /.card-body -->
            </div>
           
      
        <!-- /.card -->

    </section>
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
