<?php 
include_once "./templates/generation.php";

$id_topic = $_REQUEST['id_topic'];

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Категория</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 </head>
 <?php
 generation_head_menu($mysqli);
 ?>
 <body>
     <div class="p-3 mb-2 bg-transparent text-dark">
             <div class="container1">
                 <div class="p-3 mb-2 bg-transparent text-dark">
                    <?php
                        generation_posts_topic($mysqli, $id_topic);
                    ?>

                </div>
             </div>
     </div>
 </body>
 </html>