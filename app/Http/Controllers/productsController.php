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
        $product1["id"]="1";

        $product2["image"]="/img/gallery1/(2).jpg";
        $product2["description"]="d2";
        $product2["id"]="2";

        $product3["image"]="/img/gallery1/(3).jpg";
        $product3["description"]="<h4>محصول شماره 3</h4>
                    <p>اطلاعات و توضیحات محصول شماره 3 اطلاعات و توضیحات محصول شماره 3 اطلاعات و 
توضیحات محصول شماره 3 اطلاعات و توضیحات محصول شماره 3.<br>اطلاعات و توضیحات محصول شماره 3                   
اطلاعات و توضیحات محصول شماره 3اطلاعات و توضیحات محصول شماره 3                  
                </p>";
        $product3["id"]="3";

        $products=array($product1,$product2,$product3,$product1,$product2);
        $products[]=$product3;//another way to add item to array

        $data["products"]=$products;
        return view('products',$data);
    }

    function showProduct($id){

        $data['productId'] = $id;
        $data['image'] = "/img/gallery1/($id).jpg";
        $data['description']="description $id";
        return view('showProduct', $data);
    }
}