<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheDestrit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lugrasimo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <nav>
        <?php include './assets/php/nav.php'; ?>
    </nav>
    <?php include './assets/php/banner.php'; ?>

    <form class="row g-3" action="./assets//php//traitement_contacte.php" method="post" onsubmit="return validerFormulaire();">
        <div class="col-md-4 mb-4">
            <input type="text" class="form-control" placeholder="Prénom" aria-label="prénom" name="prenom" id="prenom" >
            <span id="prenom_error"></span>
            <div class="invalid-feedback">
                 Saisir votre Prénom
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <input type="text" class="form-control" placeholder="Nom" aria-label="nom" name="nom" id="nom" >
            <span id="nom_error"></span>
            <div class="invalid-feedback">
                Vous devez saisir votre Nom
            </div>
        </div>
        <div class="col-md-5 mb-4">
            <input type="email" class="form-control" placeholder="Email" name="email" id="email" >
            <span id="mail_error"></span>
            <div class="invalid-feedback">
                Saisir une adresse email valide
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <input type="tel" class="form-control" placeholder="Téléphone" name="telephone" id="telephone" >
            <span id="telephone_error"></span>
            <div class="invalid-feedback">
                Saisir votre numéro de téléphone
            </div>
        </div>
        <div class="col-md-10 mb-4">
            <textarea class="form-control" placeholder="Votre demande" id=demande name="demande" id="floatingTextarea2" style="height: 100px" ></textarea>
            <div class="invalid-feedback">
                Saisir votre demande
            </div>
        </div>
        <div class="col-md-10">
            <button type="submit" class="btn btn-primary" id="valide">Valider</button>
        </div>
    </form>
    <script>
    function validerFormulaire() {
      const prenom = document.getElementById("prenom").value;
      const nom = document.getElementById("nom").value;
      const email = document.getElementById("email").value;
      const telephone = document.getElementById("telephone").value;
      const demande = document.getElementById("demande").value;
      var regexEmail = /\S+@\S+\.\S+/;
      if(prenom.length <1){
        alert("veuillez mettre un prenom");
        return false;
      }
      if(nom.length <1){
        alert("veuillez mettre un nom");
        return false;
      }
      if (!regexEmail.test(email)) {
        alert("L'e-mail doit comporter au moins le caractère @. (obligatoire!)");
        return false;
      }
      if (telephone.length != 10 ) {
        alert("veuillez mettre un tel");
        return false;
      }
      if (demande.length <1){
        alert("veuillez mettre une demande");
        return false;
      }
      return true;
    }
      </script>
    <footer>
        <?php include './assets/php/footer.php'; ?>
    </footer>
      <script src="./assets//js//script.js"></script>  
</body>

</html>