<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>PHP連想配列</title>
</head>

<body>
    <p>
        <?php
        //連想配列に値を代入する
        $grocery_data = ['name' => 'onion', 'price' => 200, 'weight' => '160'];

        //連想配列の値を出力する
        print_r($grocery_data);
        ?>
    </p>
</body>

</html>