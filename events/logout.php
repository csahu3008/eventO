<?php
    session_start();
    $online = $_SESSION['user'];

    echo "<div class = 'coverlogout'><p>Logout Successfully</p></div>";
            echo"<script>setTimeout(function(){window.location = 'login.php';},2000)</script>";

    session_destroy();
?>