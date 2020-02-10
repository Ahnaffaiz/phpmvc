<?php 
//teknik bootsraping : memanggil satu file yang akan memnggil file lainnya

if(!session_id()) {
    session_start();
}; 

require_once '../app/init.php';

$App = new App();