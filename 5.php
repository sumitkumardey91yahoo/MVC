<?php
// main class that everything inherits
class Grandpa 
{
    public function __construct(){
        $this->GrandpaSetup(1,2);
    }

    public function GrandpaSetup($a,$b){
        $this->prop1 = $a;
        $this->prop2 = $b;
    }
}

class Papa extends Grandpa
{
    public function __construct()
    {
        // call Grandpa's constructor
       parent::__construct();
        $this->GrandpaSetup(10,12);
    }

}
class Kiddo extends Papa
{
    public function __construct()
    {
        $this->GrandpaSetup(3,4);
    }
}

$kid = new Kiddo();
echo "{$kid->prop1}\n{$kid->prop2}\n";