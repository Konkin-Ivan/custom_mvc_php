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
        <h1>Создание заметки</h1>
        <form method="post">
            <label for="body">Body</label>
            <div>
                <textarea id="body" name="body" placeholder="Здесь пиши свои идеи..."><?= $_POST['body'] ?? '' ?></textarea>
                <?php if (isset($errors['body'])) : ?>
                    <p><?= $errors['body'] ?></p>
                <?php endif; ?>
            </div>
            <button type="submit">Создать</button>
        </form>
    </main>
    <footer>
        <?php require_once base_path('views/partials/footer.php'); ?>
    </footer>
</body>
</html>


