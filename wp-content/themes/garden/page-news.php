<?php
/*
Template Name: News
*/
?>

<?php get_header(); ?>

    <section class="news-bg">
        <img src="<?php echo get_template_directory_uri(); ?>/build/images/news/news-bg.jpg" alt="">
        <h2 class="news-bg__name">News</h2>
    </section>

    <section class="birthday birthday_p">

        <div class="container">

            <h2 class="news-name news-name_p">Именинники месяца</h2>

            <div class="row align-items-center justify-content-center">
                

                <?php $pc = new WP_Query('cat=9&orderby=date&posts_per_page=20'); ?>
                <?php while ($pc->have_posts()) : $pc->the_post(); ?>
                    <div class="col-lg-6 col-md-12">
                        <div class="birthday-item">

                            <div class="row no-gutters">

                                <div class="col-lg-4 col-md-4 col-4">
                                    <div class="birthday-item__img">
                                        <?php echo the_post_thumbnail('full', array('class' => 'img-fluid')) ?>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-8">

                                    <div class="birthday-item__text-wrp">

                                        <div class="birthday-item__title">Поздравляем</div>
                                        <div class="birthday-item__name"><?php the_title(); ?></div>
                                        <div class="birthday-item__text"><?php the_content(); ?></div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                <?php endwhile; ?> 
                <?php wp_reset_postdata(); // reset the query ?>


            </div>

        </div>

    </section>

    <section class="event-slider-wrp event-slider-wrp_p">

        <h2 class="news-name news-name_p">Поздравление с праздниками</h2>

        <div class="event-slider swiper-container">

            <div class="swiper-wrapper">


                <?php $pc = new WP_Query('cat=10&orderby=date&posts_per_page=20'); ?>
                <?php while ($pc->have_posts()) : $pc->the_post(); ?>
                    <div class="swiper-slide event-slide">
                        <div class="container">
                            <div class="row align-items-center no-gutters">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="event-slide__text-wrp">
                                        <div class="event-slide__title">Поздравляем Вас </div> 
                                        <div class="event-slide__name"><?php the_title(); ?></div>
                                        
                                        <div class="event-slide__text"><?php the_content(); ?></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="event-slide__img">
                                        <?php echo the_post_thumbnail('full', array('class' => 'img-fluid')) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?> 
                <?php wp_reset_postdata(); // reset the query ?>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

        </div>

    </section>

    <section class="calender-wrp calender-wrp_p">

        <h2 class="news-name news-name_p">Мероприятия</h2>

        <div class="container">
            <div class="row no-gutters">

                <div class="col-lg-7 col-md-4 col-4">

                    <div class="calender-bg">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/news/news-event.jpg" alt="">
                        <div class="calender-bg__title">Наши мероприятия</div>
                    </div>

                </div>
                <div class="col-lg-5 col-md-8 col-8">
                    <div class="calender">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/news/calender.png" alt="">
                    </div> 
                </div>

            </div>
        </div>

    </section>

<?php get_footer(); ?>