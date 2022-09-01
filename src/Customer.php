<?php 
namespace riskihia\belajar;

class customer{
    public function __construct(private string $name)
    {
        
    }

    public function sayHello(string $name):string{
        return "hello $name, my name is $this->name";
    }
}