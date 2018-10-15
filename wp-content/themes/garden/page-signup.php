<?php
/*
Template Name: Sign-up
*/
?>

<?php get_header(); ?>

    <section class="signup-bg">
        <img src="<?php echo get_template_directory_uri(); ?>/build/images/signup/signup.jpg" alt="">
    </section>


    <section class="signup-form signup-form_p">
        
        <div class="container">

            <div class="signup-form-wrp">

                <h2 class="signup-form-title signup-form-title_p">Записать ребенка</h2>

                <!-- <form action="">

                    <div class="signup-form-item signup-form-item_p">

                        <h3 class="signup-form-item-title signup-form-item-title_p">Родители</h3>
                        
                        <input type="text" placeholder="Имя" class="form-input signup-form-33">
                        <input type="text" placeholder="Фамилия" class="form-input signup-form-33">
                        <input type="text" placeholder="Отчество" class="form-input signup-form-33">
                        <input type="text" placeholder="E-mail" class="form-input signup-form-33">
                        <input type="text" placeholder="Телефон" class="form-input signup-form-33">

                    </div>

                    <div class="signup-form-item">

                        <h3 class="signup-form-item-title signup-form-item-title_p">Ребенок</h3>

                        <input type="text" placeholder="Имя" class="form-input signup-form-33">
                        <input type="text" placeholder="Фамилия" class="form-input signup-form-33">
                        <input type="text" placeholder="Отчество" class="form-input signup-form-33">
                        <input type="text" placeholder="Возраст ребенка" class="form-input signup-form-33">
                        <textarea name="" placeholder="Коментарий"  rows="7" class="form-input form-input-textarea"></textarea>

                        <div class="signup-form__checkbox">

                            <input type="checkbox"  class="form-input-checkbox">
                            <span class="signup-form__checkbox-text">Я согласен с обработкой моих персональных данных</span>

                        </div>

                    </div>

                    <input type="submit" placeholder="Зарегистрировать" value="Отправить" class="form-input-submit signup-form primary-btn">

                </form> -->

                <?php echo do_shortcode('[contact-form-7 id="217"]'); ?>


            </div>

        </div>

        <div class="signup-form__bird">
            <img src="<?php echo get_template_directory_uri(); ?>/build/images/signup/signup-bird.jpg" alt="">
        </div>

    </section>



<?php get_footer(); ?>