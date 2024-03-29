<?php
class Cart
{
    private array $items = [];

    public $totalPrice = 0;

    // Find product in the cart
    private function findProductById(int $id)
    {
        return $this->items[$id] ?? null;
    }

    // Check if the product is already in the cart then increase the quantity, and if not, add it to the cart
    public function addProduct(Product $product)
    {
        $item = $this->findProductById($product->getId());
        if (!$item) {
            $this->items[$product->getId()] = ['product' => $product, 'quantity' => 1];
        } else {
            $item['quantity']++;
        }
    }

    // Remove a product from the cart
    public function removeProduct(Product $product)
    {
        unset($this->items[$product->getId()]);
    }

    // Update the quantity of a product in the cart
    public function updateToCart(Product $product, int $quantity)
    {
        $item = $this->findProductById($product->getId());
        if ($item) {
            $item['quantity'] = $quantity;
        }
    }

    // Get the total quantity of items in the cart
    public function getTotalQuantity()
    {
        $totalQuantity = 0;
        foreach ($this->items as $item) {
            $totalQuantity += $item['quantity'];
        }
        return $totalQuantity;
    }

    // Get the total price of items in the cart
    public function getTotalPrice()
    {
        global $totalPrice;
        foreach ($this->items as $item) {
            $totalPrice += $item['quantity'] * $item['product']->getPrice();
        }
        return $totalPrice;
    }
    //to display items details
    public function getItems()
    {
        $cartItems = [];

        foreach ($this->items as $item) {
            $product = $item['product'];
            $cartItems[] = $product;
        }

        return $cartItems;
    }




    //finish the purchase ..!!!!!!
    public function emptyCart()
    {
        $this->items = [];

        $this->totalPrice = 0;
    }
}
