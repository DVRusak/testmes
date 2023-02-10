<?php

class UserModel
{

    public static function AddUser($login, $pass){

        $db = Db::GetConnection();

        $sql = "INSERT INTO `users` (`login`,`pass`) VALUES ('$login','$pass')";

        $db ->query($sql);

    }

    public static function CheckUser($login, $pass){

        $db = Db::GetConnection();

        $sql = "SELECT * FROM `users`";

        $users_list = $db -> query($sql) -> fetch_all(MYSQLI_ASSOC);

        foreach ($users_list as $user){
            if ($user['login'] == $login and $user['pass'] == $pass){
                return 1;
            }
        }
        return 0;

    }

}