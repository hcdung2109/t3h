<?php
    // chú thích 1

    /*
     * chú thích 2
     */

    $name = 'HCDUNG';

    /*$order = 'CHi tiet 1 don hang';

    $list_orders = '';

    $listOrders = ....;

    $listProducts =

    $products =*/

    /*$a = 5;
    $b = 6;

    $c = $a + $b; // 5+ 6

    //echo $c; // 11


    $x = 'trung tam t3h $c';
    $y = "trung tam t3h $c";

    //echo $x;
    //echo $y;

    $x = 5;
    $y = '5';

    // if : nếu
    if ($x == $y) {
        //echo ' bằng nhau 1';
    }

    if ($x === $y) {
        //echo ' bằng nhau 2';
    }

    $a = true;
    $b =  false;

    if ($a) {
        //echo $a;
    } else {
        //echo 'not a';
    }

    if ($b) {
        //echo $b;
    } else {
        //echo 'not b';
    }

    $x = 6;
    $y = '5';

    if ($x !== $y) {
        //echo ' dung';
    } else {
        //echo 'sai';
    }

    if ($x == 5) {
        echo 'TH1';
    } elseif ($x == 6) {
        echo 'TH2';
    } elseif ($x == 7) {
        echo 'TH3';
    } else {
        echo 'TH4';
    }

    switch ($x) {
        case 5:
            echo 'TH1';
            break;
        case 6:
            echo 'TH2';
            break;
        case 7:
            echo 'TH3';
            break;
        default:
            echo 'Khong ton tai TH nao';
    }

    if ($x == 6 && $y == 5) {
        echo 'logic';
    }


    if ($x == 6 || $y == 5) {
        echo 'logic';
    }*/

    // vòng lặp While
    /*$x = 1;
    while ($x <= 5) {
        echo ("The number is: $x <br />");
        $x++;
    }*/

    /*$x = 1;
    do {
        echo ("The number is: $x <br />");
        $x++;
    } while ($x <= 5)*/

    /*for ($x = 0; $x <= 5; $x++) {
        echo ("The number is: $x <br />");
    }*/

    // kiểu dữ liệu mảng
    //$arrProducts = array();
    //$arrProducts = [];

    $arrNumbers = ['a','b','c','d',1,2,3];

    //print_r($arrProducts);
    //echo $arrNumbers;
//    echo '<pre>';
//    print_r($arrNumbers);
//    var_dump($arrNumbers);
//    die;

    //echo 'hello world';

    $car = ["Volvo", "BMW", "Toyota"]; // 0 , 1, 2
    //print_r($car[2]);

    $age = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
    //echo '<pre>';
    //print_r($age);
    //print_r($age['Ben']);
    //print_r($age['Joe']);

    $arrProducts = [
        [
            'id' => 1,
            'name' => 'Samsung',
            'price' => 20000000
        ],
        [
            'id' => 2,
            'name' => 'Xiaomi',
            'price' => 15000000
        ],
        [
            'id' => 3,
            'name' => 'Iphone',
            'price' => 16000000
        ]
    ];

    //echo '<pre>';
    //foreach ($arrProducts as $item) {
        //print_r($item);
    //}

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>HTML Table</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
    </tr>
    <?php
/*        foreach ($arrProducts as $item) {
    */?><!--
    <tr>
        <td><?/*= $item['id'] */?></td>
        <td><?php /*echo $item['name'] */?></td>
        <td><?/*= $item['price'] */?></td>
    </tr>

    --><?php /*} */?>

    <?php foreach ($arrProducts as $item): ?>
        <?php if ($item['price'] >= 16000000): ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?php echo $item['name'] ?></td>
                <td><?= $item['price'] ?></td>
            </tr>
        <?php endif; ?>
    <?php endforeach; ?>

</table>

</body>
</html>


