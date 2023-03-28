{!! Form::open(['method' => 'DELETE', 'route' => ['orateurs.destroy', $orateur->id], 'enctype' => 'multipart/form-data']) !!}
{{ method_field('delete') }}
    {{ csrf_field() }}

    <div class="modal fade" id="ModalDelete{{ $orateur->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Suppression de l'orateur</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">Voulez-vous supprimer l'orateur <b>{{$orateur->nom}}</b> ? </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn gray btn-outline-secondary" data-dismiss="modal">{{ __('Quitter')}}</button>
                    <button type="submit" class="btn btn-outline-danger">{{ __('Supprimer')}}</button>
                </div>
            </div>
        </div>
    </div>

{!! Form::close() !!}
