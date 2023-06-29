<!DOCTYPE HTML>
<html lang="ru">
<head>
    <!-- Подключаемые файлы, метатеги, название страницы -->

    <!-- Кодировка страницы-->
    <meta charset="utf-8"/>
    <?php echo $title; ?>
    <link rel="stylesheet" href="../utilities/css/styles.css" >
</head>
<body>
    <header>
        <?php require_once base_path('views/partials/head.php'); ?>
    </header>
    <nav>
        <?php require_once base_path('views/partials/nav.php'); ?>
    </nav>
    <main>
        <?php require_once base_path('views/partials/banner.php'); ?>
        <a href="/notes">Назад...</a>
        <h1><?= htmlspecialchars($note['title']) ?></h1>
        <p><?= htmlspecialchars($note['body']) ?></p>
        <form method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button>Удалить</button>
        </form>
    </main>
    <footer>
        <?php require_once base_path('views/partials/footer.php'); ?>
    </footer>
</body>
</html>


