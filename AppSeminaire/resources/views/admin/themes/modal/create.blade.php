{!! Form::open(['route' => 'themes.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
@csrf
<div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Créer un thème</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>{{ __('Sujet') }}:</strong><br>
                        {!! Form::text('sujet', null, ['placeholder' => 'Sujet', 'class' => 'form-control']) !!}
                    </div>
                </div>
                {!! Form::hidden('orateur_id', $orateur->id) !!}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>{{ __('Domaine de recherche') }}:</strong><br>
                        {!! Form::text('domaine_recherche', null, ['placeholder' => 'Domaine de recherche', 'class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>{{ __('Problématique') }}:</strong><br>
                        {!! Form::textarea('problematique', null, [
                                'class' => 'form-control',
                                'rows' => 2,
                                'placeholder' => 'Problématique',
                                'name' => 'problematique',
                                'id' => 'problematique',
                                'onkeypress' => "return nameFunction(event);"]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>{{ __('Objectif et Motivation du travail') }}:</strong><br>
                        {!! Form::textarea('objectif', null, [
                                'class' => 'form-control',
                                'rows' => 2,
                                'placeholder' => 'Objectif et Motivation du travail',
                                'name' => 'objectif',
                                'id' => 'objectif',
                                'onkeypress' => "return nameFunction(event);"]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>{{ __('Méthodologie de travail') }}:</strong><br>
                        {!! Form::textarea('methode_travail', null, [
                                'class' => 'form-control',
                                'rows' => 2,
                                'placeholder' => 'Méthodologie de travail',
                                'name' => 'methode_travail',
                                'id' => 'methode_travail',
                                'onkeypress' => "return nameFunction(event);"]) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>{{ __('Cas') }}:</strong><br>
                        {!! Form::textarea('cas', null, [
                                'class' => 'form-control',
                                'rows' => 2,
                                'placeholder' => 'Cas relatif au thème',
                                'name' => 'cas',
                                'id' => 'cas',
                                'onkeypress' => "return nameFunction(event);"]) !!}
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
