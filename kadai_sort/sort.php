<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>

  <p>
    <?php
    function sort_2way($array, $order)
    {
      // 昇順ソート
      if ($order === 'asc') {
        sort($array);
        foreach ($array as $value) {
          echo $value . "<br>";
        }
      }
      // 降順ソート
      elseif ($order === 'desc') {
        rsort($array);
        foreach ($array as $value) {
          echo $value . "<br>";
        }
      } else {
        echo "ソートの順序指定が無効です。";
      }
    }

    // 配列の作成
    $numbers = array(15, 4, 18, 23, 10);

    // 昇順ソートを表示
    echo "昇順にソート<br>";
    sort_2way($numbers, 'asc');

    // 降順ソートを表示
    echo "降順にソート<br>";
    sort_2way($numbers, 'desc');
    ?>
  </p>
</body>

</html>