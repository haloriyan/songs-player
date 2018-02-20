<?php

$judul = $_POST['judul'];
setcookie('judul', $judul, time() + 3600, "/");

?>