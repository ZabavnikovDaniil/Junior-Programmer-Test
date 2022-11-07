<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Статья</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<?php
include_once "./templates/generation.php";
$id_article = $_REQUEST["id_article"];
?>
<?php
generation_head_menu($mysqli);
?>
    <div class="p-3 mb-2 bg-white text-dark">
    <body >
                <div class="card">
                    <div class="p-3 mb-2 bg-light text-dark">
                        <div class="container1">
                            <?php
                            generation_post($mysqli, $id_article);
                            ?>
                        </div>
                    </div>
                </div>
    </body>
    </div>
</html>