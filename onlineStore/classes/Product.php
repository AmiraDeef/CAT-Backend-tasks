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
    private $variants = [];

    public function __construct(int $id, string $name, float $price, string $image)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    // Setters and getters for attributes

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

    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    // Setters and getters for category

    public function addToCategory(Category $category)
    {
        $this->category = $category->getName();
    }

    public function getCategory()
    {
        return $this->category;
    }

    // Get instance from Cart

    public function setCart(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function getCart()
    {
        return $this->cart;
    }

    // Getter for quantity

    public function getQuantity()
    {
        return $this->quantity;
    }

    // Increase quantity and reflect on cart

    public function increaseQuantity()
    {
        $this->quantity++;
        if ($this->cart) {
            $this->cart->updateToCart($this, $this->quantity);
        }
    }

    // Decrease quantity and reflect on cart

    public function decreaseQuantity(int $quantity)
    {
        if ($this->quantity >= $quantity) {
            $this->quantity -= $quantity;
        }
        if ($this->cart) {
            $this->cart->updateToCart($this, $this->quantity);
        }
    }

    // Getter for variants

    public function getVariants()
    {
        return $this->variants;
    }

    // Adding variant to product

    public function addVariant(Variant $variant)
    {
        $this->variants[] = $variant;
    }
}
