<?php
   class Foo {
      public static $my_static = 'foo';
      
      public function staticValue() {
         return self::$my_static;
      }
   }
	
  
   $foo = new Foo();
   
   print $foo->staticValue() . "\n";
?>	