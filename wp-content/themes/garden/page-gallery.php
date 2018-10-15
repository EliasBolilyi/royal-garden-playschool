<?php
/*
Template Name: Gallery
*/
?>

<?php get_header(); ?>

    <section class="gallery-slider">

        <div class="gallery-item">
            <img src="<?php echo get_template_directory_uri(); ?>/build/images/gallery/gallety.jpg" alt="">
        </div>
        <div class="gallery-item">
            <img src="<?php echo get_template_directory_uri(); ?>/build/images/gallery/gallety.jpg" alt="">
        </div>
        <div class="gallery-item">
            <img src="<?php echo get_template_directory_uri(); ?>/build/images/gallery/gallety.jpg" alt="">
        </div>

    </section>

    <section class="gallery gallery_p">

        <div class="container">

            <h2 class="gallery-title gallery-title_p">Gallery</h2>

            <ul class="gallery-tab nav nav-tabs" id="myTab" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active" id="gal-tab-1" data-toggle="tab" href="#gal-1" role="tab" aria-controls="home" aria-selected="true">
                        <span class="gallery-arr">
                            <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.04297 5.54545L5.54156 11L13.0392 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        Интерьеры
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="gal-tab-2" data-toggle="tab" href="#gal-2" role="tab" aria-controls="profile" aria-selected="false">
                        <span class="gallery-arr">
                            <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.04297 5.54545L5.54156 11L13.0392 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        Мероприятия
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="gal-tab-3" data-toggle="tab" href="#gal-3" role="tab" aria-controls="contact" aria-selected="false">
                        <span class="gallery-arr">
                            <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.04297 5.54545L5.54156 11L13.0392 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        Кухня
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="gal-tab-4" data-toggle="tab" href="#gal-4" role="tab" aria-controls="contact" aria-selected="false">
                        <span class="gallery-arr">
                            <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.04297 5.54545L5.54156 11L13.0392 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        Территория
                    </a>
                </li>

            </ul>   

            <div class="gallery-content tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="gal-1" role="tabpanel" aria-labelledby="gal-tab-1">

                    <div class="row">

                        <?php echo do_shortcode('[envira-gallery id="213"]'); ?>

                    </div>

                </div>
                <div class="tab-pane fade" id="gal-2" role="tabpanel" aria-labelledby="gal-tab-2">

                    <div class="row">

                        <?php echo do_shortcode('[envira-gallery id="213"]'); ?>

                    </div>

                </div>
                <div class="tab-pane fade" id="gal-3" role="tabpanel" aria-labelledby="gal-tab-3">

                    <div class="row">

                        <?php echo do_shortcode('[envira-gallery id="213"]'); ?>

                    </div>

                </div>
                <div class="tab-pane fade" id="gal-4" role="tabpanel" aria-labelledby="gal-tab-4">

                    <div class="row">

                        <?php echo do_shortcode('[envira-gallery id="213"]'); ?>

                    </div>
                    
                </div>

            </div>

        </div>

    </section>

<?php get_footer(); ?>