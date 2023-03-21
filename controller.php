<?php

require_once 'view.php';
require_once 'crud.php';

function do_register(){
    if($_POST) {
        $form = $_POST['person'];
        $data = [
            'name' => $form['name'],
            'email' => $form['email'],
            'password' => $form['password'],
        ];
        crud_create($data);
    } else {
        render_view('register');
    }
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

function create_user(){

}