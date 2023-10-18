<?php
class Page{
    public function products(){
        //va chercher mes produits
        $products=[
            'brand'=>'Adidas',
            'price'=>42,
            'category'=>'shoes'
        ];
     global $pageData;
     $pageData['products']=$products;
     
     include('./pages/products.php');
    }

    public function cart(){
        echo '<h1> Page Cart </h1>';
    }
    public function homepage(){
        echo '<h1> Page Accueil </h1>';
    }
}