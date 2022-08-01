<?php
    session_start();
    echo 'Welcome, '.$_SESSION["firstname"].' '.$_SESSION["lastname"];
?>