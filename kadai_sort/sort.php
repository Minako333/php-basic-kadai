<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort($order15, $order4, $order18, $order23, $order10);
        if ($order) {
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

         $order = [15, 4, 18, 23, 10];

         //  配列$numbersの要素を1つずつ順番に出力する
         foreach ($order as $order) {
            echo $order;
         }
        ?>
    </p>

</body>

</html>