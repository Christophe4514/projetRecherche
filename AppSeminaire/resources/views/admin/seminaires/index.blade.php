@extends('admin_layout.admin')
@section('title')
Séminaires
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
                        <h1>Séminaires</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Séminaires</li>
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
                                <h3 class="card-title">Tous les séminaires</h3>
                            </div>
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
                                            <th>{{ __('Date') }}</th>
                                            <th>{{ __('Lieu') }}</th>
                                            <th>Heure du début</th>
                                            <th>Heure de la fin</th>
                                            <th>Modérateur</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($seminaires as $key => $seminaire)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $seminaire->jour}}, {{$seminaire->num_jour}}/{{$seminaire->mois}}/{{$seminaire->annee}}</td>
                                                <td>{{ $seminaire->lieu }}</td>
                                                <td>{{ $seminaire->heure_debut }}</td>
                                                <td>{{ $seminaire->heure_fin }}</td>
                                                <td>{{ $seminaire->moderateur->nom }}</td>
                                                <td>
                                                    <a class="btn btn-secondary" href="{{route('seminaires.show',$seminaire->id)}}"><i
                                                            class="nav-icon fas fa-file"></i></a>
                                                    <a class="btn btn-primary" href="{{route('seminaires.edit',$seminaire->id)}}"><i
                                                            class="nav-icon fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#ModalDelete{{ $seminaire->id }}" id="delete"><i
                                                            class="nav-icon fas fa-trash"></i></a>
                                                    @include('admin.seminaires.modal.delete')
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Num.</th>
                                            <th>{{ __('Date') }}</th>
                                            <th>{{ __('Lieu') }}</th>
                                            <th>Heure du début</th>
                                            <th>Heure de la fin</th>
                                            <th>Modérateur</th>
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
