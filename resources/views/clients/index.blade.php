<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion des clients</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="mb-0">Liste des clients</h2>
      <a href="/clients/create" class="btn btn-primary">+ Ajouter un client</a>
    </div>

    <table class="table table-bordered table-striped bg-white">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Email</th>
          <th>Téléphone</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($clients as $client)
        <tr>
          <td>{{ $client->id }}</td>
          <td>{{ $client->nom }}</td>
          <td>{{ $client->prenom }}</td>
          <td>{{ $client->email }}</td>
          <td>{{ $client->telephone }}</td>
          <td>
            <a href="/clients/{{ $client->id }}/edit" class="btn btn-sm btn-warning">Modifier</a>
            <form action="/clients/{{ $client->id }}" method="POST" style="display:inline-block">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ce client ?')">Supprimer</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
