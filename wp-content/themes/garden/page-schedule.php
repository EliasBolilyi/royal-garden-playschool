<?php
/*
Template Name: Schedule
*/
?>

<?php get_header(); ?>

    <section class="schedule-wrp">

        <div class="schedule schedule_p">
            
            <div class="container">

                <h2 class="schedule-name schedule-name_p">Расписание</h2>

                <?php if ( get_field('hide-1') == true ) { ?>
                <?php } else { ?>

                    <div class="schedule-item">
                        <?php the_field('time-1'); ?>
                        <div class="schedule-item-wrp schedule-item-wrp_r">
                            <div class="schedule-item__arr">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/images/schedule/line-red.png" alt="">
                            </div>
                            <div class="schedule-item__text"><?php the_field('name-1'); ?></div>
                        </div>      
                    </div>
                
                <?php } ?>

                <?php if ( get_field('hide-2') == true ) { ?>
                <?php } else { ?>

                    <div class="schedule-item">
                        <?php the_field('time-2'); ?>
                        <div class="schedule-item-wrp schedule-item-wrp_l">
                            <div class="schedule-item__arr">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/images/schedule/line-red.png" alt="">
                            </div>
                            <div class="schedule-item__text"><?php the_field('name-2'); ?></div>
                        </div>      
                    </div>
         
                <?php } ?>

                <?php if ( get_field('hide-3') == true ) { ?>
                <?php } else { ?>

                    <div class="schedule-item">
                        <?php the_field('time-3'); ?>
                        <div class="schedule-item-wrp schedule-item-wrp_r">
                            <div class="schedule-item__arr">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/images/schedule/line-red.png" alt="">
                            </div>
                            <div class="schedule-item__text"><?php the_field('name-3'); ?></div>
                        </div>      
                    </div>
                
                <?php } ?>

                <?php if ( get_field('hide-4') == true ) { ?>
                <?php } else { ?>

                    <div class="schedule-item">
                        <?php the_field('time-4'); ?>
                        <div class="schedule-item-wrp schedule-item-wrp_l">
                            <div class="schedule-item__arr">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/images/schedule/line-red.png" alt="">
                            </div>
                            <div class="schedule-item__text"><?php the_field('name-4'); ?></div>
                        </div>      
                    </div>

                <?php } ?>

                <?php if ( get_field('hide-5') == true ) { ?>
                <?php } else { ?>
                
                    <div class="schedule-item">
                        <?php the_field('time-5'); ?>
                        <div class="schedule-item-wrp schedule-item-wrp_r">
                            <div class="schedule-item__arr">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/images/schedule/line-red.png" alt="">
                            </div>
                            <div class="schedule-item__text"><?php the_field('name-5'); ?></div>
                        </div>      
                    </div>
ё
                <?php } ?>

                <?php if ( get_field('hide-6') == true ) { ?>
                <?php } else { ?>

                    <div class="schedule-item">
                        <?php the_field('time-6'); ?>
                        <div class="schedule-item-wrp schedule-item-wrp_l">
                            <div class="schedule-item__arr">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/images/schedule/line-red.png" alt="">
                            </div>
                            <div class="schedule-item__text"><?php the_field('name-6'); ?></div>
                        </div>      
                    </div>

                <?php } ?>

                <?php if ( get_field('hide-7') == true ) { ?>
                <?php } else { ?>

                    <div class="schedule-item">
                        <?php the_field('time-7'); ?>
                        <div class="schedule-item-wrp schedule-item-wrp_r">
                            <div class="schedule-item__arr">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/images/schedule/line-red.png" alt="">
                            </div>
                            <div class="schedule-item__text"><?php the_field('name-7'); ?></div>
                        </div>      
                    </div>

                <?php } ?>

                <?php if ( get_field('hide-8') == true ) { ?>
                <?php } else { ?>

                    <div class="schedule-item">
                        <?php the_field('time-8'); ?>
                        <div class="schedule-item-wrp schedule-item-wrp_l">
                            <div class="schedule-item__arr">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/images/schedule/line-red.png" alt="">
                            </div>
                            <div class="schedule-item__text"><?php the_field('name-8'); ?></div>
                        </div>      
                    </div>

                <?php } ?>

                <?php if ( get_field('hide-9') == true ) { ?>
                <?php } else { ?>

                    <div class="schedule-item">
                        <?php the_field('time-9'); ?>
                        <div class="schedule-item-wrp schedule-item-wrp_r">
                            <div class="schedule-item__arr">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/images/schedule/line-red.png" alt="">
                            </div>
                            <div class="schedule-item__text"><?php the_field('name-9'); ?></div>
                        </div>      
                    </div>

                <?php } ?>

                <?php if ( get_field('hide-10') == true ) { ?>
                <?php } else { ?>

                    <div class="schedule-item">
                        <?php the_field('time-10'); ?>
                        <div class="schedule-item-wrp schedule-item-wrp_l">
                            <div class="schedule-item__arr">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/images/schedule/line-red.png" alt="">
                            </div>
                            <div class="schedule-item__text"><?php the_field('name-10'); ?></div>
                        </div>      
                    </div>

                <?php } ?>

                <?php if ( get_field('hide-11') == true ) { ?>
                <?php } else { ?>

                <div class="schedule-item">
                    <?php the_field('time-11'); ?>
                    <div class="schedule-item-wrp schedule-item-wrp_r">
                        <div class="schedule-item__arr">
                            <img src="<?php echo get_template_directory_uri(); ?>/build/images/schedule/line-red.png" alt="">
                        </div>
                        <div class="schedule-item__text"><?php the_field('name-11'); ?></div>
                    </div>      
                </div>

                <?php } ?>

                <?php if ( get_field('hide-12') == true ) { ?>
                <?php } else { ?>

                    <div class="schedule-item">
                        <?php the_field('time-12'); ?>
                        <div class="schedule-item-wrp schedule-item-wrp_l">
                            <div class="schedule-item__arr">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/images/schedule/line-red.png" alt="">
                            </div>
                            <div class="schedule-item__text"><?php the_field('name-12'); ?></div>
                        </div>      
                    </div>
                
                <?php } ?>

                <?php if ( get_field('hide-13') == true ) { ?>

                    <div class="schedule-item">
                        <?php the_field('time-13'); ?>
                        <div class="schedule-item-wrp schedule-item-wrp_r">
                            <div class="schedule-item__arr">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/images/schedule/line-red.png" alt="">
                            </div>
                            <div class="schedule-item__text"><?php the_field('name-13'); ?></div>
                        </div>      
                    </div>

                <?php } ?>

                <?php if ( get_field('hide-14') == true ) { ?>
                <?php } else { ?>

                    <div class="schedule-item">
                        <?php the_field('time-14'); ?>
                        <div class="schedule-item-wrp schedule-item-wrp_l">
                            <div class="schedule-item__arr">
                                <img src="<?php echo get_template_directory_uri(); ?>/build/images/schedule/line-red.png" alt="">
                            </div>
                            <div class="schedule-item__text"><?php the_field('name-14'); ?></div>
                        </div>      
                    </div>

                <?php } ?>

            </div>

        </div>

        <div class="extra-lessons extra-lessons_p">

            <div class="container">

                <h2 class="schedule-name schedule-name_p">Дополнительные занятия</h2>

                <div class="row">

                <?php $pc = new WP_Query('cat=7&orderby=date&posts_per_page=20'); ?>
                <?php while ($pc->have_posts()) : $pc->the_post(); ?>
                    <div class="col-lg-6 col-md-12">
                        <div class="extra-lessons-item">
                            <div class="extra-lessons-item__name"><?php the_title(); ?></div>
                            <div class="extra-lessons-item-wrp">
                                <div class="extra-lessons-item-wrp__line"></div>
                                <div class="extra-lessons-item-wrp__text">
                                    <div><?php the_field('day'); ?></div>
                                    <div><?php the_field('time'); ?></div>
                                </div>
                                <div class="extra-lessons-item-wrp__text">
                                    <div><?php the_field('name'); ?></div>
                                    <div><?php the_field('surname'); ?></div>
                                </div>
                            </div>
                            <div class="extra-lessons-item__btn hvr-sweep-to-top sec-btn" data-toggle="modal" data-target="#leaveAppli">Записаться</div>
                        </div>
                    </div>
                <?php endwhile; ?> 
                <?php wp_reset_postdata(); // reset the query ?>

                </div>

            </div>

            <div class="extra-lessons__bird">
                <img src="<?php echo get_template_directory_uri(); ?>/build/images/bird1.svg" alt="" class="img-fluid">
            </div>

        </div>

        <div class="schedule-contact_p block-contact block-contact_p">

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

        <div class="schedule-wrp__line">
            <img src="<?php echo get_template_directory_uri(); ?>/build/images/schedule/schedule-line.png" alt="" class="img-fluid schedule-wrp__line_d">
            <img src="<?php echo get_template_directory_uri(); ?>/build/images/schedule/schedule-line-m.png" alt="" class="img-fluid schedule-wrp__line_m">
        </div>

    </section>

<?php get_footer(); ?>