<?php
session_start();
$errors = [];

function getUsersData() {
    $usersData = json_decode(file_get_contents(__DIR__ . '/login.json'), true);
    if (!$usersData) {
        return [];
    }
    return $usersData;
}

function getUserData($login) {
    $users = getUsersData();
    foreach ($users as $user) {
        if ($user['login'] == $login) {
           return $user;
        }
    }
    return null;
}

function isAutorizedUser() {
    return !empty($_SESSION['user']);
};
