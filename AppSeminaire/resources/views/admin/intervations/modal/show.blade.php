<div class="modal fade" id="ModalShow{{ $intervation->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Détails du modérateur</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Séminaire') }}:</strong><br>
                                {{ $intervation->seminaire->nom }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Intervention n°') }}:</strong>
                                {{ $intervation->num_intervation }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Heure du début') }}:</strong>
                                {{ $intervation->heure_debut_intervention }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Heure de la fin') }}:</strong>
                                {{ $intervation->heure_fin_intervention }}
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Thème') }}:</strong>
                                {{ $intervation->theme->sujet}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- .col-md-12 -->
        </div>
    </div>
</div>
