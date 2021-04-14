@extends('layout')

@section('title', 'Lister Utilisateurs')


@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th>nom</th>
      <th>prenom</th>
      <th>email</th>
      <th>date de naissance</th>
      <th>actif</th>
      <th>*editer</th>
      <th>*voir</th>
      <th>*supprimer</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($utilisateurs as $utilisateur)
      <x-utilisateur :utilisateur="$utilisateur" />
    @endforeach
  </tbody>
</table>
@endsection
