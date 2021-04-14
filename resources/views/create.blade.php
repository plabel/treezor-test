@extends('layout')

@section('title', 'Créer Utilisateur')


@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  <form action="{{route('utilisateurs.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="">Nom</label>
      <input class="form-control" required type="text" name="nom" value="">
    </div>
    <div class="mb-3">
      <label for="">Prenom</label>
      <input class="form-control" required type="text" name="prenom" value="">
    </div>
    <div class="mb-3">
      <label for="">Date de naissance</label>
      <input class="form-control" required type="date" name="date_naissance" value="">
    </div>
    <div class="mb-3">
      <label for="">Email</label>
      <input class="form-control" required type="email" name="email" value="">
    </div>
    <div class="mb-3">
      <select  hidden class="form-select" name="actif">
        <option value="1">oui</option>
      </select>
    </div>
    <button class="btn btn-primary" type="submit">envoyer</button>
  </form>
@endsection
