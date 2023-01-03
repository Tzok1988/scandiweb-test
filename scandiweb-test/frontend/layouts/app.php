<!Doctype html>
<html lang="en">

<?php require_once('head.php') ?>

<body class="d-flex flex-column" style="min-height: 100vh">

    <?php require_once('navbar.php') ?>

    <main style="flex: 1">
        <?php require_once(__DIR__ . $component) ?>
    </main>

    <?php require_once('footer.php') ?>
    <?php require_once('scripts.php') ?>

</body>

</html>