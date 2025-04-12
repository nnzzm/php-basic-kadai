<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  class Food{
    public $name;
    public $price;
    public function show_price(){
      echo $this->price;
    }
    public function __construct($name, $price){
      $this->name = $name;
      $this->price = $price;
    }
  }

  class Animal{
    public $name;
    public $weight;
    public $height;
    public function show_height(){
      echo $this->height;
    }
    public function __construct($name, $weight, $height){
      $this->name = $name;
      $this->weight = $weight;
      $this->height = $height;
    }
  }

  $food = new Food("potato", 250);
  $animal = new Animal("dog", 60, 5000);
  print_r($food);
  echo "<br>";
  print_r($animal);
  echo "<br>";
  echo $food->price;
  echo "<br>";
  echo $animal->weight;

  ?>
</body>
</html>