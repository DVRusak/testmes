<?php

class SiteController
{
public function actionIndex(){

    require ('views/index.php');
    return true;
}
public function actionContact(){
    echo "hell";
    return true;
}
}