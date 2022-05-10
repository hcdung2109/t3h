<?php

function show_name() {
    echo 'hello world'.'<br>';
    // code here
}

show_name();

function show_name_2 ($param) {
    echo $param.'<br>';
}

show_name_2('t3h');

function show_name_3($name, $age, $address) {
    echo "Ten : $name , tuoi : $age, dia chi : $address".'<br>';
}

show_name_3('t3h', '10', 'ha noi');


function show_name_4($name, $age, $address = 'HN') {
    echo "Ten : $name , tuoi : $age, dia chi : $address".'<br>';
}

show_name_4('t3h', '10');
