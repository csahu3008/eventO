<?php
    session_start();
    $online = $_SESSION['user'];

    echo "<div class = 'coverlogout'><p>Logout Successfully</p></div>";
            echo"<script>setTimeout(function(){window.location = '../index.php';})</script>";

    session_destroy();
?>