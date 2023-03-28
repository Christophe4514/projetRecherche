@extends('admin_layout.admin')
@section('title')
    Séminaire du {{ $seminaire->jour }}, {{ $seminaire->num_jour }}/{{ $seminaire->mois }}/{{ $seminaire->annee }}
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
                        <h1>Détails du séminaire</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('seminaires.index')}}">Séminaires</a></li>
                            <li class="breadcrumb-item active">Détails du séminaire</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Heure et Lieu</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('Heure du début') }}:</strong>
                                        {{ $seminaire->heure_debut }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('Heure de la fin') }}:</strong>
                                        {{ $seminaire->heure_fin }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('Lieu') }}:</strong>
                                        {{ $seminaire->lieu }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Date</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('Séminaire du ') }}:</strong>
                                        {{ $seminaire->jour }},
                                        {{ $seminaire->num_jour }}/{{ $seminaire->mois }}/{{ $seminaire->annee }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Modérateur</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('Nom') }}:</strong>
                                        {{ $seminaire->moderateur->nom }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('Postnom') }}:</strong>
                                        {{ $seminaire->moderateur->postnom }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('Prénom') }}:</strong>
                                        {{ $seminaire->moderateur->prenom }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('Grade') }}:</strong>
                                        {{ $seminaire->moderateur->grade }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('Photo') }}:</strong><br>
                                        <img src="{{asset('storage/moderateur_images/'.$seminaire->moderateur->photo)}}"
                                            style="height : 100px; width : 100px" class="img-square elevation-2"
                                            alt="moderateur Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <!-- /.col -->
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ajouter une intervation</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('Heure du début') }}:</strong>
                                        {!! Form::text('heure_debut', null, ['placeholder' => 'Heure du début', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('Heure de la fin') }}:</strong>
                                        {!! Form::text('heure_fin', null, ['placeholder' => 'Heure de la fin', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                     <!-- /.col -->
                     <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ajouter une intervation</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('Heure du début') }}:</strong>
                                        {!! Form::text('heure_debut', null, ['placeholder' => 'Heure du début', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('Heure de la fin') }}:</strong>
                                        {!! Form::text('heure_fin', null, ['placeholder' => 'Heure de la fin', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    {{ Form::label('', 'Lieu') }}
                                    <select name="lieu" id="lieu" class="form-control select2"
                                        placeholder="Selectionner le lieu">
                                        @foreach ($lieux as $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                     <!-- /.col -->
                     <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ajouter une intervation</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('Heure du début') }}:</strong>
                                        {!! Form::text('heure_debut', null, ['placeholder' => 'Heure du début', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>{{ __('Heure de la fin') }}:</strong>
                                        {!! Form::text('heure_fin', null, ['placeholder' => 'Heure de la fin', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    {{ Form::label('', 'Lieu') }}
                                    <select name="lieu" id="lieu" class="form-control select2"
                                        placeholder="Selectionner le lieu">
                                        @foreach ($lieux as $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col --> --}}
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
