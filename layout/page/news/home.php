<?php
    $pageNumber = get_query_var('paged') ?: 1;
    $result = rsvp_get_news(9, $pageNumber);
    $postSize = $result->found_posts;
    $newsPerRow = array_chunk($result->posts, 3);
?>

<section id="section-projects" class="py-5">
    <div class="container-fluid p-3 p-md-5">
        <h1 class="display-4 text-center mb-5 lh-1">
            All News
        </h1>
        <div class="mb-5">
            <?php foreach ($newsPerRow as $rowNumber => $newsList): ?>
                <div class="row align-items-center justify-content-center">
                <?php
                    $size = sizeof($newsList);
                    foreach ($newsList as $newsNumber => $news):
                ?>
                    <?php
                        $thumbnail = carbon_get_post_meta($news->ID, 'thumbnail');
                    ?>
                    <div class="col-md-4">
                        <a href="<?= get_permalink($news) ?>">
                            <div class="card rounded-0 border-0">
                                <div class="card-body">
                                    <div class="img-list-container">
                                        <img class="img-fluid my-auto" src="<?= wp_get_attachment_url($thumbnail) ?>" alt="<?= wp_get_attachment_url($thumbnail) ?>">
                                    </div>
                                    <h5 class="card-title mt-3 mb-0 fw-normal"><?= $news->post_title ?></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div>
            <nav class="news-pagination">
                <ul class="pagination justify-content-center">
                    <li class="page-item <?= $pageNumber - 1 < 1 ? 'd-none' : null ?>"><a class="border-0 page-link fst-italic text-decoration-underline" href="/news/page/<?= $pageNumber - 1 ?>">Previous</a></li>
                    <!-- <?php for ($i = 1; $i <= $result->max_num_pages; $i++): ?>
                        <li class="border-0 page-item <?= $i == $pageNumber ? 'disabled' : null ?>"><a class="border-0 page-link" href="/news/page/<?= $i ?>"><?= $i ?></a></li>
                    <?php endfor; ?> -->
                    <li class="page-item <?= $result->max_num_pages == $pageNumber ? 'd-none' : null ?>"><a class="border-0 page-link fst-italic text-decoration-underline" href="/news/page/<?= $result->max_num_pages + 1 ?>">Next</a></li>
                </ul>
            </nav>
        </div>

        <?php 
            if ( have_posts() ) :
                while (have_posts() ) : the_post();
                    get_template_part('news', get_post_format() );
                endwhile;
            endif;
        ?>
    </div>
</section>