<?php
if(isset($_GET['ar'])){
    require("connect.php");
    $azon = (int)$_GET['ar'];
    //print_r($azon);
    $sql = "SELECT * FROM kategoria
             WHERE ar = {$azon}";
          $eredmeny = mysqli_query($dbconn, $sql);
             $sor = mysqli_fetch_assoc($eredmeny);
             var_dump($sor);

             $ar = $sor['ar'];
             $nev = $sor['nev'];
             
 }



?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form method="post">
    <input type="hidden" id="ar" name="ar" value="<?php print $ar;?>">

    <p>
        <label for="ar">Ár:</label>
        <input type="number" name="ar" id="ar" value="<?php print $ar;?>">

    </p>

    <p>
        <label for="nev">Név:</label>
        <input type="text" name="nev" id="nev" value="<?php print $nev;?>">
        
    </p>

    <input type="submit" name="rendben" id="rendben" value="rendben">
    <input type="reset" value="Mégse">
    <p><a href="pizza.php">Vissza a Pizzakhoz!</a></p>
  </form>
</body>
</html>