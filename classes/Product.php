<?php
class Product
{
    private $id;
    private $name;
    private $price;
    private $image;
    private $category;
    private $quantity = 1;
    private $cart;

    public function __construct(int $id, string $name, float $price, string $image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    //setter and getters for attributs
    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getImage(): string
    {
        return $this->image;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function setprice(int $price)
    {
        $this->price = $price;
    }
    public function setImage(string $image)
    {
        $this->image = $image;
    }
    //getter and setter for category
    public function addCategory(Category $category)
    {
        $this->category = $category;
    }
    public function getCategory()
    {
        return $this->category;
    }

    //get instance from Cart
    public function setCart(Cart $cart)
    {
        $this->cart = $cart;
    }

    //getter of quantity
    public function getQuantity()
    {
        return $this->quantity;
    }
    //increase quantity and reflect on cart
    public function increaseQuantity()
    {
        $this->quantity++;
        if ($this->cart) {
            $this->cart->updateToCart($this, $this->quantity);
        }
    }
    //decrease quantity and reflect on cart
    public function decreaseQuantity(int $quantity)
    {
        if ($this->quantity >= $quantity) {
            $this->quantity -= $quantity;
        }
        if ($this->cart) {
            $this->cart->updateToCart($this, $this->quantity);
        }
    }

    public function addToCart(Cart $cart, $quantity)
    {
    }



    // public function displayAllProperties()
    // {
    //     foreach ($this as $key => $value) {
    //         echo "$key: $value\n";
    //     }
    // }



}
