<?php

$a = "hello";
$hello = "Hello World!";

// menampilkan isi variabel $a
// hello
echo $a . "</br>";

// menampilkan isi variabel $hello
// Hello World!
echo $hello . "</br>";

// menampilkan isi dari variabel dengan nama yang sama seperti isi variabel $a
// isi variabel $a = hello. jadi, nanti akan menampilkan isi dari variabel
// $hello
// Hello World
echo $$a . "</br>";

?>