<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <label for="num1">Nombre 1:</label>
  <input type="text" id="num1" name="num1">
  
  <label for="num2">Nombre 2:</label>
  <input type="text" id="num2" name="num2">
  
  <input type="submit" value="Submit">
</form>

<!-- Code PHP pour additionner les deux chiffres -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtenez les valeurs des deux nombres du formulaire
  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  
  $result = $num1 + $num2;
}
?>

<h3>Result: <?php echo $result; ?></h3>

</body>
</html>