<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= get_bloginfo() ?></title>
    <?php wp_head() ?>
</head>

<body>
    <div class="cursor"></div>
    <div class="cursor2"></div>
    <!-- Header -->
    <?php include "component/header.php" ?>
    <main>
        <!-- Content -->
        <?php include $layout_name ?>
    </main>
    <!-- Footer -->
    <?php include "component/footer.php" ?>
    <?php wp_footer() ?>
</body>

</html>