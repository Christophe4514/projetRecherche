@extends('layouts.client')

@section('title')
    Creer un Orateur
@endsection

@section('content')
    {{-- {!! Form::open(['route' => 'newOrateur', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} --}}
    <form action="{{ url('newOrateur') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <h4 class="text-center text-success">Créer un orateur</h4>
            <div class="mb-3">
                <label for="name" class="form-control">Nom</label>
                <input type="text" class="form-control" name="name" placeholder="Le Nom">
            </div>
            <div class="mb-3">
                <label for="postnom" class="form-label">Postnom</label>
                <input type="text" class="form-control" name="postnom" placeholder="Le Postnom">
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" name="prenom" placeholder="Le Prénom">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Mail</label>
                <input type="email" class="form-control" name="email" placeholder="Votre Mail">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Le Mot de Passe">
            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="confirm-password" placeholder="Confirmer Le Mot de Passe">
            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Grade</label>
                <select name="grade" id="grade" class="form-controle" placeholder="Selectionner le grade">
                    @foreach ($grades as $item)
                        <option value="{{ $item }}">{{ $item }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Photo</label>
                <input class="form-control" type="file" id="formFile" name="photo">
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
              </div>
        </div>
    </form>
@endsection
