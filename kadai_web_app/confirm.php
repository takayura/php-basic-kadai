<?php
// POSTリクエストから入力データを取得
$name = $_POST['employee_name'];
$age = $_POST['employee_age'];
$department = $_POST['department'];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>確認画面の作成</title>
</head>

<body>
  <h2>入力内容をご確認ください</h2>
  <p>問題がなければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
  <table border="1">
    <tr>
      <th>項目</th>
      <th>入力内容</th>
    </tr>
    <tr>
      <td>社員名:</td>
      <td><?php echo $_POST['employee_name']; ?></td>
    </tr>
    <tr>
      <td>年齢:</td>
      <td><?php echo $_POST['employee_age']; ?></td>
    </tr>
    <tr>
      <td>所属部署:</td>
      <td><?php echo $_POST['department']; ?></td>
    </tr>
  </table>
  <p>
    <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
    <button id="cancel-btn" onclick="history.back();">キャンセル</button>
  </p>

</body>

</html>