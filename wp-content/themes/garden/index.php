<?php get_header(); ?>

	<section class="main-video-block main-video-block_h">

		<video width="100%" height="100%" autoplay="autoplay" muted loop>
			<source src="<?php echo get_template_directory_uri(); ?>/build/images/main-block-video.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
		</video>

		<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/poster.jpg" alt="" class="img-fluid video-block-poster_tab">

		<h1 class="main-video-block__title"><?php the_title(); ?></h1>

		<div class="main-video-block__btn primary-btn primary-btn_red" data-toggle="modal" data-target="#leaveAppli">ЗАПИСАТЬСЯ</div>

		<div class="main-video-block_decore">
			<!-- <img src="build/images/wave.png" alt="" class="img-fluid"> -->
			
			<svg fill="none" viewBox="0 0 1440 161" xmlns="http://www.w3.org/2000/svg">
			<path d="m721.02 55.059c-468.02-75.559-650.54-38.145-721.02-16.893v122.83h1440v-160.98c-194.82 78.469-497 90.873-718.98 55.036z" fill="#fff"/>
			</svg>
		</div>
			

	</section>

	<section class="main-description-block main-description-block_padd">

		<div class="main-description-block_bird">
			<img src="<?php echo get_template_directory_uri(); ?>/build/images/bird1.svg" alt="" class="img-fluid">
		</div>

		<div class="container">
			<h2 class="main-title main-title_padd">Описание</h2>

			<div class="description-text-wrp">
				<div class="row no-gutters">
					<div class="offset-xl-1 col-xl-5 offset-lg-1 col-lg-5 offset-md-1 col-md-5 offset-1 col-11">

						<div class="description-text description-text_border">
							<?php the_field('main-text_pt1'); ?>
						</div>

					</div>
					<div class="offset-xl-1 col-xl-5 offset-lg-1 col-lg-5 offset-md-1 col-md-5 offset-1 col-11">

						<div class="description-text">
							<?php the_field('main-text_pt2'); ?>
						</div>

					</div>
				</div>
			</div>

			<div class="row justify-content-center no-gutters">
				<div class="col-xl-11">
					<div class="description-numb-wrp">

						<div class="description-numb">
							<div class="description-numb__item-wrp">
								<div class="description-numb__item">
									56 
									<span>m<sup>2</sup></span>
								</div>
								<div class="description-numb__text description-numb__text_padd">Площадь територии</div>
							</div>
							<div class="description-numb__item-wrp">
								<div class="description-numb__item">
									8
								</div>
								<div class="description-numb__text description-numb__text_padd">Количество групп</div>
							</div>
							<div class="description-numb__item-wrp">
								<div class="description-numb__item">
									15 
									<span>ч</span>
								</div>
								<div class="description-numb__text description-numb__text_padd">Количество детей в группе</div>
							</div>
							<div class="description-numb__item-wrp">
								<div class="description-numb__item">
									40
									<span>лет</span>
								</div>
								<div class="description-numb__text description-numb__text_padd">Опыт в педагогике</div>
							</div>
							
							<!-- <div class="description-numb__item">
								8
								<div class="description-numb__text">Площадь територии</div>
							</div>
							<div class="description-numb__item">
								15
								<span>ч</span>
							</div>
							<div class="description-numb__item">
								40
								<span>лет</span>
							</div> -->
						</div>
						<div class="description-numb_line description-numb_line1">
							<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/line1.svg" alt="">
						</div>
						<div class="description-numb_line description-numb_line2">
							<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/line2.svg" alt="">
						</div>
						<div class="description-numb_line description-numb_line3">
							<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/line1.svg" alt="">
						</div>

		
					</div>
				</div>
			</div>
			
			
		</div>
	</section>

	<section class="accordion-block">
		<div class="accordion">
			<ul>
				<li tabindex="1">
					<div>
						<h2 class="accordion__name">Экологичность</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ,Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					</div>
				</li>
				<li tabindex="2">
					<div>
						<h2 class="accordion__name">Правильное питание</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ,Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					</div>
				</li>
				<li tabindex="3">
					<div>
						<h2 class="accordion__name">Англоязычный персонал</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ,Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					</div>
				</li>
				<li tabindex="4">
					<div>
						<h2 class="accordion__name">Видео наблюдение</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ,Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					</div>
				</li>
				<li tabindex="5">
					<div>
						<h2 class="accordion__name">Закрытые группы</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ,Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit</p>
					</div>
				</li>
			</ul>
		</div>

		<div class="accordion-block_decore-t">
			<svg fill="none" viewBox="0 0 1440 157" xmlns="http://www.w3.org/2000/svg">
			<path d="m718.48 105.94c365.52 64.06 650.98 57.312 721.52 36.06v-142l-1441-1.4124e-4 -1.3e-5 142c194.95-78.468 538-67.864 719.48-36.06z" fill="#fff"/>
			</svg>				
		</div>
		<div class="accordion-block_decore-b">
			<svg fill="none" viewBox="0 0 1440 157" xmlns="http://www.w3.org/2000/svg">
			<path d="m721.52 51.005c-365.52-64.06-650.99-57.312-721.52-36.06l2.6971e-4 142h1441v-142c-194.95 78.469-538 67.864-719.48 36.06z" fill="#fff"/>
			</svg>	
		</div>


	</section>

	<section class="team-idividual">

		<div class="container">

			<div class="team team_padd">
				<h2 class="main-title main-title_padd-team main-title_center">Наша команда</h2>
				<div class=" cols">
					<div class="col-team" ontouchstart="this.classList.toggle('hover');">
						<div class="team-container-wrp">
							<div class="front" style="background-image: url('http://localhost:8888/royal-garden-playschool/wp-content/themes/garden/build/images/main-page/pers2.jpg')">
								<div class="inner">
									<span>Имя Фамилия</span>
								</div>
							</div>
							<div class="back">
								<div class="inner2">
									<span>Имя Фамилия</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet.
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-team" ontouchstart="this.classList.toggle('hover');">
						<div class="team-container-wrp">
							<div class="front" style="background-image: url('http://localhost:8888/royal-garden-playschool/wp-content/themes/garden/build/images/main-page/pers1.jpg')">
								<div class="inner">
									<span>Имя Фамилия</span>
								</div>
							</div>
							<div class="back">
								<div class="inner2">
									<span>Имя Фамилия</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet.
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-team hidden_tab" ontouchstart="this.classList.toggle('hover');">
						<div class="team-container-wrp">
							<div class="front" style="background-image: url('http://localhost:8888/royal-garden-playschool/wp-content/themes/garden/build/images/main-page/pers2.jpg')">
								<div class="inner">
									<span>Имя Фамилия</span>
								</div>
							</div>
							<div class="back">
								<div class="inner2">
									<span>Имя Фамилия</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
											Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet.
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hvr-sweep-to-top sec-btn sec-btn-team_padd ">Смотреть больше</div>
			</div>
			
		</div>

		<div class="individual-wraper">

			<div class="container">

				<div class="idividual idividual_padd">
					<h2 class="main-title main-title_padd-idiv main-title_center">Индивидуальный подход к каждому</h2>
					<div class="row no-gutters justify-content-center">
						<div class="col-xl-4 col-lg-4 col-md-4 hidden_mob">
							<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/idni1.png" alt="" class="img-fluid idividual-mg_desc">
							<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/main-indi-1-mob.png" alt="" class="img-fluid idividual-mg_mob">
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 align-self-center">
							<div class="idividual-item">
								<h3 class="idividual-item__name idividual-item__name_padd">Наш подход</h3>
								<ul class="idividual-item__list">
									<li class="idividual-item__list-item">Встреча с преподавателем</li>
									<li class="idividual-item__list-item">Тестирование ребенка</li>
									<li class="idividual-item__list-item">Подбор индивидуальной питания</li>
									<li class="idividual-item__list-item">Подписание договора</li>
								</ul>
								<div class="idividual-item__text">
										Запишись к нам <br>
										на экскурсию с директором
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 hidden_mob">
							<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/indi2.png" alt="" class="img-fluid idividual-mg_desc">
							<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/main-indi-2-mob.png" alt="" class="img-fluid idividual-mg_mob">
						</div>
					</div>
					<div class="dividual-item__btn primary-btn " data-toggle="modal" data-target="#leaveAppli">ЗАПИСАТЬСЯ</div>
				</div>
			
			</div>

			<div class="individual-wraper_bg">
				<svg fill="none" viewBox="0 0 1440 161" xmlns="http://www.w3.org/2000/svg">
				<path d="m721.02 55.059c-468.02-75.559-650.54-38.145-721.02-16.893v122.83h1440v-160.98c-194.82 78.469-497 90.873-718.98 55.036z" fill="#f4f4f4"/>
				</svg>
			</div>

		</div>

		<div class="team-idividual_bird">
			<img src="<?php echo get_template_directory_uri(); ?>/build/images/bird1.svg" alt="" class="img-fluid">
		</div>
		<div class="team-idividual-line">

			<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/team-line.png" alt="" class="team-idividual-line_desc">
			<img src="<?php echo get_template_directory_uri(); ?>/build/images/main-page/team-line_mob.png" alt="" class="team-idividual-line_mob">
				
		</div>

	</section>

<?php get_footer(); ?>