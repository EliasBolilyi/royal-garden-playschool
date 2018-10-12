<?php
/*
Template Name: Coast
*/
?>

<?php get_header(); ?>


    <section class="servises servises_p">

        <div class="container">

            <div class="servises-name servises-name_p">Услуги и цены</div>

            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12">

                    <div class="servises-item servises-item_p" data-toggle="modal" data-target="#leaveAppli">

                        <div class="servises-item__pack">Пакет</div>
                        <div class="servises-item__name">Полный день</div>
                        <div class="servises-item__time"><?php the_field('time'); ?></div>
                        
                        <div class="servises-item__text"><?php the_field('text'); ?></div>

                        <div class="primary-btn servises-item__btn" data-toggle="modal" data-target="#leaveAppli">ЗАПИСАТЬСЯ</div>
                        <div class="servises-item__btn"></div>

                    </div>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">

                    <div class="servises-item servises-item_p">

                        <div class="servises-item__pack">Пакет</div>
                        <div class="servises-item__name">Неполный день</div>
                        <div class="servises-item__time"><?php the_field('time-2'); ?></div>
                        
                        <div class="servises-item__text"><?php the_field('text-2'); ?></div>

                        <div class="primary-btn servises-item__btn" data-toggle="modal" data-target="#leaveAppli">ЗАПИСАТЬСЯ</div>
                        <div class="servises-item__btn"></div>

                    </div>

                </div>

            </div>

        </div>

        <div class="servises__bird">
            <img src="<?php echo get_template_directory_uri(); ?>/build/images/bird1.svg" alt="" class="img-fluid">
        </div>

    </section>

    <section class="extra-servises extra-servises_p">
        
        <div class="container">

            <div class="servises-name servises-name_p">Дополнительные кружки</div>

            <?php $pc = new WP_Query('cat=8&orderby=date&posts_per_page=20'); ?>
            <?php while ($pc->have_posts()) : $pc->the_post(); ?>

            <div class="extra-yoga-item" data-toggle="modal" data-target="#leaveAppli">

                <div class="row   extra-yoga_p align-items-center">

                <div class="col-lg-4 col-md-12">
                    <div class="extra-yoga__img">
                        <?php echo the_post_thumbnail('full', array('class' => 'img-fluid')) ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <div class="extra-yoga__name"><?php the_title(); ?></div>
                    <div class="extra-yoga__text"><?php the_field('desc-1'); ?></div>
                    <div class="primary-btn extra-yoga__btn">ЗАПИСАТЬСЯ</div>
                </div>
                <div class="col-lg-4 col-md-6 col-6">
                    <div class="extra-yoga__text-2"><?php the_field('desc-2'); ?></div>
                </div>

                </div>

            </div>

            <?php endwhile; ?> 
            <?php wp_reset_postdata(); // reset the query ?>

            <!-- <div class="extra-yoga-item" data-toggle="modal" data-target="#leaveAppli">
            
                <div class="row extra-yoga-item align-items-center">
                
                    <div class="col-lg-4 col-md-6 col-6 order-lg-0 order-1">
                        <div class="extra-yoga__name">Логопед</div>
                        <div class="extra-yoga__text">Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, 
                            яка оцінює композицію сторінки. 
                            Сенс використання Lorem Ipsum полягає в тому, що цей текст має більш-менш нормальне.
                        </div>
                        <div class="primary-btn extra-yoga__btn" data-toggle="modal" data-target="#leaveAppli">ЗАПИСАТЬСЯ</div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 order-lg-1 order-2">
                        <div class="extra-yoga__text-2">
                            Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, 
                            яка оцінює композицію сторінки. 
                            Сенс використання Lorem Ipsum полягає в тому, що цей текст має більш-менш нормальне.
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 order-lg-2 order-0">
                        <div class="extra-yoga__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/build/images/coast/coast-2.jpg" alt="" class="img-fluid">
                        </div>
                    </div>

                </div>

            </div> -->

        </div>

    </section>


<?php get_footer(); ?>