<?php 
/*
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche: - L’e-commerce vende 

 **prodotti** per animali.
 - I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
 - I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.

  Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
*/

class Product {
  public $name;
  public $brand;
  public $price;

public function __construct($_name, $_price){
  $this->name = $_name;
  $this->price = $_price;
}
};

class Category extends Product {
  public $category;

  public function __construct($_marca, $_prezzo, $_category){
    parent::__construct($_marca, $_prezzo);
    $this->category = $_category;
  }
};

class Food extends Category {
  public static $type = 'food';
  public $food_type;
  public $wheight;

  public function __construct($_marca, $_prezzo, $_category, $_food_type){
    parent::__construct($_marca, $_prezzo, $_category);
    $this->food_type = $_food_type;
  }
};

class Game extends Category {
  public static $type = 'game';
  public $game_type;

  public function __construct($_marca, $_prezzo, $_category, $_game_type){
    parent::__construct($_marca, $_prezzo, $_category);
    $this->game_type = $_game_type;
  }
};

class Sit extends Category {
  public static $type = 'sit';
  public $sit_type;

  public function __construct($_marca, $_prezzo, $_category, $_sit_type){
    parent::__construct($_marca, $_prezzo, $_category);
    $this->sit_type = $_sit_type;
  }
};


?>