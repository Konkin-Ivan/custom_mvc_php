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
        <?php foreach ($notes as $note) : ?>

        <h2><a href="/note?id=<?= $note['id'] ?>"><?= $note['title'] ?></a></h2>
        <p><?= htmlspecialchars($note['body']) ?></p>

        <?php endforeach; ?>
        <a href="/note/create">Создать заметку</a>
    </main>
    <footer>
        <?php require_once base_path('views/partials/footer.php'); ?>
    </footer>
</body>
</html>


