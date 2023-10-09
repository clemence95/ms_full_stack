<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Inscription</h1>
        <form class="row g-3" action="traitement_inscription.php" method="post">
            <div class="col-md-6">
                <label for="nom_client" class="form-label">Nom complet</label>
                <input type="text" class="form-control" id="nom_client" name="nom_client" required>
            </div>
            <div class="col-md-6">
                <label for="email_client" class="form-label">Adresse e-mail</label>
                <input type="email" class="form-control" id="email_client" name="email_client" required>
            </div>
            <div class="col-12">
                <label for="adresse_client" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adresse_client" name="adresse_client" required>
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="col-md-6">
                <label for="confirm_password" class="form-label">Confirmez le mot de passe</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">S'inscrire</button>
            </div>
        </form>
    </div>
</body>

</html>
