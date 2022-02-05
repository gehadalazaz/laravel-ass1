<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //


    public function home(){
        return view ('home');
    }

    public function product(){
        return view ('product');
    }

    public function details(){
        $pro = 
        [[1,"product 1 ","100$"]
        ,[2,'product 2' ,'120$']
        ,[3,'product 3' ,'22$']
        ,[4,'product 4' ,'11$']
        ,[5,'product 5' ,'12$']
        ,[6,'product 6' ,'123$']
        ,[7,'product 7' ,'14$']
        ,[8,'product 8' ,'65$']
        ,[9,'product 9' ,'34$']
        ,[10,'product10' ,'321$']
        ,[11,'product 11' ,'121$']
        ,[12,'product 12' ,'124$']
    ];

       
        return view ('product_details',["products" => $pro ]);
    }
}
