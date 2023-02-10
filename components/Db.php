<?php

class Db
{

    public static function GetConnection(){

        $db = mysqli_connect('localhost', 'root', '', 'Mess');
        return $db;
    }

    public static function GetUserList(){

        $db = self::GetConnection();
        $sql = "SELECT `login` FROM `users`";
        $user_list = $db -> query($sql) -> fetch_all(MYSQLI_ASSOC);

        return $user_list;

    }

}