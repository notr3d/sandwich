<?php get_header(); ?>
<div class="content-area">
	<main class="" role="main">
		<section class="controls">
			<div class="controls__wrapper lcw">
				<div class="controls__item">
					<h2>Сэндвич панели</h2>
					<button id="button-1" class="controls__button">Перейти</button>
				</div>
				<div class="controls__item">
					<h2>Профлист</h2>
					<button id="button-2" class="controls__button">Перейти</button>
				</div>
				<div class="controls__item">
					<h2>Горячее цинкование</h2>
					<button id="button-3" class="controls__button">Перейти</button>
				</div>	
			</div>		
		</section>
		<section class="content">
			<div class="content__wrapper lcw">			
				<div id="content-1" class="content__item content__item--visible">
					<section class="adv">
						<div class="adv__wrapper lcw">
							<h3 class="section-header">Преимущества сэндвич панелей</h3>
							<div class="adv__con">
								<div class="adv__item">
									<img src="" alt="">
									<p>Text</p>
								</div>
								<div class="adv__item">
									<img src="" alt="">
									<p>Text</p>
								</div>
								<div class="adv__item">
									<img src="" alt="">
									<p>Text</p>
								</div>
								<div class="adv__item">
									<img src="" alt="">
									<p>Text</p>
								</div>
								<div class="adv__item">
									<img src="" alt="">
									<p>Text</p>
								</div>
								<div class="adv__item">
									<img src="" alt="">
									<p>Text</p>
								</div>
								<div class="adv__item">
									<img src="" alt="">
									<p>Text</p>
								</div>
								<div class="adv__item">
									<img src="" alt="">
									<p>Text</p>
								</div>
								<div class="adv__item">
									<img src="" alt="">
									<p>Text</p>
								</div>
								<div class="adv__item">
									<img src="" alt="">
									<p>Text</p>
								</div>							
							</div>
						</div>
					</section>
					<section class="type">
						<div class="type__wrapper lcw">
							<h3 class="section-header">Виды сэндвич панелей</h3>
							<div class="col col--left">
								<h4>Стеновые</h4>
							</div>
							<div class="col col--left">
								<h4>Кровельные</h4>
							</div>
						</div>						
					</section>
					<section class="mount">
						<div class="mount__wrapper lcw">
							<h3 class="section-header">Система крепления сэндвич панелей</h3>
							<div class="mount__container">
								<div class="mount__item"></div>
								<div class="mount__item"></div>
								<div class="mount__item"></div>
								<div class="mount__item"></div>
								<div class="mount__item"></div>
							</div>
						</div>
					</section>
					<section class="filler">
						<div class="filler__wrapper lcw">
							<h3 class="section-header">Наполнитель сэндвич панелей</h3>
							<div class="filler__con">
								<div class="filler__item"></div>
								<div class="filler__item"></div>
							</div>
						</div>
					</section>
					<section class="delivery">
						<div class="delivery__wrapper lcw">
							<h3 class="section-header">Мы осуществляем доставку сэндвич-панелей по всей россии</h3>
						</div>
					</section>
					<section class="request">
						<div class="request__wrapper lcw">
							<h3 class="section-header">Оставьте заявку на расчет стоимости заказа</h3>
						</div>
					</section>
				</div>
				<div id="content-2" class="content__item">345</div>
				<div id="content-3" class="content__item">567</div>
			</div>
		</section>
		<section class="about">
			<div class="about__wrapper lcw">
				<h3 class="section-header">Кто мы</h3>
				<div class="col col--left">
					<div class="about__text">
						<p>Российская торгово-производственная компания «СтальПро» основана в 2006 году. За этот срок «СтальПро» превратилась из небольшой организации с коллективом в 10 человек, в компанию, насчитывающую 11 000 клиентов, собственный производственно-складской комплекс и штат более 130 сотрудников. В числе клиентов «СтальПро» различные предприятия пищевой и нефтегазовой промышленности, жилищно-коммунального хозяйства, строительные организации и частные лица.</p>
						<p>В првые несколько лет «СтальПро» смогла наладить деловые отношения с крупными заводами производителями металлопроката, такими как Магнитогорский, Нижнетагильский, Новолипецкий металлургические комбинаты, Мечел, Северсталь, ОМК и др. Установление сотрудничества, позволило компании улучшить качество обслуживания клиентов и поставлять продукцию напрямую с заводов, сокращая сроки доставки. В 2008 году «СтальПро» впервые становится официальным дилером завода оцинкованных сталей «CYNK MAL» JSC (Польша) и выходит на рынок с новой услугой по оцинкованию металла.</p>
					</div>
				</div>
				<div class="col col-right">
					<img src="<?php echo get_template_directory_uri(); ?>/img/about.png" alt="" class="">
				</div>
			</div>
		</section>
		<section class="address">
			<div class="address__wrapper lcw">
				<h3 class="section-header">Где мы</h3>				
			</div>
		</section>
		<section class="map-container">
			<div class="map-container__wrapper lcw">
				<div id="map" class="map"></div>
			</div>
		</section>		
	</main>
</div>
<?php get_footer(); ?>
