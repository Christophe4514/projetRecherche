{!! Form::model($intervation, [
    'method' => 'PATCH',
    'route' => ['intervations.update', $intervation->id],
    'enctype' => 'multipart/form-data',
]) !!}
@csrf
<div class="modal fade text-left" id="ModalEdit{{ $intervation->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modification de l'intervention</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>{{ __('Selectionner le séminaire') }}:</strong>
                        {{ Form::select('seminaire_id', $seminaires, null, ['placeholder' => 'Selectionner le séminaire', 'class' => 'form-control select2']) }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    {{ Form::label('', 'Selectionner le numéro d\'ordre') }}
                    <select name="num_intervation" id="num_intervation" class="form-control select2"
                        placeholder="Selectionner le numéro">
                        @foreach ($num_intervations as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>{{ __('Heure du début') }}:</strong>
                        {!! Form::text('heure_debut_intervention', null, ['placeholder' => 'Heure du début', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>{{ __('Heure de la fin') }}:</strong>
                        {!! Form::text('heure_fin_intervention', null, ['placeholder' => 'Heure de la fin', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>{{ __('Selectionner un thème') }}:</strong>
                        {{ Form::select('theme_id', $themes, null, ['placeholder' => 'Selectionner un thème', 'class' => 'form-control select2']) }}
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn gray btn-outline-secondary"
                    data-dismiss="modal">{{ __('Quitter') }}</button>
                <button type="submit" class="btn btn-warning">{{ __('Edit') }}</button>
            </div>
        </div>
    </div>
</div>

{!! Form::close() !!}
