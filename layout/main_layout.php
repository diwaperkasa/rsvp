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
    <div class="cursor d-none d-md-block"></div>
    <div class="cursor2 d-none d-md-block"></div>
    <!-- Header -->
    <?php include_once "component/header.php" ?>
    <!-- End of header -->
    <main>
        <!-- Content -->
        <?php include_once $layout_name ?>
        <!-- End of content -->
    </main>
    <!-- Footer -->
    <?php include_once "component/footer.php" ?>
    <?php wp_footer() ?>
    <!-- End of footer -->
</body>

</html>