<?php
session_start();

$_SESSION['user'] = 'T3H';
$_SESSION['email'] = 't3h@gmail.com';

//unset($_SESSION['user']);
//unset($_SESSION['email']);

if (isset($_SESSION['user'])) {
    //print_r($_SESSION['user']);
}

if (isset($_SESSION['email'])) {
    //print_r($_SESSION['email']);
}

if (isset($_SESSION['email'])) {
    $_SESSION['number'] += 1;

    print_r($_SESSION['number']);
} else {
    $_SESSION['number'] = 1;
}

?>

<html lang="vi">
<head>
</head>
<body>
    <h1>Bài 5</h1>
    <a href="/bai5/page1.php">Trang 1</a>
    <a href="/bai5/page2.php">Trang 2</a>
</body>
</html>
