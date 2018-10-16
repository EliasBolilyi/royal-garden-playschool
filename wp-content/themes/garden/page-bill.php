<?php
/*
Template Name: Bill
*/
?>

<?php get_header(); ?>


    <section class="bill bill_p">

        <div class="container">

            <div class="bill-wrp">

                <h2 class="account__title account__title_bill-p">Расчеты</h2>
            
                <div class="row bill-row_p align-items-center">
                    <div class="col-lg-6 col-md-4 col-4">
                        <div class="bill__title">Ежемесячная оплата</div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-8">

                        <div class="bill__item">
                            <div class="bill__text">Дата</div>
                            <div class="bill__number">01/12/2018</div>
                        </div>
                        <div class="bill__item">
                            <div class="bill__text">Сумма</div>
                            <div class="bill__number">2 000 $</div>
                        </div>
                        
                    </div>
                </div>
                <div class="row bill-row_p align-items-center">
                    <div class="col-lg-6 col-md-4 col-4">
                        <div class="bill__title">Оплачено</div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-8">

                        <div class="bill__item">
                            <div class="bill__text">Дата</div>
                            <div class="bill__number">01/12/2018</div>
                        </div>
                        <div class="bill__item">
                            <div class="bill__text">Сумма</div>
                            <div class="bill__number">2 000 $</div>
                        </div>
                        
                    </div>
                </div>
                <div class="row bill-row_p-top align-items-center">
                    <div class="col-lg-6 col-md-4 col-4">
                        <div class="bill__title">Задолженность</div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-8">

                        <div class="bill__item"></div>
                        <div class="bill__item">
                            <div class="bill__text">Сумма</div>
                            <div class="bill__number">0 $</div>
                        </div>
                        
                    </div>
                </div>

            </div>

        </div>

    </section>


<?php get_footer(); ?>