<?php

// Versione senza tabella utenti
const ADMIN_EMAIL = 'admin@ped.academy';
const ADMIN_PASSWORD_HASH = '$2y$12$X8oiIDcFef1UdBpSxEZhJO.tO05Ts7BZnMY6Ehsd8EjMTN9O5Z8XW'; //admin


function loginUser($email, $password)
{
    if ($email === ADMIN_EMAIL) {
        if (password_verify($password, ADMIN_PASSWORD_HASH)) {
            $_SESSION['loggedUser'] =
                [ 'name' => 'admin',
                  'email' => $email,
                ];

            return true;
        }
    }
    return false;
}
