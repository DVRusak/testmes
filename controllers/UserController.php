<?php

class UserController
{

    public function actionRegister(){


        require ('views/register.php');
        return true;
    }

    public function actionLogin(){

        if ((isset($_POST['login']) and isset($_POST['pass']) and $_POST['login'] != null and $_POST['pass'] != null)){

            $login = $_POST ['login'];
            $pass = $_POST['pass'];
            UserModel::AddUser($login, $pass);

            require ('views/login.php');
        }
        else if (count($_POST) == 0){

            require ('views/login.php');
        }

        else{

            echo "Похоже, что-то пошло не так";
            require ('views/register.php');
        }

        return true;
    }

}