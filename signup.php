<?php
require __DIR__ . '/header.php';
?>
<?php
include_once "./templates/generation.php";
?>
<link rel="stylesheet" href="style.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
generation_head_menu($mysqli);
?>
<body>
    <section class="main-page">
        <div class="container mt-4">
            <div id="header-form">
                <div id="mess">
                    <div class="container">
                        <form method="post" id="my_form" class="p-3 mb-2 bg-white text-dark">

                            <div>
                                <h2>Заполните форму:</h2>
                            </div>

                            <div class="group">
                                <input type="text" name="family" id="family" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Фамилия</label>
                            </div>

                            <div class="group">
                                <input type="text" name="name" id="name" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Имя</label>
                            </div>

                            <div class="group">
                                <input type="text" name="patronymic" id="patronymic" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Отчество</label>
                            </div>

                            <div class="group">
                                <input type="text" name="address" id="address" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Адрес</label>
                            </div>

                            <div class="group">
                                <input type="text" name="phonenumber" id="phonenumber"  required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Телефон</label>
                            </div>

                            <div class="group">
                                <input type="text" name="email" id="email" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>E-mail</label>
                            </div>
                            <button class="btn btn-danger" name="do_form" type="submit" id="my_form_send">Оправить</button>
                            <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
                            <script src="common.js"></script>
                        </form>
                        <script>
                            $('#my_form_send').click(function(){
                                $.post(
                                    'message.php',
                                    $("#my_form").serialize(),

                                    function(msg) {

                                        $('#my_message').html(msg);
                                    }
                                );
                                return false;
                            });
                        </script>
                        <div id="header-content">
                            <div class="p-3 mb-2 bg-white text-dark" id="my_message">
                                <h4>Здесь можете проверить ваши данные после отправки:</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>



