<?php

require_once 'controller.php';

$page = ($_GET['page']??'login');

switch ($page) {
    case 'register':
        do_register();
        break;
    case 'login':
        do_login();
        break;
    case 'forget_password':
        do_forget_password();
        break;
    default:
        do_not_found();
        break;
}