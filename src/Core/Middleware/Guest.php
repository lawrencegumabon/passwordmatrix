<?php

namespace Core\Middleware;


// dd($_SESSION);

class Guest
{
    public function handle()
    {
        // IF LOGGED IN AND NAG REDIRECT SA REGISTER BBALIK LNAG SA /PROFILE
        if (isset($_SESSION['user'])) {
            header('location: /profile');
            exit();
        } elseif (isset($_SESSION['owner'])) {
            header('location: /owner-profile');
            exit();
        }
        // elseif ($_SESSION['owner'] ?? false) {
        //     header('location: /owner-profile');
        //     exit();
        // }
    }
}
