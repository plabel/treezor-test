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
    <input required type="text" name="nom" value="">
    <input required type="text" name="prenom" value="">
    <input required type="email" name="email" value="">
    <input required type="date" name="date_naissance" value="">
    <div>
      <select hidden class="" name="actif">
        <option value="1">oui</option>
      </select>
    </div>
    <button type="submit">envoyer</button>
  </form>
@endsection
