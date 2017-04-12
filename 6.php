<?php
class Grandpa 
{
    public function __construct()
    {
        echo "Grandpa's constructor called \n";
        
    }

}

class Papa extends Grandpa
{
    public function __construct()
    {
        echo "Papa's constructor called \n";

        // call Grandpa's constructor
        parent::__construct();
    }
}




$papa = new Papa();