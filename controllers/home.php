<?php
include '../models/user.php';
$users = getAllUsers();
// var_dump($users);
include '../views/home.php';

