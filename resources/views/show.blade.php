@extends('layout')

@section('title', 'Vue Utilisateur')


@section('content')
  <table>
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
      <x-utilisateur :utilisateur="$utilisateur" />
    </tbody>
  </table>
@endsection
