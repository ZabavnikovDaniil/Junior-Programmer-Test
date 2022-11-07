<?php

$family = trim($_POST["family"]);
$name = trim($_POST["name"]);
$patronymic = trim($_POST["patronymic"]);
$address = trim($_POST["address"]);
$phonenumber = trim($_POST["phonenumber"]);
$email = trim($_POST["email"]);


$servername = "127.0.0.1";
$username = "root";
$password = "";
$BDname = "register";

$conn = new mysqli($servername, $username, $password, $BDname);
$sql = "INSERT INTO users (family, name, patronymic, address, phonenumber, email) VALUES ( '$family', '$name', '$patronymic', '$address', '$phonenumber', '$email')";

$accuracy = True;
$symbol1 = '@';
if ($accuracy == True) {
    if ($_POST['family'] == '') {?>
        <h4 class="text-danger"><?='Введите фамилию'?></h4><?php
        $accuracy = False;
    }
}
if ($accuracy == True) {
    if ($_POST['name'] == '') {?>
        <h4 class="text-danger"><?='Введите имя'?></h4><?php
        $accuracy = False;
    }
}
if ($accuracy == True) {
    if ($_POST['patronymic'] == '') {?>
        <h4 class="text-danger"><?='Введите отчество'?></h4><?php
        $accuracy = False;
    }
}
if ($accuracy == True) {
    if ($_POST['address'] == '') {?>
        <h4 class="text-danger"><?='Введите адрес'?></h4><?php
        $accuracy = False;
    }
}
if ($accuracy == True) {
    if ($_POST['phonenumber'] == '') {?>
        <h4 class="text-danger"><?='Введите номер телефона'?></h4><?php
        $accuracy = False;
    }
}
if ($accuracy == True) {
    if ($_POST['email'] == '') {?>
        <h4 class="text-danger"><?='Введите електронную почту'?></h4><?php
        $accuracy = False;
    }
}
if ($accuracy == True) {
    if (ctype_digit($_POST['phonenumber'])) {
        $accuracy = True;
    }
        else {?>
        <h4 class="text-danger"><?='Номер телефона введён не правильно'?></h4><?php
        $accuracy = False;
    }

}
if ($accuracy == True) {
    $pos = strpos($_POST['email'], '@');
    if ($pos == False) {?>
        <h4 class="text-danger"><?='Электронная почта введена не правильно'?></h4><?php
        $accuracy = False;
    }
}
if ($accuracy == True) {
    if ($conn->query($sql)) {?>
        <h2><?='Ваши данные успешно отправлены:'?></h2>
        <h3><?= 'Фамилия: ' . $_POST['family'] ?></h3>
        <h3><?= 'Имя: ' . $_POST['name'] ?></h3>
        <h3><?= 'Отчество: ' . $_POST['patronymic'] ?></h3>
        <h3><?= 'Адрес: ' . $_POST['address'] ?></h3>
        <h3><?= 'Телефон: ' . $_POST['phonenumber'] ?></h3>
        <h3><?= 'Почта: ' . $_POST['email'] ?></h3><?php
    } else {
        echo "Ошибка: " . $conn->error;
    }
}
$conn->close();
?>

