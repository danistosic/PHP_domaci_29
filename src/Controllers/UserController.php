<?php

namespace PHP_COMPOSER28\Controllers;

use PHP_COMPOSER28\Models\User;
use PHP_COMPOSER28\Services\SessionService;

class UserController extends SessionService {
    public function login(array $data)
    {
        if(!isset($data['username'])) {
            die("Niste proslijedili username");
        }

        if(!isset($data['password'])) {
            die("Niste proslijedili sifru");
        }

        $userModel = new User();
        if(!$userModel->userExists($data['username'])) {
            die("Ovaj korisnik ne postoji!");
        }

        $user = $userModel->getUserByUsername($data['username']);

        if(!password_verify($data['password'], $user['password'])) {
            die("Sifre se ne podudaraju!");
        }

        $this->setSession('user_id', $user['id'])
             ->setSession('loggedIn', true);

        
    }

     public function register(array $data): void
    {
        if(!isset($data['username'])) {
            die("Niste prosliedili username");
        }

        $userModel = new User();
        if($userModel->userExists($data['username'])) {
            die("Ovaj korisnik vec postoji!");
        }

        if(!isset($data['password']) || !isset($data['confirm_password'])) {
            die("Niste prosliedili sifru");
        }

        if($data['password'] !== $data['confirm_password']) {
            die("Sifre se ne podudaraju");
        }

        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        
        
        $userModel->addNewUser($data['username'], $password);
    }
}








