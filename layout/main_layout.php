<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= wp_get_document_title() ?></title>
    <meta property="og:title" content="<?= wp_get_document_title() ?>">
    <meta name="twitter:title" content="<?= wp_get_document_title() ?>">

    <?php if ($image = carbon_get_post_meta(get_the_ID(), 'thumbnail')): ?>
        <meta name="twitter:image" content="<?= wp_get_attachment_url($image) ?>">
        <meta property="og:image" content="<?= wp_get_attachment_url($image) ?>">
    <?php endif; ?>

    <meta name="description" content="We Innovate Your Story">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_stylesheet_directory_uri() . "/assets/favicons/apple-touch-icon.png" ?>">
	<link rel="icon" type="image/png" href="<?= get_stylesheet_directory_uri() . "/assets/favicons/favicon-32x32.png" ?>" sizes="32x32">
	<link rel="icon" type="image/png" href="<?= get_stylesheet_directory_uri() . "/assets/favicons/favicon-16x16.png" ?>" sizes="16x16">
	<link rel="mask-icon" href="<?= get_stylesheet_directory_uri() . "/assets/favicons/safari-pinned-tab.svg" ?>" color="#403e40">
    <?php wp_head() ?>
</head>

<body>
    <div class="cursor d-none"></div>
    <div class="cursor2 d-none"></div>
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