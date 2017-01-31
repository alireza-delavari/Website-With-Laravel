<?php
/**
 * Created by PhpStorm.
 * User: alireza
 * Date: 1/26/17
 * Time: 12:00 PM
 */

namespace App\Http\Controllers;


class productsController extends Controller
{
    function __construct()
    {
        $this->middleware('guest');
    }

    function index(){

        $product1["image"]="/img/gallery1/(1).jpg";
        $product1["description"]="d1";
        $product2["image"]="/img/gallery1/(2).jpg";
        $product2["description"]="d2";
        $product3["image"]="/img/gallery1/(3).jpg";
        $product3["description"]="<h4>محصول شماره 3</h4>
                    <p>اطلاعات و توضیحات محصول شماره 3 اطلاعات و توضیحات محصول شماره 3 اطلاعات و 
توضیحات محصول شماره 3 اطلاعات و توضیحات محصول شماره 3.<br>اطلاعات و توضیحات محصول شماره 3                   
اطلاعات و توضیحات محصول شماره 3اطلاعات و توضیحات محصول شماره 3                  
                </p>";

        $products=array($product1,$product2,$product3,$product1,$product2);
        $products[]=$product3;

        $data["products"]=$products;
        return view('products',$data);
    }
}