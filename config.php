<?php

$server = "sql102.smk9smg.my.id";
$user = "smk9s_34586289";
$password = "454545";
$nama_database = "smk9s_34586289_skul";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>