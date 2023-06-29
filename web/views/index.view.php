<!DOCTYPE HTML>
<html lang="ru">
<head>
    <!-- Подключаемые файлы, метатеги, название страницы -->

    <!-- Кодировка страницы-->
    <meta charset="utf-8"/>
    <?php echo $title; ?>
    <link rel="stylesheet" href="css/styles.css" >
</head>
<body>
    <?php require_once base_path('Core/utilities/dd.php'); ?>
    <header>
        <?php require_once 'partials/head.php'; ?>
    </header>
    <nav>
        <?php require_once 'partials/nav.php'; ?>
    </nav>
    <main>
        <?php
        require_once 'partials/banner.php';
        foreach ($posts as $post) {
            echo "<h2>" . $post['title'] . "</h2>";
            echo "<p>" . $post['body'] . "</p>";
            //echo "<p>" . $post['slug'] . "</p>";
        }
        ?>
    </main>
    <footer>
        <?php require_once 'partials/footer.php'; ?>
    </footer>
</body>
</html>


