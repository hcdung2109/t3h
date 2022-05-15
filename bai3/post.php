<?php
if (isset($_POST['username'])) {
    $fname = $_POST['username'];
    print_r($fname);
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if (strlen($password) < 8) {
        $errorPassword = 'Mật khẩu độ dài tối thiểu là 8';
    }
}

?>
<!DOCTYPE html>
<html>
<body>
<h2>HTML Forms POST</h2>
<form action="" method="POST">
    <label for="fname">Username:</label><br>
    <input type="text" id="fname" name="username" value=""><br>
    <label for="lname">Password:</label><br>
    <input type="text" id="lname" name="password" value="">
    <?php if (!empty($errorPassword)): ?>
        <p style="color: red"><?php echo $errorPassword; ?></p>
    <?php endif; ?>
    <input type="submit" value="Submit">
</form>
</body>
</html>