<?php

class ShoppingCartItem {
    private $product;
    private $quantity;

    public function setProduct($id, $title, $price){
        $this->product = new Product($id, $title, $price);
    }
    public function setQuantity($amount){
        if (isset($amount) && !empty($amount) && is_numeric($amount) && $amount>0){
            $this->quantity = $amount;
        }
    }

    public function getProduct(){
        return $this->product;
    }
    public function getQuantity(){
        return $this->quantity;
    }
}

class ShoppingCart extends ShoppingCartItem {
    private $cartItems = [];

    public function setCartItems(){
        $this->cartItems[] = json_decode(json_encode(getProduct()));
    }
    public function getCartItems(){
        return $this->cartItems;
    }

    public function addToCart($product, $quantity = 1){
        $cartItems = getCartItems();
        foreach ($cartItems as $value){
            if ($value['id'] == $product){
                $quantity = getQuantity() + $quantity;
            } else {
                setCartItems();
                setQuantity($quantity);
            }
        }
    }

    public function removeFromCart($product){
        $cartItems = getCartItems();
        foreach ($cartItems as $value){
            if ($value['id'] == $product){
                unset($cartItms[$value]);
            }
        }
    }
}
?>