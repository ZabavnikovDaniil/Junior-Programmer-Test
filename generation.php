<?php
include_once "mysqlConnect.php";


function generation_head_menu ($mysqli) {
    $sql = "SELECT * FROM `topic`";
    $resSQL = $mysqli -> query($sql);
    ?>
    <header class="menu">
        <div class="container_menu">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <ul class="navbar-nav mr-auto">
                    <li><a class="navbar-brand text-danger" href="index.php">Главная</a></li>
                    <?php
                    while ($rowTopic = $resSQL -> fetch_assoc()) {
                        echo '<li class="nav-item"><a class="navbar-brand text-danger" href="./topic.php?id_topic='. $rowTopic["id"] .'">'. $rowTopic['name'].'</a></li>';
                    }
                    echo '<a class="navbar-brand text-danger" href="signup.php">Обратная связь</a>';
                    ?>
                </ul>
            </nav>
        </div>
    </header>
    <?php
}

function generation_posts_index ($mysqli) {
    $sql = "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 5";
    $res = $mysqli -> query($sql);

    if ($res -> num_rows > 0) {
        while ($resArticle = $res -> fetch_assoc()) {
            $resPost = $res -> fetch_assoc()
            ?>
            <body>
            </body>
            <div class="p-3 mb-2 bg-white text-dark">
                <div class="card">
                    <div class="p-3 mb-2 bg-light text-dark">
                        <div class="card-body">
                            <div class="p-3 mb-2 bg-white text-dark">
                                <a href="#" class="text-danger">
                                <h5 class="card-title" ><a  class="text-danger" href="post.php?id_article=<?= $resArticle['id'] ?>"><?= $resArticle['title'] ?></a></h5>
                                <p class="card-text"><?= mb_substr($resArticle['text'], 0, 158, 'UTF-8') ?></p>
                                <p>Дата публикации: <?= substr($resPost['date'], 0, 11) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        echo "Нет статей";
    }
}

function generation_posts_topic ($mysqli, $id_topic) {
    $sql = "SELECT * FROM `articles` WHERE `id_topic` = $id_topic";
    $res = $mysqli -> query($sql);

    if ($res -> num_rows > 0) {
        while ($resArticle = $res -> fetch_assoc()) {
            $resPost = $res -> fetch_assoc()
            ?>
            <div class="card">
                <div class="p-3 mb-2 bg-light text-dark">
                    <div class="card-body">
                        <div class="p-3 mb-2 bg-white text-dark">
                            <h5 class="card-title" ><a class="text-danger" href="post.php?id_article=<?= $resArticle['id'] ?>"><?= $resArticle['title'] ?></a></h5>
                            <p class="card-text"><?= mb_substr($resArticle['text'], 0, 158, 'UTF-8') ?></p>
                            <p>Дата публикации: <?= substr($resPost['date'], 0, 11) ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        echo "Нет новостей";
    }
}

function generation_post ($mysqli, $id_article) {
    $sql = "SELECT * FROM `articles` WHERE `id` = '$id_article'";
    $res = $mysqli -> query($sql);

    if ($res -> num_rows === 1) {
        $resPost = $res -> fetch_assoc()?>
        <h1><?= $resPost['title'] ?></h1>
        <p><?= $resPost['text'] ?></p>
        <p>Дата публикации: <?= substr($resPost['date'], 0, 11) ?></p>
        <?php
    }
}
