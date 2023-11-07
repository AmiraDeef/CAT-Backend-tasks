<?php
class Variant
{

    private $properties = [];

    public function __construct(array $properties)
    {
        $this->properties = $properties;
    }
    //to get value of specific property
    public function getProperties($name)
    {
        return $this->properties[$name];
    }
    //set property with name and value 
    public function setProperties($name, $value)
    {
        $this->properties[$name] = $value;
    }
}
