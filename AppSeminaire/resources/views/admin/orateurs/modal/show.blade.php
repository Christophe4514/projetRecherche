<div class="modal fade" id="ModalShow{{ $orateur->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Détails de l'orateur</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Nom') }}:</strong>
                                {{ $orateur->nom }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Postnom') }}:</strong>
                                {{ $orateur->postnom }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Prénom') }}:</strong>
                                {{ $orateur->prenom }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Email') }}:</strong>
                                {{ $orateur->email }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ __('Grade') }}:</strong>
                                {{ $orateur->grade }}
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <img src="{{ asset('storage/orateur_images/' . $orateur->photo) }}"
                                    style="height : 200px; width : 200px" class="img-square elevation-2"
                                    alt="moderateur Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .col-md-12 -->
        </div>
    </div>
</div>

