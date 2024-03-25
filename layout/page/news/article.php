<?php
    $post = get_post();
?>

<section id="news" class="py-5">
    <div class="container">
        <div class="news-thumnail mx-auto mb-5">
            <img class="img-fluid" src="<?= wp_get_attachment_url(carbon_get_post_meta(get_the_ID(), 'thumbnail')) ?>" alt="">
        </div>
        <div class="news-title mb-4 text-center">
            <h1><?= $post->post_title ?></h1>
        </div>
        <div class="publisher text-center">
            <div>
                <span class="text-muted">By <?= get_author_name($post->post_author) ?></span>
            </div>
            <div>
                <span class="text-muted">Published <?= date("F m, Y", strtotime($post->post_date)) ?></span>
            </div>
        </div>
        <div class="article-content fs-12pt">
            <?= $post->post_content ?>
        </div>
    </div>
</section>