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
    public function addVariant(Variant $variant)
    {
        $this->variants[] = $variant;
    }
    public function getVariants()
    {
        return $this->variants;
    }
}
