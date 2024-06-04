<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'Default Title'; ?></title>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <?php include __DIR__ . '/../partials/header.php'; ?>

    <div class="main_container">
        <?php echo $content; ?>
    </div>

    <?php include __DIR__ . '/../partials/footer.php'; ?>
</body>
</html>
