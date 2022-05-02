<?php
function menu() {
$menustr ='<div class="row justify-content-center display-6">';
$menustr .= '<nav class="navbar navbar-expand-lg navbar-light bg-light">';
$menustr .= '<div class="container-fluid">';
$menustr .= '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">';
$menustr .= '<span class="navbar-toggler-icon"></span>';
$menustr .= '</button>';
$menustr .= '<div class="collapse navbar-collapse" id="navbarNav">';
$menustr .= '<ul class="navbar-nav" >';
        
$menustr .= '<li class="nav-item">';
$menustr .= '<a class="nav-link" href="konyvek.php">Könyvek</a>';
$menustr .= '</li>';
$menustr .= '<li class="nav-item">';
$menustr .= '<a class="nav-link" href="olvasok.php">Olvasók</a>';
$menustr .= '</li>';
$menustr .= '<li class="nav-item">';
$menustr .= '<a class="nav-link" href="kolcsonzesek.php">Kölcsönzések</a>';
$menustr .= '</li>';
$menustr .= '</ul>';
$menustr .='</div>';
$menustr .= '</div>';
$menustr .='</nav>'; 
$menustr .= '</div>';
return $menustr;
}
?>