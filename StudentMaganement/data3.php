<?php
    session_start();
    if (isset($_SESSION["lastname"])){
        //echo "Session checked";

        session_destroy();
    }
?>

