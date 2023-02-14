<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
      // récuperer les données du formulaire
      $name = $_POST["name"];
      $email = $_POST["email"];
      $password = $_POST["password"];

      // Valider les données du formulaire
      if (empty($name)) {

         // Définir le message d'erreur si le nom est vide
         $error_message = "Ce champ est obligatoire";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

         // Définir le message d'erreur si l'email n'est pas valide
         $error_message = "Adresse électronique non valide";
        } elseif (strlen($password) < 8) {

         // Définir un message d'erreur si la longueur du mot de passe est inférieure à 8 caractères.
         $error_message = "Le mot de passe doit comporter au moins 8 caractères";
        } else {

         // Définir le message de réussite si tous les contrôles de validation sont passés
         $success_message = "Formulaire soumis avec succès!";
        }
    }
  ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
       <label for="name">Name:</label>
       <input type="text" id="name" name="name" required>
       
       <label for="email">Email:</label>
       <input type="email" id="email" name="email" required>

       <label for="password">Password:</label>
       <input type="password" id="password" name="password" required>

       <input type="submit" value="Submit">
   </form>

   <!-- Afficher le message d'erreur -->
   <?php if (isset($error_message)): ?>

   <p style='couleur : bleu ;'>Error: <?php echo $error_message; ?></p>
   <?php endif; ?>
   
    <!-- Afficher le message de réussite -->
    <?php if (isset($success_message)): ?>
    <p style='couleur : blanc;'><?php echo $success_message; ?></p>
    <?php endif; ?>
</body>
</html>