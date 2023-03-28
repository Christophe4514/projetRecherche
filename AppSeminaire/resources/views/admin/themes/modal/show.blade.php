<div class="modal fade" id="ModalShow{{ $theme->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Détails du thème</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Sujet') }}:</strong><br>
                                {{ $theme->sujet }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Domaine de recherche') }}:</strong><br>
                                {{ $theme->domaine_recherche }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Objectif et Motivation du travail') }}:</strong><br>
                                {{ $theme->objectif }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Méthodologie de travail') }}:</strong><br>
                                {{ $theme->methode_travail }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Cas') }}:</strong><br>
                                {{ $theme->cas }}
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Problématique') }}:</strong><br>
                                {{ $theme->problematique}}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>{{ __('Statut') }}:</strong><br>
                                    {{ $theme->status}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-12 -->
        </div>
    </div>
</div>

