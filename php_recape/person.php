<?php
// var_dump($argv);
class Person {
    public $name;
    public $age;
    public function __construct($name)
    {
        $this->name=$name;       
    }
    public function setAge($age)
    {
        if($age<18)
        {
            exit("your not allowed");
        } 
        $this->age=$age;
    }
    public function getAge()
    {
        return $this->age;    
    }
    public function __toString()
    {
        return $this->name;   
    }
}
$john = new person($argv[1]);
$john -> setAge($argv[2]);

echo "your name ".$john."and your age ".$john->getAge();