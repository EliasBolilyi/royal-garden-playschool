<?php
/*
Template Name: Video
*/
?>

<?php get_header(); ?>


    <section class="video-traslation video-traslation_p">

        <div class="account__title account__title_p-video">Онлайн трансляция</div>
        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-4 col-6">
                    <div class="video-traslation-item" data-toggle="modal" data-target="#cam1">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/account/video.jpg" alt="">
                        <div class="video-traslation-item__title">Камера 1</div>
                        <div class="video-traslation-item__group">Комната Солнышко</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="video-traslation-item" data-toggle="modal" data-target="#cam1">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/account/video.jpg" alt="">
                        <div class="video-traslation-item__title">Камера 1</div>
                        <div class="video-traslation-item__group">Комната Солнышко</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="video-traslation-item" data-toggle="modal" data-target="#cam1">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/account/video.jpg" alt="">
                        <div class="video-traslation-item__title">Камера 1</div>
                        <div class="video-traslation-item__group">Комната Солнышко</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="video-traslation-item" data-toggle="modal" data-target="#cam1">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/account/video.jpg" alt="">
                        <div class="video-traslation-item__title">Камера 1</div>
                        <div class="video-traslation-item__group">Комната Солнышко</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="video-traslation-item" data-toggle="modal" data-target="#cam1">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/account/video.jpg" alt="">
                        <div class="video-traslation-item__title">Камера 1</div>
                        <div class="video-traslation-item__group">Комната Солнышко</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="video-traslation-item" data-toggle="modal" data-target="#cam1">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/account/video.jpg" alt="">
                        <div class="video-traslation-item__title">Камера 1</div>
                        <div class="video-traslation-item__group">Комната Солнышко</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="video-traslation-item" data-toggle="modal" data-target="#cam1">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/account/video.jpg" alt="">
                        <div class="video-traslation-item__title">Камера 1</div>
                        <div class="video-traslation-item__group">Комната Солнышко</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="video-traslation-item" data-toggle="modal" data-target="#cam1">
                        <img src="<?php echo get_template_directory_uri(); ?>/build/images/account/video.jpg" alt="">
                        <div class="video-traslation-item__title">Камера 1</div>
                        <div class="video-traslation-item__group">Комната Солнышко</div>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <!-- Modal Video  -->
    <div class="modal fade" id="cam1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog video-cam-w  modal-dialog-centered" role="document">
            <div class="modal-content">

                <button type="button" class="form-close" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri(); ?>/build/images/close-pop.svg" alt="" class="form-close-btn">
                </button>

                <div class="modal-body video-cam">
                    
                    <video width="100%" height="100%" autoplay="autoplay" muted loop>
                        <source src="<?php echo get_template_directory_uri(); ?>/build/images/main-block-video.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    </video>

                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>