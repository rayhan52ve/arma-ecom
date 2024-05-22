<?php
function cardArray()
{
    $cartCollection = \Gloudemans\Shoppingcart\Facades\Cart::content(); 
    return $cartCollection->toArray();
}
