<?php
/*
Template Name: About us
*/
?>

<?php get_header(); ?>


    <section class="slider-first-block-wrp">

        <div class="slider-first-block">

            <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php
                $images = $dynamic_featured_image -> get_featured_images();
                if( $images ) {
                    foreach ( $images as $key => $image ) {
                        $class = ( $key !== count( $images ) -1 ) ? " class='slider-first__item'" : " class='image-block'";          
                        $title = $dynamic_featured_image -> get_image_title($image['full']);
                        ?>
                            <div <?php echo $class ?>>
                                <img src="<?php echo $image['full']; ?>" alt="picture">
                            </div>
                        <?php
                    }
                }
                ?>
            <?php endwhile; endif; ?>

        </div>

        <div class="slider-first-block-wrp_decore">
            <svg fill="none" viewBox="0 0 1440 161" xmlns="http://www.w3.org/2000/svg">
			<path d="m721.02 55.059c-468.02-75.559-650.54-38.145-721.02-16.893v122.83h1440v-160.98c-194.82 78.469-497 90.873-718.98 55.036z" fill="#B8A35F"/>
			</svg>
        </div>

        <div class="slider-first-block-wrp_bird">
			<img src="<?php echo get_template_directory_uri(); ?>/build/images/bird1.svg" alt="" class="img-fluid">
		</div>

    </section>

    <section class="why-we why-we_padd">

        <div class="container">

            <h2 class="why-we__name why-we__name_padd">Почему мы <span>(Концепция сада)</span></h2>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="why-we__item">
                        <span class="why-we__numb">01</span>
                        <span class="why-we__line"></span>
                        <?php the_field('why-1'); ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="why-we__item">
                        <span class="why-we__numb">02</span>
                        <span class="why-we__line"></span>
                        <?php the_field('why-2'); ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="why-we__item">
                        <span class="why-we__numb">03</span>
                        <span class="why-we__line"></span>
                        <?php the_field('why-3'); ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="why-we__item">
                        <span class="why-we__numb">04</span>
                        <span class="why-we__line2"></span>
                        <?php the_field('why-4'); ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="why-we__item">
                        <span class="why-we__numb">05</span>
                        <span class="why-we__line2"></span>
                        <?php the_field('why-5'); ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    <div class="why-we__item">
                        <span class="why-we__numb">06</span>
                        <span class="why-we__line2"></span>
                        <?php the_field('why-6'); ?>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="block-about block-about_padd">

        <div class="block-about-sliders-wrp">
            <div class="slider-about">

                <?php $pc = new WP_Query('cat=4&orderby=date&posts_per_page=20'); ?>
                    <?php while ($pc->have_posts()) : $pc->the_post(); ?>
            
                    <div class="slider-about__item">
                        <?php echo the_post_thumbnail('full', array('class' => 'img-fluid')) ?>
                        <div class="slider-about__text">
                            <h2 class="slider-about__name"><?php the_title(); ?></h2>
                            <div class="slider-about__text-wrp"><?php the_content(); ?></div>
                        </div>
                    </div>

                <?php endwhile; ?> 
                

            </div>

            <div class="slider-about-nav">

                <?php $pc = new WP_Query('cat=4&orderby=date&posts_per_page=20'); ?>
                    <?php while ($pc->have_posts()) : $pc->the_post(); ?>
            
                    <div class="about-nav__item">
                        <?php echo the_post_thumbnail('full', array('class' => 'img-fluid')) ?>
                    </div>

                <?php endwhile; ?> 
                <?php wp_reset_postdata(); // reset the query ?>


            </div>
        </div>
            
    </section>

    <section class="video-block video-block_h">
        
        <div class="video-block-text">
            <div class="container">
                <div class="row">

                    <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6 col-6 align-self-center">
                        <div class="video-block__item">
                            <div class="video-block__name video-block__name_p"><?php the_field('text-video-n'); ?></div>
                            <div class="video-block__text video-block__text_p"><?php the_field('video-text'); ?></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="video-block__bird">
            <img src="<?php echo get_template_directory_uri(); ?>/build/images/bird1.svg" alt="" class="img-fluid">
        </div>

        <div class="play-wrp">
            <img src="<?php echo get_template_directory_uri(); ?>/build/images/play.png" alt="" class="play active">
            <img src="<?php echo get_template_directory_uri(); ?>/build/images/pause.png" alt="" class="pause">
        </div>
            
        <div class="about-video-wrp">
                
            <video width="100%" height="100%" autoplay="autoplay" muted loop>
                <source src="<?php echo get_template_directory_uri(); ?>/build/images/main-block-video.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            </video>

        </div>

    </section>

    <section class="multi-section">

        <div class="block-mission block-mission_p">

            <div class="container">

                <div class="block-mission__name block-mission__name_p">Наша миссия</div>

                <div class="row block-mission-wrp_p">
                    <div class="offset-lg-2 col-lg-4 offset-md-1 col-md-5 offset-sm-2 col-sm-4 col-12">
                        <img src="<?php the_field('miss-foto'); ?>" alt="">
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 align-self-center">
                        <div class="block-mission-item">
                            <div class="block-mission-item__numb">01</div>
                            <?php the_field('miss-text'); ?>
                        </div>
                    </div>
                </div>

                <div class="row block-mission-wrp_p">
                    <div class="offset-lg-3 col-lg-3 offset-lg-2 col-lg-4 offset-md-0 col-md-6 col-12 order-sm-0 order-1 align-self-center">
                        <div class="block-mission-item block-mission-item_r">
                            <div class="block-mission-item__numb block-mission-item__numb_r">02</div>
                            <?php the_field('miss-text-2'); ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 order-sm-1 order-0">
                        <img src="<?php the_field('miss-foto-2'); ?>" alt="" class="block-mission_p-img">
                    </div>
                </div>

                <div class="row block-mission-wrp_p">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <img src="<?php the_field('miss-foto-3'); ?>" alt="" class="block-mission_p-img-big">
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-12 align-self-center">
                        <div class="block-mission-item">
                            <div class="block-mission-item__numb">03</div>
                            <?php the_field('miss-text-3'); ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="block-rewiev-wrp">

            <h2 class="block-rewiev__name block-rewiev__name_p">Отзывы родителей</h2>

            <div class="block-rewiev block-rewiev_p">
                <div class="container">

                    <div class="block-rewiev-slider  block-rewiev-slider_p swiper-container">

                        <div class="swiper-wrapper">

                            <?php $pc = new WP_Query('cat=5&orderby=date&posts_per_page=20'); ?>
                                <?php while ($pc->have_posts()) : $pc->the_post(); ?>

                                <div class="swiper-slide">
                                    <div class="rewiev-slider-item rewiev-slider-item_p">
                                        <h2 class="rewiev-slider-item__name"><?php the_title(); ?></h2>
                                        <div class="rewiev-slider-item__text"><?php the_content(); ?></div>
                                    </div>
                                </div>

                            <?php endwhile; ?> 
                            
                            </div>

                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>

                        </div>


                </div>
            </div>
            

        </div>

        <div class="block-contact block-contact_p">

            <div class="container ">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-10 col-sm-10 col-11">
                        <div class="block-contact-name block-contact-name_p">Запись на консультацию</div>
                        <div class="block-contact-wrp">

                            <?php echo do_shortcode('[contact-form-7 id="88"]'); ?>

                            <div class="block-contact-wrp_deco-t">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/images/about-page/deco-t.png" alt="">
                            </div>
                            <div class="block-contact-wrp_deco-b">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/images/about-page/deco-b.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>

        <div class="multi-section_deco">
            <img src="<?php echo get_template_directory_uri(); ?>/build/images/about-page/a-deco-line.png" alt="" class="img-fluid">
        </div>

        <div class="multi-section_bird">
			<img src="<?php echo get_template_directory_uri(); ?>/build/images/bird1.svg" alt="" class="img-fluid">
		</div>

    </section>

    <!-- <section class="padd"></section> -->

    


<?php get_footer(); ?>