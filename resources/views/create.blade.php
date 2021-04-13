<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Créer Utilisateur</title>
  </head>
  <body>
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
      <label for="actif">Actif</label>
      <select class="" name="actif">
        <option value="0">non</option>
        <option value="1">oui</option>
      </select>
    </div>
    <button type="submit">envoyer</button>
  </form>
  </body>
</html>
