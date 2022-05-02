<?php
include_once('menu.php');
include_once('db_fuggvenyek.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Könytár</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="m-0 bg-secondary">
<div class="container-fluid bg-secondary m-0">
<div class="row mb-5 pt-5 text-center">   
<div class="row mb-5 pt-5 text-center">   
   <div class="display-2 text-light">Üdvözöljük a könyvtárban</div> 
</div>

<?php
    echo menu();
?>
<div class="row">
<form action="konyvfelvitel.php" method="get">
<div class="form-floating mb-3">
<input type="text" class="form-control" id="konyvszam" name ="konyvszam">
<label for="konyvszam">Könyvszám</label>

<div class="form-floating mb-3">
<input type="text" class="form-control" id="cim" name ="cim">
<label for="cim">Cím</label>

<div class="form-floating mb-3">
<input type="text" class="form-control" id="kiado" name ="kiado">
<label for="kiado">Kiadó</label>

<div class="form-floating mb-3">
<input type="text" class="form-control" id="szerzo" name ="szerzo">
<label for="szerzo">Szerző</label>

<div class="form-floating mb-3">
<input type="text" class="form-control" id="ev" name ="ev">
<label for="ev">Év</label>




    <div class="row text-start pb-1"></div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Elküld</button>
    </div>


</div>
</form>

<?php
    $konyvek=konyvlistaLeker();
    while ($sor =mysqli_fetch_assoc($konyvek))
    {
?>
<div class="row py-2 text-light">

    <div class="col-2">
        <?php print $sor["konyvszam"]; ?>
    </div>

    <div class="col-2">
        <?php print $sor["cim"]; ?>
    </div>

    <div class="col-2">
        <?php print $sor["szerzo"]; ?>
    </div>

    <div class="col-2">
        <?php print $sor["kiado"]; ?>
    </div>
    <div class="col-2">
        <?php print $sor["ev"]; ?>
    </div>
    <div class="col-1">
       <a href="#">Módosítás</a>
    </div>
    <div class="col-1">
    <a href="#">Törlés</a>
    </div>
</div>

<?php     
    }
    mysqli_free_result($konyvek);
?>

</body>
</html>