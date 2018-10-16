<?php
/*
Template Name: Account
*/
?>

<?php get_header(); ?>

    <section class="account account_p">

        <div class="account__title">Личный кабинет</div>

        <div class="container">

            <div class="row">

                <div class="col-lg-6">
                    <div class="account-item">

                        <div class="account-item__title">Онлайн трансляция</div>
                        <div class="account-item__text">
                            Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, яка оцінює композицію сторінки.
                        </div>
                        <div class="account-item__btn hvr-sweep-to-top sec-btn">Подробнее</div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="account-item">

                        <div class="account-item__title">Расчеты</div>
                        <div class="account-item__text">
                            Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, яка оцінює композицію сторінки.
                        </div>
                        <div class="account-item__btn hvr-sweep-to-top sec-btn">Подробнее</div>

                    </div>
                </div>

            </div>


        </div>

        <div class="account-tree">
            <img src="<?php echo get_template_directory_uri(); ?>/build/images/account/three.png" alt="">
        </div>
        <div class="account-bird">
            <img src="<?php echo get_template_directory_uri(); ?>/build/images/account/bird.png" alt="">
        </div>

    </section>


<?php get_footer(); ?>