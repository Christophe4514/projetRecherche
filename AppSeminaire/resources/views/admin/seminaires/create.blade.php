@extends('admin_layout.admin')
@section('title')
    Créer un séminaire
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
                        <h1>Créer un séminaire</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Créer un séminaire</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
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
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4">
                        {!! Form::open(['route' => 'seminaires.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Heure et Lieu</h3>
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
                    <div class="col-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Date</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    {{ Form::label('', 'N° Jour') }}
                                    <select name="num_jour" id="num_jour" class="form-control select2"
                                        placeholder="Selectionner n° Jour">
                                        @foreach ($num_jours as $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    {{ Form::label('', 'Jour') }}
                                    <select name="jour" id="jour" class="form-control select2"
                                        placeholder="Selectionner le jour">
                                        @foreach ($jours as $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    {{ Form::label('', 'Mois') }}
                                    <select name="mois" id="mois" class="form-control select2"
                                        placeholder="Selectionner le mois">
                                        @foreach ($mois as $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
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
                                        <strong>{{ __('Modérateur') }}:</strong>
                                        {{ Form::select('moderateur', $moderateurs, null, ['placeholder' => 'Selectionner un modérateur', 'class' => 'form-control select2']) }}
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
                    {{ Form::submit('Créer le séminaire', ['class' => 'btn btn-success']) }}
                    {!! Form::close() !!}
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
