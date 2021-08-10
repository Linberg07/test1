<?php

$utm = $_GET('utm_term');

if($utm == 'метка1'){
	$multiTitle = 'Уборка квартир <br> <span>от 1940 рублей</span>'; 
}elseif($utm == 'метка2'){
	$multiTitle = 'Заголовок для <br>второй метки';
}elseif($utm == 'метка3'){
	$multiTitle = 'Заголовок для <br>третье метки';
}



?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Document</title>
</head>
<body>
	<div class="wrapper">
<header>
		<div class="header-menu">
			<div class="header-menu-body">
				<div class="header-menu__column">
					<div class="header-menu__logo">
						<img src="img/header/logo.png" alt="">
					</div>
				</div>
				<div class="header-menu__column">
					<ul class="header-menu__list">
						<li><a href="">цены</a></li>
						<li><a href="">оборудование и средства</a></li>
						<li><a href="">наши кейсы</a></li>
						<li><a href="">отзывы</a></li>
						<li><a href="">о нас</a></li>
					</ul>
				</div>
				<div class="header-menu__column contact-header">
					<div class="header-menu__contact">
						<a class="header-menu__phone">
							+7 495 775 70 18
						</a>
						<a href="" class="header-menu__phone_btn">
							Заказать звонок
						</a>
					</div>
					<div class="burger"><span></span></div>
				</div>
			</div>
		</div>


		<div class="container">
			<div class="header-body">
				<div class="header-body__bg">
					<img src="img/header/bg.png" alt="">
				</div>
				<div class="header-body__column">
					<div class="header-body__text">
						<div class="header-body__title">
							<? echo $multiTitle; ?>
						</div>
						<div class="header-body__Ptitle">
							Нам доверяют самые известные люди России
						</div>
						<div class="header-body__p">
							Стоимость частной домработницы гарантиями с компании
						</div>
						<div class="header-body__btn">
							<a href="">Заказать уборку</a>
						</div>
					</div>
				</div>
				<div class="header-body__column circle_column">
					<div class="circle">
						<div class="circle__item text"><span>скидка</span> <br> <span>20%</span><br>при заказе<br>до 8 августа</div>
						<div class="circle__item left_circle"></div>
						<div class="circle__item right-circle"></div>
						<div class="circle__inner">
							<div class="circle__letter">В</div>
							<div class="circle__letter">Ы</div>
							<div class="circle__letter">Г</div>
							<div class="circle__letter">О</div>
							<div class="circle__letter">Д</div>
							<div class="circle__letter">А</div>
							<div class="circle__letter">2</div>
							<div class="circle__letter">0</div>
							<div class="circle__letter">%</div>
						</div>

						<div class="circle__inner">
							<div class="circle__letter-bottom">В</div>
							<div class="circle__letter-bottom">Ы</div>
							<div class="circle__letter-bottom">Г</div>
							<div class="circle__letter-bottom">О</div>
							<div class="circle__letter-bottom">Д</div>
							<div class="circle__letter-bottom">А</div>
							<div class="circle__letter-bottom">2</div>
							<div class="circle__letter-bottom">0</div>
							<div class="circle__letter-bottom">%</div>
						</div>
						
					</div>
				</div>
				<div class="header-body__column list_column">
					<ul class="header-body__list">
						<li>100+ обьектов <br>за 2021 год</li>
						<li>Имеем мед.лицензию<br>по дезинфектологии</li>
						<li>Круглосуточный <br> производственный цикл</li>
						<li>Используем<br>профессиональные <br>моющие средства</li>
					</ul>
				</div>
			</div>
		</div>
</header>

<div class="menu-burger">
			
<div class="menu-burger__close"></div>
</div>
		<div class="how-work">
			<div class="container">
				<div class="how-work-body">
					<div class="how-work__column">
						<div class="how-work__img">
							<img src="img/work/01.png" alt="">
						</div>
						<div class="how-work__title">
							Стандарты качества
						</div>
						<div class="how-work__p">
							<span>Вся уборка</span> осуществляется строго по всем правилам компании
						</div>
					</div>
					<div class="how-work__column">
						<div class="how-work__img">
							<img src="img/work/02.png" alt="">
						</div>
						<div class="how-work__title">
							Стандарты качества
						</div>
						<div class="how-work__p">
							<span>Вся уборка</span> осуществляется строго по всем правилам компании
						</div>
					</div>
					<div class="how-work__column">
						<div class="how-work__img">
							<img src="img/work/03.png" alt="">
						</div>
						<div class="how-work__title">
							Стандарты качества
						</div>
						<div class="how-work__p">
							<span>Вся уборка</span> осуществляется строго по всем правилам компании
						</div>
					</div>
					<div class="how-work__column">
						<div class="how-work__img">
							<img src="img/work/04.png" alt="">
						</div>
						<div class="how-work__title">
							Стандарты качества
						</div>
						<div class="how-work__p">
							<span>Вся уборка</span> осуществляется строго по всем правилам компании
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="price">
			<div class="container">
				<div class="section-title">
					Наши цены
				</div>
				<div class="price-body">
					<div class="price-body__column">
						<div class="price-body__iner">
							<div class="price-body__img">
							<img src="img/prise/01.png" alt="">
						</div>
						<div class="price-body__title">
							Уборка <br>квартир
						</div>
						<div class="price-body__p">
							Удаляем на всех поверхностях сложные загрязнения
						</div>
						<div class="price-body__btn">
							<div class="price-body__price">
							от 7000 руб
							</div>
							<a href="">Рассчитать стоимость</a>
						</div>
						</div>
					</div>
					<div class="price-body__column">
						<div class="price-body__iner">
						<div class="price-body__img">
							<img src="img/prise/02.png" alt="">
						</div>
						<div class="price-body__title">
							Уборка <br>после ремонта
						</div>
						<div class="price-body__p">
							Удаляем на всех поверхностях сложные загрязнения
						</div>
						<div class="price-body__btn">
							<div class="price-body__price">
							от 14000 руб
						</div>
							<a href="">Рассчитать стоимость</a>
						</div>
					</div>
					</div>
					<div class="price-body__column">
						<div class="price-body__iner">
						<div class="price-body__img">
							<img src="img/prise/03.png" alt="">
						</div>
						<div class="price-body__title">
							Уборка <br>офисов
						</div>
						<div class="price-body__p">
							Убираем строительную пыль и следы от ремонта
						</div>
						<div class="price-body__btn">
							<div class="price-body__price">
							от 7000 руб
							</div>
							<a href="">Рассчитать стоимость</a>
						</div>
					</div>
					</div>
					<div class="price-body__column">
						<div class="price-body__iner">
						<div class="price-body__img">
							<img src="img/prise/04.png" alt="">
						</div>
						<div class="price-body__title">
							Уборка <br>частных домов
						</div>
						<div class="price-body__p">
							Химчистка мягкой мебели и ковролина
						</div>
						<div class="price-body__btn">
							<div class="price-body__price">
							от 500 руб
							</div>
							<a href="">Рассчитать стоимость</a>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>

		<div class="special">
			<div class="container">
				<div class="section-title">
					Воспользуйтесь нашими <br> спецпредложениями
				</div>
				<div class="special-inner">
					<div class="special-inner__number">
						23%
					</div>
					<div class="special-body">
					<div class="special-body__column">
						<div class="special-body__title">
							С 12 июля по 31 августа <br> Скидка 23%
						</div>
						<div class="special-body__p">
							При заказе чистки мебели, матрасов и ковровых покрытий, которые «пометили» домашние животные
						</div>
						<form action="
						" class="specia-body__form">
							<input type="text" placeholder="Виктория Ивановна">
							<input type="text" placeholder="Телефон">
							<input type="submit" class="submit" value="Регулярно получать спецпредложения">
						</form>
					</div>
					<div class="special-body__column">
						<img src="img/special/02.png" alt="">
						<img src="img/special/01.png" alt="">
					</div>
				</div>
				</div>
				
			</div>
		</div>

		<div class="gear">
			<div class="container">
				<div class="section-title">
					Оборудование и средства
				</div>
				<div class="gear-body">
					<div class="gear-body__column">
						<div class="gear-body__title">
							Наши средства имеют <span>эко-сертификат</span>
						</div>

						<div class="gear-body-slider">
							
								<div class="geadr-body-slider__item">
									<img src="img/gear/01.png" alt="">
								</div>
								<div class="geadr-body-slider__item">
									<img src="img/gear/02.png" alt="">
								</div>
								<div class="geadr-body-slider__item">
									<img src="img/gear/01.png" alt="">
								</div>
								<div class="geadr-body-slider__item">
									<img src="img/gear/02.png" alt="">
								</div>
							
						</div>

					</div>
					<div class="gear-body__column">
						<div class="gear-body-text">
							<p>
								Мы используем только проффесиональные средства от ведущих производителей Америки, Германии, Италии, такие как: а) Мы используем только проффесиональные средства от ведущих производителей Америки, Германии, Италии, такие как : а) CARPETRO, низкопенный шампунь для очистки ворсовых покрытий. CARPRETRO, это низкопенный шампунь для очистки ворсовых покрытий.
							</p>
							<p>
								Мы используем только профессиональные средства от ведущих производителей Америки, Германии, Италии, такие как: а) CARPETRO
							</p>
						</div>
						<ul class="gear-body-list">
							<li>
								<div class="gear-body-list__number">
									1
								</div>
								<div class="gear-body-list__title">
									Безопасны для здоровья
								</div>
								<div class="gear-body-list__p">
									человека и животных
								</div>
							</li>
							<li>
								<div class="gear-body-list__number">
									2
								</div>
								<div class="gear-body-list__title">
									Невызывают аллергии
								</div>
							</li>
							<li>
								<div class="gear-body-list__number">
									3
								</div>
								<div class="gear-body-list__title">
									Средства имеют сертификаты
								</div>
								<div class="gear-body-list__p">
									качества
								</div>
							</li>
							<li>
								<div class="gear-body-list__number">
									4
								</div>
								<div class="gear-body-list__title">
									Имеют нейтральный
								</div>
								<div class="gear-body-list__p">
									запах
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="step">
			<div class="container">
				<div class="section-title">
					Этапы проведения работы
				</div>
				<div class="step-body">
					<div class="step-body__column">
						<div class="step-body__img">
							<img src="img/step/01.png" alt="">
						</div>
						<div class="step-body__text">
							<div class="step-body__number">
								1.
							</div>
							В течении часа после<br> приема заявки <span>присылаем <br>расчет стоимости работ</span>
						</div>
					</div>
					<div class="step-body__column">
						<div class="step-body__img">
							<img src="img/step/02.png" alt="">
						</div>
						<div class="step-body__text">
							<div class="step-body__number">
								2.
							</div>
							Составляем техническое<br> задание <span>на проведение<br>работ</span>
						</div>
					</div>
					<div class="step-body__column">
						<div class="step-body__img">
							<img src="img/step/03.png" alt="">
						</div>
						<div class="step-body__text">
							<div class="step-body__number">
								3.
							</div>
							Осматриваем обьект<span> на<br>соответсвию техническому <br> заданию</span>
						</div>
					</div>
					<div class="step-body__column">
						<div class="step-body__img">
							<img src="img/step/04.png" alt="">
						</div>
						<div class="step-body__text">
							<div class="step-body__number">
								4.
							</div>
							<span>Составление</span><br>технической карты
						</div>
					</div>
					<div class="step-body__column">
						<div class="step-body__img">
							<img src="img/step/05.png" alt="">
						</div>
						<div class="step-body__text">
							<div class="step-body__number">
								5.
							</div>
							<span>Подбираем персонал</span><br>с соответствующей<br>квалификации
						</div>
					</div>
					<div class="step-body__column">
						<div class="step-body__img">
							<img src="img/step/06.png" alt="">
						</div>
						<div class="step-body__text">
							<div class="step-body__number">
								6.
							</div>
							<span>Запуск</span><br> в эксплуатацию
						</div>
					</div>
					<div class="step-body__column">
						<div class="step-body__img">
							<img src="img/step/07.png" alt="">
						</div>
						<div class="step-body__text">
							<div class="step-body__number">
								7.
							</div>
							 <span>В течении часа после <br> приема заявки </span> присылаем <br> рассчет стоимости работ
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="cleaning">
			<div class="container">
				<div class="section-title">
					Точка чистки ковров <br> и диванов
				</div>
				<div class="cleaning-body">
					<div class="cleaning__column">
						<img src="img/cleaning/01.png" alt="">
					</div>
					<div class="cleaning__column">
						<div class="cleaning__text">
							<p>Мы используем только профессиональные средства от ведущих производителей Америки, Германии, Италии, такие как: а) CARPETRO, это низкопенный шампунь для очистки ворсовых покрытий.</p>
							<p>Безупречно, быстро и гигиеничо очищает и убирает любые виды загрязнеия. Не раздражает даже самую чувствительную кожу, образует много пены, припятствует скорому загрязнению. Все наши средства эффективны и абсолютно безопасны для человека и окружающей среды. Безупречно, быстро и гигиенично очищает и убирает любые виды загрязнения.</p>
							<p>Не раздражает самую чувствитульную, кожу, образует много пены, припятствует скорому загрязнению.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="case">
			<div class="container">
				<div class="section-title white">
					Наши кейсы
				</div>
				<div class="case-body">
					<div class="case-slider">
						<div class="case-slider__item">
							<div class="case-slider__column">
								<div class="case-slider__title">
									Гимназия им.Е.<br>Примакова
								</div>
								<ul class="case-slider-list">
									<li>Задача: <span>Генеральная уборка кухни</span>
									</li>
									<li
									>Площадь: <span>350 м2</span>
								</li>
									<li>
										Время на выполнение: <span>1 день</span>
									</li>
								</ul>
							</div>
							<div class="case-slider__column">
								<img src="img/case/01.png" alt="">
							</div>
						</div>
						<div class="case-slider__item">
							<div class="case-slider__column">
								<div class="case-slider__title">
									Гимназия им.Е.<br>Примакова
								</div>
								<ul class="case-slider-list">
									<li>Задача: <span>Генеральная уборка кухни</span>
									</li>
									<li
									>Площадь: <span>350 м2</span>
								</li>
									<li>
										Время на выполнение: <span>1 день</span>
									</li>
								</ul>
							</div>
							<div class="case-slider__column">
								<img src="img/case/01.png" alt="">
							</div>
						</div>
						<div class="case-slider__item">
							<div class="case-slider__column">
								<div class="case-slider__title">
									Гимназия им.Е.<br>Примакова
								</div>
								<ul class="case-slider-list">
									<li>Задача: <span>Генеральная уборка кухни</span>
									</li>
									<li
									>Площадь: <span>350 м2</span>
								</li>
									<li>
										Время на выполнение: <span>1 день</span>
									</li>
								</ul>
							</div>
							<div class="case-slider__column">
								<img src="img/case/01.png" alt="">
							</div>
						</div>

					</div>

				</div>

			</div>
			<div class="header-body__btn case_btn">
							<a href="">Заказать уборку</a>
			</div>
		</div>

		<div class="fitback">
			<div class="container">
				<div class="section-title">
					Отзывы
				</div>
				<div class="fitback-body">
					<div class="fitback-body__column">
						<div class="fitback-body__title">
							Что говорят <br>наши клиенты<br> <span>после химчистки</span>
						</div>
						<div class="fitback-slider__arrows">
							
						</div>
					</div>
					<div class="fitback-body__column">
						<div class="fitback-slider">
							<div class="fitback-slider__item">
								<div class="fitback-slider__img">
									<img src="img/fitback/01.png" alt="">
								</div>
								<div class="fitaback-slider__title">
									Ольга <br> Куликова
								</div>
								<div class="fitback-slider__p">
									Хочу выразить благодарность Вашим сотрудникам, которые приехали и вывели пятно под чистую. Теперь знаю куда обращаться!
								</div>
							</div>
							<div class="fitback-slider__item">
								<div class="fitback-slider__img">
									<img src="img/fitback/01.png" alt="">
								</div>
								<div class="fitaback-slider__title">
									Ольга <br> Куликова
								</div>
								<div class="fitback-slider__p">
									Хочу выразить благодарность Вашим сотрудникам, которые приехали и вывели пятно под чистую. Теперь знаю куда обращаться!
								</div>
							</div>
							<div class="fitback-slider__item">
								<div class="fitback-slider__img">
									<img src="img/fitback/01.png" alt="">
								</div>
								<div class="fitaback-slider__title">
									Ольга <br> Куликова
								</div>
								<div class="fitback-slider__p">
									Хочу выразить благодарность Вашим сотрудникам, которые приехали и вывели пятно под чистую. Теперь знаю куда обращаться!
								</div>
							</div>
							<div class="fitback-slider__item">
								<div class="fitback-slider__img">
									<img src="img/fitback/01.png" alt="">
								</div>
								<div class="fitaback-slider__title">
									Ольга <br> Куликова
								</div>
								<div class="fitback-slider__p">
									Хочу выразить благодарность Вашим сотрудникам, которые приехали и вывели пятно под чистую. Теперь знаю куда обращаться!
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-body__btn fitback_btn">
							<a href="">Добавить отзыв</a>
			</div>
		</div>

		<div class="trust">
			<div class="container">
				<div class="section-title">
					Нам доверяют
				</div>
				<div class="trust-body">
					<div class="trust__column">
						<img src="img/trust/01.png" alt="">
					</div>
					<div class="trust__column">
						<img src="img/trust/02.png" alt="">
					</div>
					<div class="trust__column">
						<img src="img/trust/03.png" alt="">
					</div>
					<div class="trust__column">
						<img src="img/trust/04.png" alt="">
					</div>
					<div class="trust__column">
						<img src="img/trust/05.png" alt="">
					</div>
				</div>
			</div>
		</div>

		<div class="questions">
			<div class="container">
				<div class="section-title white">
					Часто задаваемые вопросы
				</div>
				<div class="questions-body">
					<div class="questions-body__column">
						<div class="quetions-body__accordion">
							<div class="questions-body__title">
								Какие вы предоставляете документы
							</div>
							<div class="questions-body__p">
								Мы используем только профессиональные средства от ведущих производителей Америки, Германии, Италии, такие как: а) <span>CARPETRO</span>, это низкопенный шампунь для очистки ворсовых покрытий
							</div>
						</div>
						<div class="quetions-body__accordion">
							<div class="questions-body__title">
								Какие вы предоставляете документы
							</div>
							<div class="questions-body__p">
								Мы используем только профессиональные средства от ведущих производителей Америки, Германии, Италии, такие как: а) <span>CARPETRO</span>, это низкопенный шампунь для очистки ворсовых покрытий
							</div>
						</div>
						<div class="quetions-body__accordion">
							<div class="questions-body__title">
								Какие вы предоставляете документы
							</div>
							<div class="questions-body__p">
								Мы используем только профессиональные средства от ведущих производителей Америки, Германии, Италии, такие как: а) <span>CARPETRO</span>, это низкопенный шампунь для очистки ворсовых покрытий
							</div>
						</div>
						<div class="quetions-body__accordion">
							<div class="questions-body__title">
								Какие вы предоставляете документы
							</div>
							<div class="questions-body__p">
								Мы используем только профессиональные средства от ведущих производителей Америки, Германии, Италии, такие как: а) <span>CARPETRO</span>, это низкопенный шампунь для очистки ворсовых покрытий
							</div>
						</div>
					</div>
					<div class="questions-body__column">
						<div class="question-body__img">
							<img src="img/questions/01.png" alt="">
							<div class="questions-body__name">
							Александр Зубко <br> <span>директор</span>
						</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<div class="about">
			<div class="container">
				<div class="section-title">
					О нашей компании
				</div>
				<div class="about-body">
					<div class="about__column">
						<div class="about__title">
							Кратко<br> в цифрах
						</div>
					</div>
					<div class="about__column">
						<div class="about__row">
							<div class="about__number">
								24
							</div>
							<div class="about__p">
								Именно столько часов в сутки мы находимся с клиентами на связи, без выходных
							</div>
						</div>
						<div class="about__row">
							<div class="about__number">
								24
							</div>
							<div class="about__p">
								Именно столько часов в сутки мы находимся с клиентами на связи, без выходных
							</div>
						</div>
						<div class="about__row">
							<div class="about__number">
								45
							</div>
							<div class="about__p">
								Количество сотрудников в штате
							</div>
						</div>
						<div class="about__row">
							<div class="about__number">
								1400
							</div>
							<div class="about__p">
								Успешно выполненных заказов
							</div>
						</div>
						<div class="about__row">
							<div class="about__number">
								100
							</div>
							<div class="about__p">
								Заказов по химчистки выполняется каждый день
							</div>
						</div>
						<div class="about__row">
							<div class="about__number">
								30%
							</div>
							<div class="about__p">
								Клиентов по рекомендации
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<footer>
	<div class="container">
		<div class="footer-body">
			<div class="footer__column footer-1">
				<div class="footer-logo">
					<img src="img/footer/logo.png" alt="">
				</div>
				<div class="footer-questions">
					<div class="footer-questions__title">
						Остались вопросы?
					</div>
					<div class="footer-questions__p">
						Перезвоним в течении 5 минут!
					</div>
				</div>
				<div class="footer-form">
					<form action="">
						<input type="text" placeholder="Телефон">
						<input type="submit" class="submit">
					</form>
				</div>
			</div>
			<div class="footer__column footer-2">
				<div class="footer-text">
					<p>Профессиональная <br>химчистка</p>
					<p>Не является публичной офертой <span>*</span></p>
					<p>Политика конфиденциальности</p>
				</div>
				<div class="footer-phone">
					<a href="">+7 <span>(495)</span> 775-60-50</a>
				</div>
				<div class="footer-icons">
					<img src="img/footer/facebook.png" alt="">
					<img src="img/footer/telegram.png" alt="">
					<img src="img/footer/wp.png" alt="">
				</div>
			</div>
			<div class="footer__column footer-3">
				
			</div>
		</div>
	</div>
</footer>	</div>

	

	
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/script.js"></script>
<script src="js/anim.js"></script>
</html>