<?php
class Category
{
    private $name;
    private $variants = [];
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function addProduct(Product $product)
    {
        $product->addToCategory($this);
        //$this->name = $product->getCategory();

    }
    public function addVariant(Variant $variant)
    {
        $this->variants[] = $variant;
    }
    public function getVariants()
    {
        return $this->variants;
    }
}
