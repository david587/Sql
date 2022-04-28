<?php
//Kapcsolódás Adatbázishoz
$con = new mysqli("localhost","kek","titok","kek");

if($con->connect_error){
    die("Hiba! A kapcsolódás sikertelen");
}
//echo "ok";

$sql = <<<EOT
select * from dolgozok
EOT;

if($result = $con->query($sql)){//eltároljuk az adatokat,megnézzük hogy jó e az sql utasítás
   // echo"lekeres ok";
} else{
    echo "nme ok";
}

echo "<table>";
while($row = $result->fetch_assoc()){ //fetch ->kiszedjük az adatok belőle->miylen módón->1sor 1 row
    echo "<tr>";
    echo "<td>". $row["az"]. "</td>";
    echo "<td>". $row["nev"]. "</td>";
    echo "<td>". $row["telepules"]. "</td>";
    echo "<td>". $row["fizetes"]. "</td>";
    echo "</tr>";
}
echo "</table>";

$con->close();