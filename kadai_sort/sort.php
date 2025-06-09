<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function $order(15, 4, 18, 23, 10);
        if ($order = 4, 10, 15, 18, 23) {
            echo '昇順にソートします。';

            // 改行する
            echo '<br>';

　　　　　　　sort($order);

        　　　} else {
             echo '降順にソートします。';

             // 改行する
            echo '<br>';

            rsort($order);
         }

         $numbers = [15, 4, 18, 23, 10];

         //  配列$numbersの要素を1つずつ順番に出力する
         foreach ($numbers as $numbers) {
            echo $$numbers;
         }
        ?>
    </p>

</body>

</html>