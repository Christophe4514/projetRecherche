@extends('admin_layout.admin')
@section('title')
    Interventions
@endsection

@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Interventions</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Interventions</li>
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
                                <h3 class="card-title">Tous les Interventions</h3>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="float-sm-right">
                                            <a href="#" class="btn btn-success" style="color:white"
                                                data-toggle="modal" data-target="#ModalCreate">
                                                <span style="color:white"></span> {{ __('Ajouter') }}
                                            </a>
                                            @include('admin.intervations.modal.create')
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                            @if (Session::has('danger'))
                            <div class="alert alert-danger">
                                {{ Session::get('danger') }}
                            </div>
                            @endif
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Num.</th>
                                            <th>{{ __('Numéro d\'ordre') }}</th>
                                            <th>{{ __('Heure du début') }}</th>
                                            <th>{{ __('Heure de la fin') }}</th>
                                            <th>Thème</th>
                                            <th>Séminaire</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($intervations as $key => $intervation)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $intervation->num_intervation }}</td>
                                                <td>{{ $intervation->heure_debut_intervention }}</td>
                                                <td>{{ $intervation->heure_fin_intervention }}</td>
                                                <td>{{ $intervation->theme->sujet }}</td>
                                                <td>{{ $intervation->seminaire->nom}}</td>
                                                <td>
                                                    <a class="btn btn-secondary" data-toggle="modal"
                                                        data-target="#ModalShow{{ $intervation->id }}" href="#"><i
                                                            class="nav-icon fas fa-file"></i></a>
                                                    {{-- <a class="btn btn-primary" href="#" data-toggle="modal"
                                                        data-target="#ModalEdit{{ $intervation->id }}"><i
                                                            class="nav-icon fas fa-edit"></i></a> --}}
                                                    <a href="#" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#ModalDelete{{ $intervation->id }}" id="delete"><i
                                                            class="nav-icon fas fa-trash"></i></a>
                                                    @include('admin.intervations.modal.edit')
                                                    @include('admin.intervations.modal.delete')
                                                </td>
                                                @include('admin.intervations.modal.show')
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Num.</th>
                                            <th>{{ __('Numéro d\'ordre') }}</th>
                                            <th>{{ __('Heure du début') }}</th>
                                            <th>{{ __('Heure de la fin') }}</th>
                                            <th>Thème</th>
                                            <th>Séminaire</th>
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
    <script src="backend/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


    <script src="backend/dist/js/bootbox.min.js"></script>
    <!-- page script -->

    {{-- <script>
        $(document).on("click", "#delete", function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            bootbox.confirm("Do you really want to delete this element ?", function(confirmed) {
                if (confirmed) {
                    window.location.href = link;
                };
            });
        });
    </script> --}}
    <!-- page script -->
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
