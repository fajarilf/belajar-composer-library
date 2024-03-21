<?php

namespace ArgekPeople\Belajar;

class Customer
{
    public function __construct(private string $name)
    {

    }

    public function sayHello(string $name = "guess"): string
    {
        return "Hello customer $name, my name is $this->name";
    }
}