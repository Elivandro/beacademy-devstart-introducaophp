<?php

    $senha = "123456";
    $code = password_hash($senha, PASSWORD_ARGON2I);


    echo password_hash($senha, PASSWORD_ARGON2I).PHP_EOL;

    echo $code;