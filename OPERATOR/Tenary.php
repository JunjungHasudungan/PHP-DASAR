<?php

$gender = false;
// ==
// $jenis_kelamin = ($gender == false) ? "COWO": "CEWE"; // CEWE

// !=
// $jenis_kelamin = ($gender != false) ? "COWO" : "CEWE"; // COWO

// !
$jenis_kelamin = (!$gender) ? "COWO" : "CEWE"; // COWO

echo $jenis_kelamin;