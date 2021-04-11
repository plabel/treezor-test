<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <form action="{{route('utilisateurs.store')}}" method="post">
    @csrf
    <input required type="text" name="nom" value="">
    <input required type="text" name="prenom" value="">
    <input required type="date" name="date_naissance" value="">
    <div>
      <input required type="checkbox" id="actif" name="actif">
      <label for="actif">Actif</label>
    </div>
    <button type="submit">envoyer</button>
  </form>
  </body>
</html>
