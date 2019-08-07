<?php

//prepared statement
require_once 'kapcsolat.php';

$kapcs = mysqli_connect(HOST, USER, PW, AB) or die ("Sikertelen kapcsolódás");

$stmt = mysqli_prepare($kapcs, "INSERT INTO befiz (azon, datum, osszeg) VALUES (?, ?, ?);");
mysqli_stmt_bind_param($stmt, 'iss', $azon, $datum, $osszeg);

$azon = 1005;
$datum = "2016-02-04 11:47:08";
$osszeg = 5000;
mysqli_stmt_execute($stmt);

$azon = 1004;
$datum = "2016-02-05 11:47:08";
$osszeg = 3000;
mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);
mysqli_close($kapcs);


