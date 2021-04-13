  <tr>
    <td>{{$utilisateur->nom}}</td>
    <td>{{$utilisateur->prenom}}</td>
    <td>{{$utilisateur->email}}</td>
    <td>{{$utilisateur->date_naissance}}</td>
    <td>{{$utilisateur->actif}}</td>
    <td><a href="{{route('utilisateurs.edit',$utilisateur->id)}}">editer</a></td>
    <td><a href="{{route('utilisateurs.show',$utilisateur->id)}}">voir</a></td>
    <td>
      <form class="" action="{{route('utilisateurs.destroy',$utilisateur->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" name="button">supprimer</button>
      </form>
    </td>
  </tr>
