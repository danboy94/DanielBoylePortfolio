<?php
require_once 'includes/header.php';
?>

<?php

    if (isset($_SESSION['sessionId'])) {
        echo "you are logged in!";
    } else {
        echo "home";
    }

?>

<?php
require_once 'includes/footer.php';
?>