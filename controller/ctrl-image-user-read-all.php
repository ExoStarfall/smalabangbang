<?php
session_start();
if (isset($_SESSION['id'])) {
    include("model/mod-image-user-read-all.php");
    include('model/mod-admin-compte.php');
    include("view/view-image-user-read-all.php");
exit;   
}
?>