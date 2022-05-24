<?php
    setcookie('test_cookie', 't3h', time() + 3600);

    setcookie('test_cookie', '', time() - 3600);
?>

<html>
<head>

</head>
<body>
<?php if (isset($_COOKIE['test_cookie'])): ?>
    <h1><?= $_COOKIE['test_cookie'] ?></h1>
<?php endif; ?>
</body>
</html>
