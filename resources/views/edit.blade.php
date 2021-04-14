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
    <input  type="text" name="nom" value="{{$utilisateur->nom}}">
    <input  type="text" name="prenom" value="{{$utilisateur->prenom}}">
    <input  type="email" name="email" value="{{$utilisateur->email}}">
    <input  type="date" name="date_naissance" value="{{$utilisateur->date_naissance}}">

    <button type="submit">envoyer</button>
  </form>
@endsection
