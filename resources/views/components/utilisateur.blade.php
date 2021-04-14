  <tr>
    <td>{{$utilisateur->nom}}</td>
    <td>{{$utilisateur->prenom}}</td>
    <td>{{$utilisateur->email}}</td>
    <td>{{$utilisateur->date_naissance}}</td>
    <td>{{$utilisateur->actif}}</td>
    <td><a href="{{route('utilisateurs.edit',$utilisateur->id)}}">editer</a></td>
    <td><a href="{{route('utilisateurs.show',$utilisateur->id)}}">voir</a></td>
    <td>
    @if($utilisateur->actif === 1)
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal{{$utilisateur->id}}">
        supprimer
      </button>
    @endif
      <!-- Modal -->
      <div class="modal fade" id="modal{{$utilisateur->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Confirmation de suppression</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Veuillez confirmer la suppression de l'utilisateur {{$utilisateur->nom}} {{$utilisateur->prenom}}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <form class="" action="{{route('utilisateurs.destroy',$utilisateur->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit" name="button">supprimer</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </td>
  </tr>
