<?php

class Cart
{
    private $user;
    private $total = 0;
    private $products = array();

    public function __construct(User $user, float $total, array $products)
    {
        $this->user = $user;
        $this->total = $total;
        $this->products = $products;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function insertProduct(Product $product)
    {
        $this->products[] = $product;
        return $this;
    }
    
    private function saveCartToSession()
    {
        //...
    }

    private function saveCartToCookie()
    {
        $cart = Session::get('cart') ?? '';
        Cookie::set('cart', json_encode($cart), 3600);
    }
}
