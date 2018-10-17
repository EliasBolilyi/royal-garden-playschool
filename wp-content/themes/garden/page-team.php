<?php
/*
Template Name: Team
*/
?>

<?php get_header(); ?>

    <section class="team-first-block">

        <img src="<?php echo get_template_directory_uri(); ?>/build/images/team/bg.jpg" >

        <div class="team-first-block-text">

            <h2 class="team-first-block-text__title">Team</h2>
            <div class="team-first-block-text__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
            </div>
            <div class="team-first-block-text__btn primary-btn" data-toggle="modal" data-target="#team">Присоединяйся</div>

        </div>        

    </section>

    <section class="team-people team-people_p">

        <div class="container">

            <div class="row">

                <?php $pc = new WP_Query('cat=11&orderby=date&posts_per_page=20'); ?>
                <?php while ($pc->have_posts()) : $pc->the_post(); ?>
                    <div class="col-lg-3 col-md-6 col-6">

                        <div class="team-people-wrp">
                            <?php echo the_post_thumbnail('full', array('class' => '')) ?>
                            <div class="team-people-wrp__name"><?php the_title(); ?></div>
                            <div class="team-people-wrp__job"><?php the_field('job'); ?></div>
                            <div class="team-people-wrp__btn hvr-sweep-to-top sec-btn" data-toggle="modal" data-target="#team-part-<?php the_ID(); ?>">Подробнее</div>
                        </div>

                    </div>
                <?php endwhile; ?> 
                <?php wp_reset_postdata(); // reset the query ?>

            </div>

        </div>

        <?php $pc = new WP_Query('cat=11&orderby=date&posts_per_page=20'); ?>
        <?php while ($pc->have_posts()) : $pc->the_post(); ?>
            <div class="modal fade" id="team-part-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog form-pop-dialog modal-dialog-centered" role="document">

                    <div class="modal-content form-modal-content">

                        <button type="button" class="form-close" data-dismiss="modal" aria-label="Close">
                            <img src="<?php echo get_template_directory_uri(); ?>/build/images/close-pop.svg" alt="" class="form-close-btn">
                        </button>

                        <div class="modal-body">
                            <div class="main-cont">
                                <?php echo the_post_thumbnail('full', array('class' => 'img-fluid team-people-wrp__img')) ?>
                                <div class="team-people-wrp__name"><?php the_title(); ?></div>
                                <div class="team-people-wrp__job team-people-wrp__job_l"><?php the_content(); ?></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        <?php endwhile; ?> 
        <?php wp_reset_postdata(); // reset the query ?>

    </section>

    <section class="team-part team-part_p">

        <h2 class="team-part-title">Ты можешь стать частью нашей команды</h2>

        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-6 col-6 align-self-start order-lg-0 team-part_hidden-tab">
                    <img src="<?php echo get_template_directory_uri(); ?>/build/images/team/job-1.jpg" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-12 align-self-center order-lg-1 order-md-1 order-1">
                    <div class="team-part-item">
                        <h3 class="team-part-item__title">Оглавление</h3>
                        <div class="team-part-item__text">
                            Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, 
                            яка оцінює композицію сторінки. Сенс використання Lorem Ipsum полягає в тому, 
                            що цей текст має більш-менш нормальне розподілення літер на відміну від, наприклад, 
                            "Тут іде текст. Тут іде текст." 
                        </div>
                        <a target="_blank" href="https://rabota.ua/" class="primary-btn team-part-item__btn">Вакансии</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 align-self-lg-end align-self-center order-lg-2 order-md-0 order-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/build/images/team/job-2.jpg" class="img-fluid">
                </div>

            </div>

        </div>

    </section>


    <!-- Modal leaveAppli  -->
    <div class="modal fade" id="team" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog form-pop-dialog modal-dialog-centered" role="document">

            <div class="modal-content form-modal-content">

                <button type="button" class="form-close" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/build/images/close-pop.svg" alt="" class="form-close-btn">
                </button>

                <div class="modal-body">
                    <div class="main-cont">
                        <form action="">

                            <h3 class="form-modal__name form-modal__name_padd">Стань частью команды</h3>
                            <!-- <input type="text" placeholder="Имя" class="form-input">
                            <input type="text" placeholder="Фамилия" class="form-input">
                            <input type="text" placeholder="Отчество" class="form-input">
                            <input type="text" placeholder="Телефон" class="form-input">

                            <input type="text" placeholder="Профессия" class="form-input form-input_50">
                            <input type="text" placeholder="Возраст" class="form-input form-input_50">

                            <input type="submit" placeholder="Отправить" value="Отправить" class="form-input-submit primary-btn"> -->

                            <?php echo do_shortcode('[contact-form-7 id="293"]'); ?>

                        </form>
                    </div>

                    <div class="sub-cont hidden">
                        <div class="form-modal__name form-modal__name_padd-s">Спасибо за заявку</div>
                        <div class="form-modal__name-small">Администратор свяжется с вами в течение часа</div>
                    </div>
                </div>

            </div>

        </div>
    </div>



<?php get_footer(); ?>