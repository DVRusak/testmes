<?php

class ProductController
{
public function actionView($id){
$vv=ProductModel::getProductById($id);

    require_once ("views/showProduct.php");
    return true;
}
}