<?php

class CabinetController
{
    public function actionIndex(){

        if ((isset($_POST['login']) and isset($_POST['pass']) and $_POST['login'] != null and $_POST['pass'] != null) or count($_POST) == 0){

            $login = $_POST ['login'];
            $pass = $_POST['pass'];
            $check_res = UserModel::CheckUser($login, $pass);
            if ($check_res == 1){

                $user_list = Db::GetUserList();
                require ('views/cabinet.php');
            }
            else {
                echo "Похоже, таких данных нет в нашей базе";
                require ('views/login.php');
            }


        }

        else{

            echo "Похоже, что-то пошло не так";
            require ('views/login.php');
        }



        return true;
    }

}