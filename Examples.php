<?php
//1)
  class Books {
    
      public function name() {
          echo "Drupal Book";
      }
      
      public function price() {
          echo "900 Rs/-";
      }
  
  }
  
  //To create php Object we have to use a new operator. Here php object is the object of the Books Class.
  
  $book_obj = new Books();
  $book_obj->name();
  $book_obj->price();
  
//Output : Drupal Book900 Rs/-
//2) 

  class Mobile {
    /* Member Variables */
    var $price;
    var $title;
   
    /* Member functions */
    function setPrice($p) {
      $this->price = $p;
    }
    function getPrice() {
      echo " ($this->price)";
    }
    function setTitle($t) {
      $this->Title = $t;
    }
    function getTitle() {
      echo $this->Title;
    }
    
  }
  $mi = new Mobile();
  $iphone = new Mobile();
  
  $iphone->setPrice(88000);
  $iphone->setTitle(Iphone6s);
  $mi->setPrice(13999);
  $mi->setTitle(Redmi Note 5 Pro);
  
  $iphone->getTitle();
  $iphone->getPrice();
  
  $mi->getTitle();
  $mi->getPrice();
//Output: Iphone6s (88000) RedmiNote5Pro (13999)
?>
