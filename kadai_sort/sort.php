<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10];
        function sort_2way ($array, $order){
            $array = $order
            if ($array, true) {
                echo '昇順にソートします。';
    
                // 改行する
                echo '<br>';
    
    　　　　　　　sort($array);
    
            　　　} else {
                 echo '降順にソートします。';
    
                 // 改行する
                echo '<br>';
    
                rsort($array);
             }
        }
        sort_2way ();


         //  配列$numbersの要素を1つずつ順番に出力する
         foreach ($array as $order) {
            echo $;
         }
        ?>
    </p>

</body>

</html>