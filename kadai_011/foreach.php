<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP Foreach課題</title>
</head>

<body>
   <p>
       <?php
       $grocery_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

       //  配列$grocery_dataの要素を1つずつ順番に出力する
       foreach ($grocery_data as $key => $value) {
        echo "{$key} : {$value} <br>";
       }
       ?>
    </p>
</body>

</html>