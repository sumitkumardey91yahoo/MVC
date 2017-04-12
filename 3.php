<?php
   class Books {
      /* Member variables */
      var $price;
      var $title;
      
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
      }
      
      function setTitle($par){
         $this->title = $par;
      }
      
      function getTitle(){
         echo $this->title ." <br/>";
      }
      
   }

   class Novel extends Books {


 function __construct($a,$b,$c)
{
$this->price = $a;


$this->title = $b;
$this->publisher = $c;

}
   var $publisher;
   
   function setPublisher($par){
      $this->publisher = $par;
   }
   
   function getPublisher(){
      echo $this->publisher. "<br />";
   }
}






$obj=new Novel("sumit","aa","bb");

$obj->getPrice();
$obj->getPublisher();
$obj->getTitle();
