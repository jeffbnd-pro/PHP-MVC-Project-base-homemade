<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>MVC Starter</title>
</head>
<body>
    <header>
        <?php require_once __DIR__ . '/static/header.php' ?>
    </header>
    <main>
        <?php include $viewFile; ?>
    </main>
    <footer>
        <?php require_once __DIR__ . '/static/footer.php' ?>
    </footer>
</body>
</html>
