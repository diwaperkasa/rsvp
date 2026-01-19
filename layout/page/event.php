<section id="events-section" class="pb-5">
    <div class="container">
        <h1 class="display-4 text-center my-5 lh-1">
            Events</br>At</br>The Mill
        </h1>
        <div class="row h-100">
            <div class="col-lg-6">
                <?= the_content(); ?>
            </div>
            <div class="col-lg-6">
                <?php $galleries = carbon_get_post_meta(get_the_ID(), 'media_gallery'); ?>
                <?php if ($galleries) :?>
                    <div class="owl-carousel owl-theme">
                        <?php foreach ($galleries as $gallery): ?>
                            <div class="item">
                                <figure class="position-relative">
                                    <?= wp_get_attachment_image($gallery['image'], 'large', false, [
                                        'class' => 'img-fluid ratio ratio-16x9'
                                    ]) ?>
                                    <figcaption class="position-absolute bottom-0 px-4 py-2">
                                        <span class="text-white fs-6">
                                            <?= $gallery['caption'] ?>
                                        </span>
                                    </figcaption>
                                </figure>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>