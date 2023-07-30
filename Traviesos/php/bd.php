<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "traviesos"
);
?>
<?php
    $query = "SELECT COUNT(*) total FROM marcas WHERE catMarca= 1";
    $result = mysqli_query($conn, $query); 
    $row = mysqli_fetch_assoc($result); 
    ?>