{!! Form::open(['route' => 'moderateurs.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
@csrf
<div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Créer un modérateur</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>{{ __('Nom') }}:</strong>
                        {!! Form::text('nom', null, ['placeholder' => 'Le nom', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>{{ __('Postnom') }}:</strong>
                        {!! Form::text('postnom', null, ['placeholder' => 'Le postnom', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>{{ __('Prénom') }}:</strong>
                        {!! Form::text('prenom', null, ['placeholder' => 'Le prénom', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    {{ Form::label('', 'Grade') }}
                    <select name="grade" id="grade" class="form-control select2"
                        placeholder="Selectionner le grade">
                        @foreach ($grades as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    {{ Form::label('', 'Photo', [
                        'for' => 'exampleInputFile',
                    ]) }}
                    <div class="input-group">
                        <div class="custom-file">
                            {{ Form::file('photo', ['class' => 'custom-file-input', 'id' => 'exampleInputFile']) }}
                            {{ Form::label('', 'Choose image', ['class' => 'custom-file-label', 'for' => 'exampleInputFile']) }}
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn gray btn-outline-secondary"
                    data-dismiss="modal">{{ __('Quitter') }}</button>
                <button type="submit" class="btn btn-success">{{ __('Ajouter') }}</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
<!-- .container-fluid -->
