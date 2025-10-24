<?php
    include 'header.inc';
    session_start();
    if(isset($_SESSION['user'])){
        echo "Welcome, " .$_SESSION['user'];
    } else {
        heaader('Location: login.html');
    }
    include 'footer.inc';
?>