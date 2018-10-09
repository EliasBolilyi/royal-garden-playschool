<?php
/*
Template Name: Meal page
*/
?>

<?php get_header(); ?>

    <section class="meal-slider-wrp">

        <div class="meal-slider meal-slider_p">

            <?php $pc = new WP_Query('cat=6&orderby=date&posts_per_page=20'); ?>
            <?php while ($pc->have_posts()) : $pc->the_post(); ?>
                <div class="meal-slider-item">

                    
                    <div class="container">
                        <div class="row meal-slider-item_h">
                            <div class="col-lg-6 col-md-8 col-sm-12 align-self-center">

                                <h2 class="meal-slider-item__name"><?php the_title(); ?></h2>
                                <div class="meal-slider-item__text"><?php the_content(); ?></div>

                            </div>
                        </div>
                    </div>

                    <div class="meal-slider-item__img">
                        <?php echo the_post_thumbnail('full', array('class' => '')) ?>
                    </div>
                    
                </div>
            <?php endwhile; ?> 
            <?php wp_reset_postdata(); // reset the query ?>

        </div>

        <div class="meal-slider-nav">

            <?php $pc = new WP_Query('cat=6&orderby=date&posts_per_page=20'); ?>
            <?php while ($pc->have_posts()) : $pc->the_post(); ?>
                <div class="about-nav-item">
                    <?php echo the_post_thumbnail('full', array('class' => '')) ?>
                    <div class="about-nav-item__name"><?php the_title(); ?></div>
                </div>
            <?php endwhile; ?> 
            <?php wp_reset_postdata(); // reset the query ?>

        </div>

    </section>

    <section class="meal-eco-prod meal-eco-prod_p">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-2 col-md-6">
                    <div class="meal-eco-prod__quote">
                        Вже давно відомо, що читабельний зміст буде заважати зосередитись людині.
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 offset-lg-1 order-sm-0 order-1">
                    <h2 class="meal-eco-prod__title meal-eco-prod__title_p">Блюда из экологическогих продуктов</h2>
                    <div class="meal-eco-prod__text">
                     Вже давно відомо, що читабельний зміст буде заважати зосередитись людині,
                     яка оцінює композицію сторінки. Сенс використання Lorem Ipsum полягає в тому, 
                     що цей текст має більш-менш нормальне розподілення літер на відміну від, 
                     наприклад, "Тут іде текст. Тут іде текст." 
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 offset-lg-1 order-sm-1 order-0">
                    <div class="meal-eco-prod__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/meal/meal-about.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="meal-about meal-about_p">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-md-12">
                    <div class="meal-about-m">
                        <div class="meal-about-m__img">
                            <img src="<?php the_field('chef-f'); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="meal-about-m__wrp">
                            <div class="meal-about-m__title meal-about-m__title_p">Повар</div>
                            <div class="meal-about-m__text"><?php the_field('chef-t'); ?></div>
                        </div> 
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 offset-lg-1">

                    <div class="row">

                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="row">

                                <div class="col-lg-4 col-md-6 col-6">
                                    <div class="meal-about-s__img">
                                        <img src="<?php the_field('kitchen-f'); ?>" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6 col-6">
                                    <div class="meal-about-s__title ">Кухня</div>
                                    <div class="meal-about-s__text"><?php the_field('kitchen-t'); ?></div>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <div class="row">

                                <div class="col-lg-4 col-md-6 col-6 order-sm-0 order-1">
                                    <div class="meal-about-s__img">
                                        <img src="<?php the_field('food-f'); ?>" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6 col-6 order-sm-1 order-0">
                                    <div class="meal-about-s__title meal-about-s__title_l">Еда</div>
                                    <div class="meal-about-s__text meal-about-s__text_l"><?php the_field('food-t'); ?></div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-12 col-md-9 col-sm-12">

                            <div class="row">

                                <div class="col-lg-4 col-md-4 col-6">
                                    <div class="meal-about-s__img">
                                        <img src="<?php the_field('tools-f'); ?>" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-6">
                                    <div class="meal-about-s__title">Оборудование на кухне</div>
                                    <div class="meal-about-s__text"><?php the_field('tools-t'); ?></div>
                                </div>

                            </div>

                        </div>
                        

                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="meal-sign-up meal-sign-up_p">

        <div class="container">

            <div class="row no-gutters align-items-center">
            
                <div class="col-md-3 col-sm-12">
                    <div class="meal-sign-up__name">Записаться</div>
                    <div class="meal-sign-up__text">Вже давно відомо, що читабельний зміст буде заважати зосередитись людині.</div>
                </div>

                <div class="col-lg-8 col-md-12 offset-lg-1">

                        <?php echo do_shortcode('[contact-form-7 id="121"]'); ?>

                </div>

            </div>

        </div>

    </section>

<?php get_footer(); ?>