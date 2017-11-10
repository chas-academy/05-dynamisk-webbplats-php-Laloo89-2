<?php
    echo '<pre>';
        print_r($this->request->getPath());
    echo '</pre>';
    echo '<pre>';
        print_r($params);
    echo '</pre>';

    include_once("../templates/createpost.html");
    include_once("admins.php");

    ?>
