<?php
include("./config.php");
try {
    $con = mysqli_connect($host, $login, $senha, $bd);
    $sql = "DELETE FROM Cliente WHERE idCliente=" . $_GET["codigo"];
    mysqli_query($con, $sql);
    } catch (Exception $e) {
}

mysqli_close($con);
header("location: ./index.php");
?>
