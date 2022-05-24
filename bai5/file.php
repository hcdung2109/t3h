<?php
// mở file chế độ đọc ghi w+
$file = fopen('helo.txt', 'w+');

fwrite($file, 'test ghi file');

fclose($file);

// đọc nội dụng file
if (file_exists('test.txt')) {
    $file2 = fopen('test.txt', 'r+');

    while (!feof($file2)) {
        echo fgets($file2).'<br>';
    }

    fclose($file2);
}

// đọc từng ký tự với hàm fgetc
if (file_exists('test.txt')) {
    $file2 = fopen('test.txt', 'r+');

    while (!feof($file2)) {
        echo fgetc($file2).'<br>';
    }

    fclose($file2);
}
