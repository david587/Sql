<?php
include_once('menu.php');
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
<body class="m-0">
<div class="container-fluid bg-secondary m-0">
<div class="row mb-5 pt-5 text-center">   
<div class="row mb-5 pt-5 text-center">   
   <div class="display-2 text-light">Üdvözöljük a könyvtárban</div> 
</div>

<?php
    echo menu();
?>

<div class="row justify-content-center">   
    <div class="col-1"> </div>
    <div class="col-10 justify-content-center"> 
        <img src="books.jpg" class="img-fluid" alt="books">
    </div>
    <div class="col-1"> </div>
</div>

</div>    


</body>
</html>