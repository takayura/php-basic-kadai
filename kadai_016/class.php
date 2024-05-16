<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>課題_016</title>
</head>

<body>
  <p>
    <?php

    // Foodクラスの定義
    class Food
    {
      private $name;
      private $price;

      // コンストラクタ
      public function __construct($name, $price)
      {
        $this->name = $name;
        $this->price = $price;
      }

      // priceプロパティの値を表示するメソッド
      public function show_price()
      {
        echo $this->price . '<br>';
      }
    }

    // Animalクラスの定義
    class Animal
    {
      private $name;
      private $height;
      private $weight;

      // コンストラクタ
      public function __construct($name, $height, $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // heightプロパティの値を表示するメソッド
      public function show_height()
      {
        echo $this->height . '<br>';
      }
    }

    // Foodクラスのインスタンスを作成し、出力する
    $food = new Food('potato', 250);
    print_r($food);

    // Animalクラスのインスタンスを作成し、出力する
    $animal = new Animal('dog', 60, 5000);
    print_r($animal);

    // Foodクラスのメソッドにアクセスし、実行する
    $food->show_price();

    // Animalクラスのメソッドにアクセスし、実行する
    $animal->show_height();

    ?>
  </p>

</body>

</html>