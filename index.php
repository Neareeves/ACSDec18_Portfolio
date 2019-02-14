<?php

ini_set('display_errors',1);
if(isset($_GET['page']) && !empty($_GET['page'])) {
    $page = $_GET['page'];
}
else {
    $page = 'Home'; 
}

$page = ucfirst($page); 


include('Controllers/'.$page.'Controller.php');