@extends('admin_layout.admin')
@section('title')
    Thèmes
@endsection

@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Thèmes</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('orateurs.index')}}">Orateurs</a></li>
                            <li class="breadcrumb-item active">Thèmes</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tous les thèmes</h3>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="float-sm-right">
                                            <a href="#" class="btn btn-success" style="color:white"
                                                data-toggle="modal" data-target="#ModalCreate">
                                                <span style="color:white"></span> {{ __('Ajouter') }}
                                            </a>
                                            @include('admin.themes.modal.create')
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all(); as $error)
                                    <li>{{$error}}</li>

                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            @if (Session::has('status'))
                                <div class="alert alert-success">
                                    {{ Session::get('status') }}
                                </div>
                            @endif

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Num.</th>
                                            <th>{{ __('Sujet') }}</th>
                                            <th>Problématique</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orateur->themes as $key => $theme)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $theme->sujet }}</td>
                                                <td>{{ $theme->problematique }}</td>
                                                <td>
                                                    <a class="btn btn-secondary" data-toggle="modal"
                                                        data-target="#ModalShow{{ $theme->id }}" href="#"><i
                                                            class="nav-icon fas fa-file"></i></a>
                                                    <a class="btn btn-primary" href="#" data-toggle="modal"
                                                        data-target="#ModalEdit{{ $theme->id }}"><i
                                                            class="nav-icon fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#ModalDelete{{ $theme->id }}" id="delete"><i
                                                            class="nav-icon fas fa-trash"></i></a>
                                                    @include('admin.themes.modal.edit')
                                                    @include('admin.themes.modal.delete')
                                                </td>
                                                @include('admin.themes.modal.show')
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Num.</th>
                                            <th>{{ __('Sujet') }}</th>
                                            <th>Problématique</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection





@section('scripts')
    <!-- DataTables -->
    <script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/dist/js/bootbox.min.js')}}"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
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
