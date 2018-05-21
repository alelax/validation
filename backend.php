<?php

    $data = $_POST;

    $username = $data['username'];
    $password = $data['password'];

    if (empty($username) || empty($password)) {
        echo 'Accesso negato';

        return;
    }
    if (strpos($username, '@') === false || strpos($username, '.') === false) {
        echo 'Accesso negato';

        return;
    }
    if (strlen($password) < 5) {
        echo 'Accesso Negato';

        return;
    }

    //array_key_exists || isset (username)
    //in_array (password)
    include 'data.php';

    $availableAccounts = $database['accounts'];

    if (!array_key_exists($username, $availableAccounts)) {
        echo 'Accesso Negato';

        return;
    }

    $accountPassword = $availableAccounts[$username];

    if ($accountPassword !== md5($password)) {
        echo 'Accesso Negato';

        return;
    }

    echo 'Accesso riuscito';

 ?>
