<?php

    include "../classes/Users.php";

    # INSTANTIATE AN OBJECT
    $user = new User;

    # CALL THE METHOD
    $user->store($_POST);
?>