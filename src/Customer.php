<?php

namespace Kuncoro;

class Customer {

    public function __construct(private string $name)
    {
    }

    public function sayHelo(string $name = "Guest")
    {
        return "Hello $name, My Name is $this->name";
    }
}