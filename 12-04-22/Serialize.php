<?php
   class MyClass1 { 
      public $obj1;   
   }
   class MyClass2 {
      public $obj2;
   }
   $ob1 = new MyClass1();
   $ob1->obj1 = 1;
   $ob2 = new MyClass2();
   $ob2->obj2 = 2;


   $serializedObj1 = serialize($ob1);
   $serializedObj2 = serialize($ob2);
   $data = unserialize($serializedObj1 , ["allowed_classes" => true]);


   $data2 = unserialize($serializedObj2 , ["allowed_classes" => ["MyClass1", "MyClass2"]]);


  print($data->obj1);
  print("<br/>");
  print($data2->obj2);
?>
