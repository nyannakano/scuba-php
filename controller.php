<?php

require_once 'view.php';

function do_register(){
    render_view('register');
}

function do_login(){
    render_view('login');
}

function do_not_found(){
    render_view('not_found');
}

function do_forget_password(){
    render_view('forget_password');
}