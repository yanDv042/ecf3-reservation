<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modifier le client</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <h2 class="mb-4">Modifier le client</h2>

    <form action="/clients/{{ $client->id }}" method="POST" class="bg-white p-4 rounded shadow-sm">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" name="nom" class="form-control" value="{{ $client->nom }}" required>
      </div>

      <div class="mb-3">
        <label for="prenom" class="form-label">Prénom</label>
        <input type="text" name="prenom" class="form-control" value="{{ $client->prenom }}" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ $client->email }}" required>
      </div>

      <div class="mb-3">
        <label for="telephone" class="form-label">Téléphone</label>
        <input type="text" name="telephone" class="form-control" value="{{ $client->telephone }}">
      </div>

      <button type="submit" class="btn btn-success">Mettre à jour</button>
      <a href="/clients" class="btn btn-secondary">Annuler</a>
    </form>
  </div>
</body>
</html>
