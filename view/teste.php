<?php
    require('../controller/getSession.php');

    var_dump($_SESSION['logged']);

    echo "<a href='../controller/endSession.php'>Sair<a>";