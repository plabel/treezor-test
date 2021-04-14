@extends('layout')

@section('title', 'Editer Utilisateur')


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
  <form action="{{route('utilisateurs.update',$utilisateur->id)}}" method="POST">
    @method('PATCH')
    @csrf
    <div class="mb-3">
      <label for="">Nom</label>
      <input class="form-control" type="text" name="nom" value="{{$utilisateur->nom}}">
    </div>
    <div class="mb-3">
      <label for="">Prenom</label>
      <input class="form-control" type="text" name="prenom" value="{{$utilisateur->prenom}}">
    </div>
    <div class="mb-3">
      <label for="">Email</label>
      <input class="form-control" type="email" name="email" value="{{$utilisateur->email}}">
    </div>
    <div class="mb-3">
      <label for="">Date de naissance</label>
      <input class="form-control" type="date" name="date_naissance" value="{{$utilisateur->date_naissance}}">
    </div>

    <button class="btn btn-primary" type="submit">envoyer</button>
  </form>
@endsection
