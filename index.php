<?php
    require_once('integration_vtiger/ModelIntegration.php');
    $leadsource 				= 'Landing-реклама-на-ТС';
    $module_integration = new ModelIntegration($leadsource);
    $hidden_inpunt 			= $module_integration->generate_hidden_inputs();

    ?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Mango</title>
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">
        <meta property="og:image" content="path/to/image.jpg">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/main.min.css">
        <!-- Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="#000">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#000">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    </head>
    <body>


		<!-- start .top-menu -->
		<div class="top-menu">
			<!-- start .container -->
			<div class="container">
				<div class="resp-mnu">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</div>
				<div class="phone-block inline">
					<a href="tel:<? echo $numberOnTopClear ; ?>" class="phone">8 800 123 123</a>
				</div>
				<nav class="inline">
					<ul>
						<li><a href="#top" class="to-id btn-up">Наверх <i class="fa fa-angle-up" aria-hidden="true"></i></a></li>
						<li><a href="#why" class="to-id">Зачем</a></li>
						<li><a href="#games-begin" class="to-id">Игры</a></li>
						<li><a href="#reviews" class="to-id">Отзывы</a></li>
						<li><a href="#about-company" class="to-id">О нас</a></li>
						<li><a href="#contacts" class="to-id">Контакты</a></li>
					</ul>
				</nav>

			</div>

		</div>
		 <!-- end .top-menu -->


        <header>
            <!-- start .container -->
            <div class="container">
                <!-- start .row -->
                <div class="row">
                    <!-- start .top-head -->
                    <div class="top-head">
                        <div class="logo-block">
                            <!-- start .logo -->
                            <div class="logo">
                                <img src="img/logo.png" alt="mango" />
                            </div>
                            <!-- end .logo -->
                            <!-- start .slogan -->
                            <div class="slogan">
                                <p>Манго! Консалтинг - обучение через
                                    деловые игры в России и СНГ
                                </p>
                            </div>
                            <!-- end .slogan -->
                        </div>
                        <!-- end .logo-block -->
                        <!-- start .contacts -->
                        <div class="contacts-block">
                            <!-- start .phone -->
                            <div class="phone">
                                <img src="img/phone-circle-icon.png" alt="" />
                                <a href="tel:8 800 123 45 67">8 800 123 45 67</a>
                            </div>
                            <!-- end .phone -->
                            <!-- start .email -->
                            <div class="email">
                                <img src="img/envelope-icon.png" alt="" />
                                <a href="mailto:game@mangoco.ru">game@mangoco.ru</a>
                            </div>
                            <!-- end .email -->
                        </div>
                        <!-- end .contacts -->
                    </div>
                    <!-- end .top-head -->
                </div>
                <!-- end .row -->
                <!-- start .row -->
                <div class="row">
                    <!-- start .angle-border -->
                    <div class="angle-border">
                        <h1>ЗАХВАТЫВАЮЩИЕ</h1>
                        <h2 class="yellow black">ДЕЛОВЫЕ ИГРЫ</h2>
                    </div>
                    <!-- end .angle-border -->
                    <h3>15 интересных и полезных игр - без компромиссов!
                        От 8 до 200+ человек!
                    </h3>
                    <!-- start .deskr -->
                    <p class="deskr">
                        Понравится предпринимателям, топ-менеджерам, руководителям среднего звена и Вам.
                        Мы учитываем контекст игры: потребности заказчика и персонала, их цели и философию
                        для эффективного повышения компетенций и продуктивности!
                    </p>
                    <!-- end .deskr -->
                    <a href="#try-block" class="btn to-id">
                    узнать подробнее
                    </a>
                </div>
                <!-- end .row -->
            </div>
            <!-- end .container -->
        </header>
        <!-- start .try-block -->
        <section class="try-block" id="try-block">
            <!-- start .container -->
            <div class="container">
                <div class="angle-border dark">
                    <h1>Попробуйте</h1>
                    <h2>Атмосферу</h2>
                    <h3>наших деловых игр:</h3>
                </div>
                <ul class="games-atmosph">
                    <li>
                        <a href="#slider-popup" class="popup" data-toslide="0" >
                            <!-- start .img -->
                            <div class="emoji-img games-icon">
                                <img class="main" src="img/icon-emoji.png" alt="" />
                                <img class="with-bg" src="img/icon-emoji-bg.png" alt="" />
                            </div>
                            <!-- end .img -->
                            <h4>Эмоции</h4>
                            <p>Снимите напряжение
                                с Вашего бизнеса
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#slider-popup" class="popup" data-toslide="1" >
                            <!-- start .img -->
                            <div class="study-img games-icon">
                                <img class="main" src="img/icon-study.png" alt="" />
                                <img class="with-bg" src="img/icon-study-bg.png" alt="" />
                            </div>
                            <!-- end .img -->
                            <h4>Обучение</h4>
                            <p>Развитие ключевых
                                бизнес-навыков
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#slider-popup" class="popup" data-toslide="2" >
                            <!-- start .img -->
                            <div class="game-img games-icon">
                                <img class="main" src="img/icon-game.png" alt="" />
                                <img class="with-bg" src="img/icon-game-bg.png" alt="" />
                            </div>
                            <!-- end .img -->
                            <h4>Игра</h4>
                            <p>Все продумано
                                до мелочей, для
                                каждого участника
                            </p>
                        </a>
                    </li>
                    <li>
                        <a href="#slider-popup" class="popup" data-toslide="3">
                            <!-- start .img -->
                            <div class="result-img games-icon">
                                <img class="main" src="img/icon-result.png" alt="" />
                                <img class="with-bg" src="img/icon-result-bg.png" alt="" />
                            </div>
                            <!-- end .img -->
                            <h4>Результат</h4>
                            <p>Эффект в процессе
                                - больше конкретики,
                                меньше воды
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- end .container -->
        </section>
        <!-- end .try-block -->
        <!-- start .why-not -->
        <section class="why-not" id="why">
            <!-- start .container -->
            <div class="container">
                <div class="angle-border">
                    <h1>Почему не стоит</h1>
                    <h2>Откладывать?</h2>
                </div>
                <!-- start .text-wrap -->
                <div class="text-wrap">
                    <p class="first">Компании часто заявляют, что главное — это  люди! ..но забывают об этом в повседневной рутине.</p>
                    <p class="second">Во главе многих крупных российских компаний до сих пор стоят собственники (но скоро и они
                        будут отходить от операционной деятельности), в результате чего в компаниях слишком часто
                        меняют первых лиц, а будущим лидерам не хватает времени и ресурсов для развития.
                    </p>
                    <p class="bold">Деловые игры сегодня - это <span class="yellow-bg">эффективный инструмент развития</span> команд, заточенный на решение
                        бизнес-задач, в условиях кризиса, высокой конкуренции и быстрого темпа изменений
                        на b2b-рынке.
                    </p>
                    <!-- start .bold last -->
                    <p class="bold last"><span class="yellow">Нас выбирают</span> когда требуется "быть", а не казаться.</p>
                    <!-- end .bold last -->
                </div>
                <!-- end .text-wrap -->
            </div>
            <!-- end .container -->
        </section>
        <!-- end .why-not -->
        <!-- start .select-form -->
        <section class="select-form">
            <!-- start .container -->
            <div class="container">
                <!-- start .row -->
                <div class="row">
                    <!-- start .col-lg-6 -->
                    <div class="left-col">
                        <ul class="privilege-list">
                            <li>
                                <!-- start .wrap-img -->
                                <div class="wrap-img">
                                    <img src="img/percent.png" alt="" />
                                </div>
                                <!-- end .wrap-img -->
                                <p><strong>10% скидка</strong> на первую игру
                                    или <strong>20%</strong> на вторую
                                </p>
                            </li>
                            <li>
                                <!-- start .wrap-img -->
                                <div class="wrap-img">
                                    <img src="img/time.png" alt="" />
                                </div>
                                <!-- end .wrap-img -->
                                <p><strong>В удобное время</strong> - мы
                                    подстроимся под Ваш график
                                </p>
                            </li>
                            <li>
                                <!-- start .wrap-img -->
                                <div class="wrap-img">
                                    <img src="img/office.png" alt="" />
                                </div>
                                <!-- end .wrap-img -->
                                <p><strong>У Вас в офисе</strong> или на любой
                                    арендуемой площадке
                                </p>
                            </li>
                        </ul>
                    </div>
                    <!-- end .col-lg-6 -->
                    <!-- start .col-lg-6 -->
                    <div class="right-col">
                        <!-- start .wrap-form -->
                        <div class="wrap-form">
                            <form action="">
                                <img src="img/ruble.png" alt="" />
                                <p>За 10 минут подберем деловую игру
                                    под Вашу задачу и бюджет.
                                </p>
                                <!-- start .group -->
                                <div class="group">
                                    <input type="text" name="name" class="name" placeholder="Имя" reqiured/>
                                    <span class="icon icon-person"></span>
                                </div>
                                <!-- end .group -->
                                <!-- start .group -->
                                <div class="group">
                                    <input type="text" name="phone" class="phone" placeholder="Телефон" reqiured/>
                                    <span class="icon icon-phone"></span>
                                </div>
                                <!-- end .group -->
                                <button type="submit" class="btn">Подобрать игру</button>
                                <!-- start .succes -->
                                <p class="success hidden-s">Спасибо за заявку!</p>
                                <!-- end .succes -->
                            </form>
                        </div>
                        <!-- end .wrap-form -->
                    </div>
                    <!-- end .col-lg-6 -->
                </div>
                <!-- end .row -->
            </div>
            <!-- end .container -->
        </section>
        <!-- end .select-form -->
        <!-- start .header-for-games -->
        <section class="header-for-games" id="games-begin">
            <!-- start .container -->
            <div class="container">
                <!-- start .angle-border -->
                <div class="angle-border dark">
                    <h1>Добро пожаловать</h1>
                    <h2>В игру!</h2>
                    <h3 class="first">Наши игры умеют восхищать, вдохновлять,</h3>
                    <h3>
                        продавать и приносить пользу. Вам понравится. Точка.
                    </h3>
                </div>
                <!-- end .angle-border -->
            </div>
            <!-- end .container -->
        </section>
        <!-- end .header-for-games -->
        <!-- start .game -->

        <section class="game king" id="games">
            <!-- start .container -->

            <div class="container">
                <h2 class="with-ybg">«Князья и капуста»</h2>
                <!-- start .row -->
                <div class="row">
                    <!-- start .short-deskr -->
                    <div class="short-deskr">
                        <!-- start .left-part -->
                        <div class="left-part">
                            <p>Погрузитесь в «Князья и капусту» - уникальный
                                симулятор жизни в древнерусском государстве!
                                Выбирайте, кем станете – крестьянином или
                                царем, боярином или купцом, а может, и
                                влиятельным князем.
                            </p>
                        </div>
                        <!-- end .left-part -->
                        <!-- start .right-part -->
                        <div class="right-part">
                            <p>Количество игроков: <span>20-200</span></p>
                            <p>Продолжительность: <span>3-4 часа</span></p>
                        </div>
                        <!-- end .right-part -->
                    </div>
                    <!-- end .short-deskr -->
                </div>
                <!-- end .row -->
            </div>
            <!-- start .container -->
            <div class="game-deskr">
                <div id="wrapper">
                  <div class="layer1"></div>
                  <div class="layer2"></div>
                  <div class="layer3"></div>
                </div>
                <div class="container">
                    <!-- start .row -->
                    <div class="row wrap">
                        <h3 class="with-ybg">Самая популярная игра</h3>
                        <h4>Все как в бизнесе. Цель - заработать
                            максимальное количество денег.
                        </h4>
                        <p>Игра разработана для бизнес-обучения, мотивации и  вдохновения участников. Жизнь
                            современной  компании моделируется в игровой, динамичной  атмосфере
                            древнерусского государства.  Развивает навыки управления, переговоров,
                            коммуникации, разрешения конфликтов, а также  коммерческое мышление,
                            предпринимательские  способности и многое другое.
                        </p>
                        <!-- start .bottom-part -->
                        <div class="bottom-part">
                            <!-- start .left-part -->
                            <div class="left-part">
                                <a href="#time-plan-1" class="popup">Временной план</a> <br />
                                <a href="#simulation-1" class="popup">Модель симуляции</a>
                            </div>
                            <!-- end .left-part -->
                            <!-- start .right-part -->
                            <div class="right-part">
                                <span class="participants">Более 3500 участников</span>
                            </div>
                            <!-- end .right-part -->
                        </div>
                        <!-- end .bottom-part -->
                        <!-- start .btns -->
                        <div class="btns">
                            <!-- start .video-btn -->
                            <a href="https://www.youtube.com/watch?v=k84c7IFiIoU" class="video-btn">
                            <i class="fa fa-play" aria-hidden="true"></i>
                                    смотреть видео

                            </a>
                            <!-- end .video-btn -->
                            <a href="#" class="btn">записаться на игру</a>
                        </div>
                        <!-- end .btns -->
                    </div>
                    <!-- end .game-deskr -->
                </div>
                <!-- end .row -->
            </div>
            <!-- end .container -->
        </section>
        <!-- end .game -->
         <!-- start .game -->
        <section class="game winter-is-coming">
            <!-- start .container -->
            <div class="container">
                <h2 class="with-ybg">«Князья и капуста»</h2>
                <!-- start .row -->
                <div class="row">
                    <!-- start .short-deskr -->
                    <div class="short-deskr">
                        <!-- start .left-part -->
                        <div class="left-part">
                            <p>Погрузитесь в «Князья и капусту» - уникальный
                                симулятор жизни в древнерусском государстве!
                                Выбирайте, кем станете – крестьянином или
                                царем, боярином или купцом, а может, и
                                влиятельным князем.
                            </p>
                        </div>
                        <!-- end .left-part -->
                        <!-- start .right-part -->
                        <div class="right-part">
                            <p>Количество игроков: <span>20-200</span></p>
                            <p>Продолжительность: <span>3-4 часа</span></p>
                        </div>
                        <!-- end .right-part -->
                    </div>
                    <!-- end .short-deskr -->
                </div>
                <!-- end .row -->
            </div>
            <!-- start .container -->
            <div class="game-deskr">
                <div id="wrapper">
                  <div class="layer1 winter"></div>
                  <div class="layer2 winter"></div>
                  <div class="layer3 winter"></div>
                </div>

                <div class="container">
                    <!-- start .row -->
                    <div class="row wrap">
                        <h3 class="with-ybg">Самая популярная игра</h3>
                        <h4>Все как в бизнесе. Цель - заработать
                            максимальное количество денег.
                        </h4>
                        <p>Игра разработана для бизнес-обучения, мотивации и  вдохновения участников. Жизнь
                            современной  компании моделируется в игровой, динамичной  атмосфере
                            древнерусского государства.  Развивает навыки управления, переговоров,
                            коммуникации, разрешения конфликтов, а также  коммерческое мышление,
                            предпринимательские  способности и многое другое.
                        </p>
                        <!-- start .bottom-part -->
                        <div class="bottom-part">
                            <!-- start .left-part -->
                            <div class="left-part">
                                <a href="#time-plan-2"  class="popup">Временной план</a> <br />
                                <a href="#simulation-2" class="popup">Модель симуляции</a>
                            </div>
                            <!-- end .left-part -->
                            <!-- start .right-part -->
                            <div class="right-part">
                                <span class="participants">Более 3500 участников</span>
                            </div>
                            <!-- end .right-part -->
                        </div>
                        <!-- end .bottom-part -->
                        <!-- start .btns -->
                        <div class="btns">
                            <!-- start .video-btn -->
                            <a href="#" class="video-btn">
                            <i class="fa fa-play" aria-hidden="true"></i>
                            смотреть видео
                            </a>
                            <!-- end .video-btn -->
                            <a href="#" class="btn">записаться на игру</a>
                        </div>
                        <!-- end .btns -->
                    </div>
                    <!-- end .game-deskr -->
                </div>
                <!-- end .row -->
            </div>

            <!-- end .container -->
        </section>
        <!-- end .game -->
         <section class="game winter-is-coming">
            <!-- start .container -->
            <div class="container">
                <h2 class="with-ybg">«Князья и капуста»</h2>
                <!-- start .row -->
                <div class="row">
                    <!-- start .short-deskr -->
                    <div class="short-deskr">
                        <!-- start .left-part -->
                        <div class="left-part">
                            <p>Погрузитесь в «Князья и капусту» - уникальный
                                симулятор жизни в древнерусском государстве!
                                Выбирайте, кем станете – крестьянином или
                                царем, боярином или купцом, а может, и
                                влиятельным князем.
                            </p>
                        </div>
                        <!-- end .left-part -->
                        <!-- start .right-part -->
                        <div class="right-part">
                            <p>Количество игроков: <span>20-200</span></p>
                            <p>Продолжительность: <span>3-4 часа</span></p>
                        </div>
                        <!-- end .right-part -->
                    </div>
                    <!-- end .short-deskr -->
                </div>
                <!-- end .row -->
            </div>
            <!-- start .container -->
            <div class="game-deskr">
                <div id="wrapper">
                  <div class="layer1 centavra"></div>
                  <div class="layer2 centavra"></div>
                  <div class="layer3 centavra"></div>
                </div>
                <div class="container">
                    <!-- start .row -->
                    <div class="row wrap">
                        <h3 class="with-ybg">Самая популярная игра</h3>
                        <h4>Все как в бизнесе. Цель - заработать
                            максимальное количество денег.
                        </h4>
                        <p>Игра разработана для бизнес-обучения, мотивации и  вдохновения участников. Жизнь
                            современной  компании моделируется в игровой, динамичной  атмосфере
                            древнерусского государства.  Развивает навыки управления, переговоров,
                            коммуникации, разрешения конфликтов, а также  коммерческое мышление,
                            предпринимательские  способности и многое другое.
                        </p>
                        <!-- start .bottom-part -->
                        <div class="bottom-part">
                            <!-- start .left-part -->
                            <div class="left-part">
                                <a href="#time-plan-3"  class="popup">Временной план</a> <br />
                                <a href="#simulation-3" class="popup">Модель симуляции</a>
                            </div>
                            <!-- end .left-part -->
                            <!-- start .right-part -->
                            <div class="right-part">
                                <span class="participants">Более 3500 участников</span>
                            </div>
                            <!-- end .right-part -->
                        </div>
                        <!-- end .bottom-part -->
                        <!-- start .btns -->
                        <div class="btns">
                            <!-- start .video-btn -->
                            <a href="#" class="video-btn">
                            <i class="fa fa-play" aria-hidden="true"></i>
                            смотреть видео
                            </a>
                            <!-- end .video-btn -->
                            <a href="#" class="btn">записаться на игру</a>
                        </div>
                        <!-- end .btns -->
                    </div>
                    <!-- end .game-deskr -->
                </div>
                <!-- end .row -->
            </div>

            <!-- end .container -->
        </section>
        <!-- end .game -->

		<!-- start .games-list -->
		<section class="games-list">
			<!-- start .container -->
			<div class="container">
				<!-- start .angle-border -->
				<div class="angle-border dark">
					<h3>
						в нашем арсенале только
					</h3>
					<h2>Лучшие</h2>
					<h1>Деловые игры</h1>
				</div>
				 <!-- end .angle-border -->

				<ul class="privilege-list">
					<li>
	                    <!-- start .wrap-img -->
	                    <div class="wrap-img">
	                        <img src="img/peoples.png" alt="" />
	                    </div>
	                    <!-- end .wrap-img -->
	                    <p>От 8 до 200+ человек
	                    </p>
	                </li>
	                <li>
	                    <!-- start .wrap-img -->
	                    <div class="wrap-img">
	                        <img src="img/times.png" alt="" />
	                    </div>
	                    <!-- end .wrap-img -->
	                    <p>От 1 часа до одного дня
	                    </p>
	                </li>
				</ul>
				<!-- start .table-container -->
				<div class="table-container">


				<div class="table">
				  <div class="head">
				    <div class="th">Название игры</div>
				    <div class="th">Количество игроков</div>
				    <div class="th">Продолжительность</div>
				  </div>
                  <div class="body">
    				  <div class="row">
    				    <div><a href="#" class="show-details">Князья и капуста</a></div>
    				    <div>не ограничено</div>
    				    <div>3-4 часа</div>
    				  </div>
    				  <div class="details">
				  		<p>Основные компетенции: </p>
				  		<ul>
					  		<li>Работа в команде; </li>
							<li>Принятие решений в сжатые сроки; </li>
							<li>Переговоры; </li>
							<li>Планирование.</li>
				  		</ul>
				  		<p><strong>«Князья и Капуста»</strong> - Жизнь современной компании моделируется в игровой, динамичной атмосфере
древнерусского государства. </p>
    				  </div>
                      <div class="row">
                        <div><a href="#" class="show-details">Князья и капуста</a></div>
                        <div>не ограничено</div>
                        <div>3-4 часа</div>
                      </div>
                      <div class="details">
                        <p>Основные компетенции: </p>
                        <ul>
                            <li>Работа в команде; </li>
                            <li>Принятие решений в сжатые сроки; </li>
                            <li>Переговоры; </li>
                            <li>Планирование.</li>
                        </ul>
                        <p><strong>«Князья и Капуста»</strong> - Жизнь современной компании моделируется в игровой, динамичной атмосфере
древнерусского государства. </p>
                      </div>
                    </div>
				</div>
					</div>
				 <!-- end .table-container -->
			</div>
			 <!-- end .container -->
		</section>
		 <!-- end .games-list -->
		<!-- start .get-catalog -->
		<section class="get-catalog">
			<!-- start .container -->
			<div class="container">
				<!-- start .left-part -->
				<div class="left-part">
					<img src="img/catalog.png" alt="" />
				</div>
				 <!-- end .left-part -->
				<!-- start .right-part -->
				<div class="right-part">
					 <!-- start .wrap-form -->
                        <div class="wrap-form">
                            <form action="">
                                <p>Скачайте каталог с полным
описанием деловых игр
                                </p>
                                <!-- start .group -->
                                <div class="group">
                                    <input type="text" name="name" class="name" placeholder="Имя" reqiured/>
                                    <span class="icon icon-person"></span>
                                </div>
                                <!-- end .group -->
                                <!-- start .group -->
                                <div class="group">
                                    <input type="text" name="phone" class="phone" placeholder="Телефон" reqiured/>
                                    <span class="icon icon-phone"></span>
                                </div>
                                <!-- end .group -->
                                <!-- start .group -->
                                <div class="group">
                                    <input type="text" name="email" class="email" placeholder="E-mail" reqiured/>
                                    <span class="icon icon-email"></span>
                                </div>
                                <!-- end .group -->
                                <button type="submit" class="btn">получить
полный каталог</button>
                                <!-- start .succes -->
                                <p class="success hidden-s">Спасибо за заявку!</p>
                                <!-- end .succes -->
                            </form>
                        </div>
                        <!-- end .wrap-form -->
				</div>
				 <!-- end .right-part -->
			</div>
			 <!-- end .container -->
		</section>
		 <!-- end .get-catalog -->

		<!-- start .clients -->
		<section class="clients">
			<!-- start .container -->
			<div class="container">
				<div class="angle-border dark">
					<h2>Клиенты</h2>
				</div>
				<ul>
						<li><img src="img/clients/clients-1.png" alt="" /></li>
						<li><img src="img/clients/clients-2.png" alt="" /></li>
						<li><img src="img/clients/clients-3.png" alt="" /></li>
						<li><img src="img/clients/clients-4.png" alt="" /></li>
						<li><img src="img/clients/clients-5.png" alt="" /></li>
					</ul>
			</div>
			 <!-- end .container -->
		</section>
		 <!-- end .clients -->

		<!-- start .photos -->
		<section class="photos">
				<div class="angle-border dark">
					<h2>Фотографии</h2>
					<h3>c наших игр</h3>
				</div>
				<!-- start .gallery -->
				<div class="gallery">
					<a href="img/photo/photo-1.jpg"><img src="img/photo/photo-1.jpg" alt="" /></a>
					<a href="img/photo/photo-2.jpg"><img src="img/photo/photo-2.jpg" alt="" /></a>
					<a href="img/photo/photo-3.jpg"><img src="img/photo/photo-3.jpg" alt="" /></a>
					<a href="img/photo/photo-4.jpg"><img src="img/photo/photo-4.jpg" alt="" /></a>
					<a href="img/photo/photo-5.jpg"><img src="img/photo/photo-5.jpg" alt="" /></a>
					<a href="img/photo/photo-6.jpg"><img src="img/photo/photo-6.jpg" alt="" /></a>
					<a href="img/photo/photo-7.jpg"><img src="img/photo/photo-7.jpg" alt="" /></a>
					<a href="img/photo/photo-8.jpg"><img src="img/photo/photo-8.jpg" alt="" /></a>
					<a href="img/photo/photo-9.jpg"><img src="img/photo/photo-9.jpg" alt="" /></a>
					<a href="img/photo/photo-10.jpg"><img src="img/photo/photo-10.jpg" alt="" /></a>
				</div>
				 <!-- end .gallery -->

		</section>
		 <!-- end .photos -->

		<!-- start .video-reviews -->
		<section class="video-reviews" id="reviews">
			<!-- start .container -->
			<div class="container">
				<div class="angle-border dark">
					<h2>Видео-отзывы</h2>
					<h3>наших клиентов</h3>
				</div>
				<blockquote>
					<i class="fa fa-quote-left" aria-hidden="true"></i>
					<!-- start .text -->
					<div class="text">
						<p><strong>Иванов Иван. Компания_Название</strong></p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
					 <!-- end .text -->

				</blockquote>
				<!-- start .slider-videos -->
				<div class="slider-videos slider">
					<!-- start .slide -->
					<div class="slide">
						<!-- start .video -->
						<div class="video">
							<iframe width="854" height="484" src="https://www.youtube.com/embed/cpyWqdTWND0" frameborder="0" allowfullscreen></iframe>
						</div>
						 <!-- end .video -->

					</div>
					 <!-- end .slide -->
					 <!-- start .slide -->
					<div class="slide">
						<!-- start .video -->
						<div class="video">
							<iframe width="854" height="485" src="https://www.youtube.com/embed/cpyWqdTWND0" frameborder="0" allowfullscreen></iframe>
						</div>
						 <!-- end .video -->
					</div>
					 <!-- end .slide -->
				</div>
				 <!-- end .slider-videos -->
			</div>
			 <!-- end .container -->
		</section>
		 <!-- end .video-reviews -->

		<!-- start .reviews -->
		<div class="reviews">
			<!-- start .container -->
			<div class="container">
				<!-- start .slider reviews-slider -->
				<div class="slider reviews-slider">
					<!-- start .slide -->
					<div class="slide">
						<!-- start .wrap-img -->
						<div class="wrap-img left-part">
							<img src="img/review-doc.jpg" alt="" />
						</div>
						 <!-- end .wrap-img -->
						<!-- start .wrap-text -->
						<div class="wrap-text right-part">
							<img src="img/review-person.png" alt="" class="person" />
							<h3>Олег Иванов</h3>
							<h4>Арт-директор ресторана</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
sed do eiusmod tempor incididunt ut labore et dolore
magna aliqua. Ut enim ad minim veniam, quis nostrud
exercitation ullamco laboris nisi ut aliquip ex ea
commodo consequat</p>
						</div>
						 <!-- end .wrap-text -->
					</div>
					 <!-- end .slide -->
					 <!-- start .slide -->
					<div class="slide">
						<!-- start .wrap-img -->
						<div class="wrap-img left-part">
							<img src="img/review-doc.jpg" alt="" />
						</div>
						 <!-- end .wrap-img -->
						<!-- start .wrap-text -->
						<div class="wrap-text right-part">
							<img src="img/review-person.png" alt="" class="person" />
							<h3>Олег Иванов</h3>
							<h4>Арт-директор ресторана</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
sed do eiusmod tempor incididunt ut labore et dolore
magna aliqua. Ut enim ad minim veniam, quis nostrud
exercitation ullamco laboris nisi ut aliquip ex ea
commodo consequat</p>
						</div>
						 <!-- end .wrap-text -->
					</div>
					 <!-- end .slide -->
				</div>
				 <!-- end .slider reviews-slider -->
			</div>
			 <!-- end .container -->
		</div>
		 <!-- end .reviews -->

		<!-- start .about -->
		<section class="about" id="about-company">
			<!-- start .container -->
			<div class="container">
				<!-- start .angle-border -->
				<div class="angle-border dark">
					<h3>Качественное проведение игр — одна из составляющих</h3>
					<h2>Успеха!</h2>
				</div>
				 <!-- end .angle-border -->

				<!-- start .tabs -->
				<div class="tabs">
					<ul>
						<li class="tab active"><a href="#" data-totab="1">Олег Косчинский</a></li>
						<li class="tab"><a href="#" data-totab="2">Юрий Исаев</a></li>
						<li class="tab"><a href="#" data-totab="3">Андрей Комизерко</a></li>
						<li class="tab"><a href="#" data-totab="4">Андрей Лапига</a></li>
						<li class="tab"><a href="#" data-totab="5">Мария Шевченко</a></li>
					</ul>
				</div>
				 <!-- end .tabs -->

				 <!-- start .tab-content -->
				 <div class="tab-content">
				 	<!-- start .tab-1 -->
				 	<div class="tab-cont tab-cont-1" data-target="1">
				 	<!-- start .left-part -->
				 	<div class="left-part">
				 		<img src="img/success-person.jpg" alt="" />
				 	</div>
				 	 <!-- end .left-part -->
				 	 <!-- start .right-part -->
				 	 <div class="right-part">
				 	 	<!-- start .text -->
				 	 	<div class="text">
				 	 		<p>Здравствуйте, меня зовут Олег, я директор по
развитию консалтинговой компании "МанГо",
профессиональный бизнес-консультант и ведущий
фасилитатор симуляции "Князья и Капуста".
</p>
<p>
Я и моя команда в 2009 году решили создать
«Mango!». К нашему знакомству хочу сделать вам
подарок — скидку 10% на первую деловую игру.
Просто введите свой номер телефона в поле ниже
и нажмите кнопку.</p>
				 	 	</div>
				 	 	 <!-- end .text -->
				 	 </div>
				 	  <!-- end .right-part -->
				 	</div>
				 	 <!-- end .tab-1 -->
				 	 <!-- start .tab-1 -->
				 	<div class="tab-cont tab-cont-2 hidden" data-target="2">
				 	<!-- start .left-part -->
				 	<div class="left-part">
				 		<img src="img/success-person.jpg" alt="" />
				 	</div>
				 	 <!-- end .left-part -->
				 	 <!-- start .right-part -->
				 	 <div class="right-part">
				 	 	<!-- start .text -->
				 	 	<div class="text">
				 	 		<p> TAB 2
				 	 		Здравствуйте, меня зовут Олег, я директор по
развитию консалтинговой компании "МанГо",
профессиональный бизнес-консультант и ведущий
фасилитатор симуляции "Князья и Капуста".
</p>
<p>
Я и моя команда в 2009 году решили создать
«Mango!». К нашему знакомству хочу сделать вам
подарок — скидку 10% на первую деловую игру.
Просто введите свой номер телефона в поле ниже
и нажмите кнопку.</p>
				 	 	</div>
				 	 	 <!-- end .text -->
				 	 </div>
				 	  <!-- end .right-part -->
				 	</div>
				 	 <!-- end .tab-1 -->
				 </div>
				  <!-- end .tab-content -->
			</div>
			 <!-- end .container -->
		</section>
		 <!-- end .about -->

		<!-- start .order-q -->
		<section class="order-q">
			<!-- start .container -->
			<div class="container">
				<!-- start .angle-border -->
				<div class="angle-border dark">
					<h3>Еще не уверены стоит ли </h3>
					<h2 class="with-ybg">Заказать</h2>
					<h3>деловую игру?</h3>
				</div>
				 <!-- end .angle-border -->
				 <!-- start .text -->
				 <div class="text">
				 	<p>
				 		Деловые игры дают максимальную отдачу, потому что на них вы можете сразу получить
обратную связь и провести разбор процесса в компании. Вы будете общаться с
реальными коллегами напрямую, глаза в глаза. Отследите реакции, что нужно изменить в
первую очередь, и сможете скорректировать предложение прямо на месте.
</p>
<p>
Проведение бизнес-симуляции — не конечный пункт. После такого корпоративного
мероприятия мы предлагаем компании продолжить работу для повышения
индивидуальных компетенций.
				 	</p>
				 </div>
				  <!-- end .text -->
			</div>
			 <!-- end .container -->
		</section>
		 <!-- end .order-q -->


		<!-- start .yellow-bg planed -->
		<section class="yellow-bg end-of-search">
			<!-- start .container -->
			<div class="container">
				<h1>ваш поиск заканчивается</h1>
				<h2>здесь!</h2>
				<!-- start .wrap-form -->
                        <div class="wrap-form">
                            <form action="">

                                <div class="group">
                                    <input type="text" name="name" class="name" placeholder="Имя" reqiured/>
                                    <span class="icon icon-person"></span>
                                </div>
                                <!-- end .group -->
                                <!-- start .group -->
                                <div class="group">
                                    <input type="text" name="phone" class="phone" placeholder="Телефон" reqiured/>
                                    <span class="icon icon-phone"></span>
                                </div>
                                <!-- end .group -->
                                <button type="submit" class="btn">Запланировать игру</button>
                                <!-- start .succes -->
                                <p class="success hidden-s">Спасибо за заявку!</p>
                                <!-- end .succes -->
                            </form>
                        </div>
                        <!-- end .wrap-form -->
			</div>
			 <!-- end .container -->
		</section>
		 <!-- end .yellow-bg planed -->


		<!-- start .contacts -->
		<section class="contacts" id="contacts">
			<!-- start .container -->
			<div class="container">
				<!-- start .angle-border -->
				<div class="angle-border dark">
					<h2>Контакты</h2>
					<h3>Манго! Консалтинг</h3>
				</div>
				 <!-- end .angle-border -->
				<!-- start .wrap -->
				<div class="wrap">
				<!-- start .left-part -->
				<div class="left-part">
					<p>Звоните: <strong><a href="tel:+7-916-498-69-82">+7-916-498-69-82 </a></strong></p>
					<p>Время работы: <strong>9:00 – 18:00 ч.</strong></p>
				</div>
				 <!-- end .left-part -->
				 <!-- start .right-part -->
				 <div class="right-part">

				 	<p>Пишите:
					<ul>
						<li><strong>o.koschinsky@mangoco.ru </strong></li>
						<li><strong>m.shevchenko@mangoco.ru</strong></li>
					</ul>

 </p>
				 </div>
				  <!-- end .right-part -->
				</div>
				 <!-- end .wrap -->
			</div>
			 <!-- end .container -->
		</section>
		 <!-- end .contacts -->

		<footer>
			<!-- start .container -->
			<div class="container">
				<!-- start .wrap -->
				<div class="wrap">
					<p>2017. Все права защищены.</p>
					<a href="#top" class="to-id  btn-up">Наверх</a>
				</div>
				 <!-- end .wrap -->

			</div>
			 <!-- end .container -->

		</footer>


<!-- POPUP -->
	<!-- start .wrap -->
	<div id="form-popup" class="wrap  popup-cont  mfp-hide white-popup-block">
			<span class="present-icon"></span>
			<h3>ПОДАРОК</h3>
			<h4>10% скидка на первую игру!</h4>
			<p>Оставьте заявку 
и мы Вам сразу перезвоним</p>
		<form  action="" class="">
            <div class="group">
                <input type="text" name="name" class="name" placeholder="Имя" reqiured/>
                <span class="icon icon-person"></span>
            </div>
            <!-- end .group -->
            <!-- start .group -->
            <div class="group">
                <input type="text" name="phone" class="phone" placeholder="Телефон" reqiured/>
                <span class="icon icon-phone"></span>
            </div>
            <!-- end .group -->
            <button type="submit" class="btn">ПОДОБРАТЬ ИГРУ</button>
            <p class="note">*Ваши данные конфиденциальны</p>
            <!-- start .succes -->
            <p class="success hidden-s">Спасибо за заявку!</p>
			<?php echo $hidden_inpunt; ?>
			<span class="mfp-close"><i class="fa fa-times" aria-hidden="true"></i></span>
		</form>
		<!-- END POPUP -->
</div>
	 <!-- end .wrap -->


<!-- popup with slider -->
	<!-- start .wrap -->
	<div id="slider-popup" class="wrap popup-cont slider-popup mfp-hide white-popup-block">
			<!-- start .slider -->
			<div class="slider pop-slider">
				<!-- start .slide -->
				<div class="slide">
					<h3>Эмоции</h3>
					<!-- start .wrap -->
					<div class="wrap">
						<!-- start .top-block -->
						<div class="top-block">
							<!-- start .l-part -->
							<div class="l-part">
								<p>
									Без мотивации сильной команды
просто не может быть: ей как 
воздух необходимы заряжающие
энергией эмоции
								</p>
							</div>
							 <!-- end .l-part -->
							 <!-- start .r-part -->
							 <div class="r-part">
								<p>
									Как правило, чем больше ответственных решений
принимает сотрудник, тем быстрее его карьерный
рост и выше ценность для компании. Но это может
вызвать постоянный стресс и быстро изматывать.
Деловые игры могут помочь расслабиться и
взглянуть на операционную деятельность с другой
стороны.
								</p>
							 </div>
							  <!-- end .r-part -->
						</div>
						 <!-- end .top-block -->
						<!-- start .bottom-block -->
						<div class="bottom-block">
							<h4>Деловые игры помогают:</h4>
							<ul  class="with-nums">
								<li>
									<span class="num">01</span>
									<p>
										Обмениваться с коллегами
непривычными для Вас
эмоциональными средствами:
речевыми, мимикой, жестами...
									</p>
								</li>
								<li>
									<span class="num">02</span>
									<p>
										"это же игра": нет страха
сделать что-то не так и вы
учитесь принимать быстрее
и больше полезных
решений
									</p>
								</li>
								<li>
									<span class="num">03</span>
									<p>
										азартный и захватывающий
формат, вовлекает участников
в игровой и познавательный
процессы.
									</p>
								</li>
							</ul>
						</div>
						 <!-- end .bottom-block -->
					</div>
					 <!-- end .wrap -->
				</div>
				 <!-- end .slide -->
				<div class="slide">
					<h3>Обучение</h3>
					<!-- start .wrap -->
					<div class="wrap">
						<h4>Деловые игры помогают развивать эмоциональный интеллект, лидерство, коммуникацию:</h4>
						<ul class="circle-type">
							<li>Постановка задач </li>
							<li>Принятие решений в условиях неопределенности </li>
							<li>Делегирование полномочий </li>
							<li>Выбор стратегии Cдостижения целей </li>
							<li>Осуществление контроля над выполнением задач </li>
							<li>Умение мотивировать сотрудников </li>
							<li>Командообразование </li>
							<li>Навыки управления </li>
							<li>Ораторское мастерство </li>
							<li>Умение брать на себя ответственность за групповой результат </li>
							<li>Навыки презентации </li>
							<li>Предотвращение и минимизация конфликтов </li>
							<li>Влияние и убеждение </li>
							<li>Нетворкинг </li>
							<li>Ведение жестких переговоров </li>
							<li>Противостояние манипуляциям </li>
							<li>Системное мышление </li>
							<li>Персональная эффективность </li>
							<li>Креативное мышление </li>
							<li>Логика </li>
							<li>Интуиция </li>
						</ul>
					</div>
					 <!-- end .wrap -->
				</div>
				 <!-- end .slide -->
				<div class="slide">
					<h3>Игра</h3>
					<!-- start .wrap -->
					<div class="wrap">
						<h4 class="with-bborder">Деловые игры помогают развивать эмоциональный интеллект, лидерство, коммуникацию:</h4>
						<h4>Игры разработаны специально для топ-менеджмента. 
По сути игры это тоже самое что и бизнес:</h4>
						<!-- start .with-icons -->
						<ul class="with-icons">
							<li>
								<div class="wrap-img"><img src="img/bag-icon.png" alt="" /></div>
								<h5>ситуация</h5>
								<p>в которой мы находимся</p>
							</li>
							<li>
								<div class="wrap-img"><img src="img/target-icon.png" alt="" /></div>
								<h5>Цель</h5>
								<p>к которой мы движемся</p>
							</li>
							<li>
								<div class="wrap-img"><img src="img/gear-icon.png" alt="" /></div>
								<h5>Ресурсы</h5>
								<p>ресурсные ограничения</p>
							</li>
						</ul>
						 <!-- end .with-icons -->
						<h4>И Время. Оно всегда играет против вас. Поэтому один год в игре может занимать всего
15 минут - научитесь ценить время.</h4>
					</div>
					 <!-- end .wrap -->
				</div>
				 <!-- end .slide -->
				<div class="slide result">
					<h3>Результат</h3>
					<!-- start .wrap -->
					<div class="wrap">
						<h4>Командная сессия на основе деловых игр:</h4>
													<ul class="with-nums">
								<li>
									<span class="num">01</span>
									<p>
										многофункциональный
инструмент бизнес - обучения
для решения различных задач,
стоящих перед руководителями
и HR;
									</p>
								</li>
								<li>
									<span class="num">02</span>
									<p>
										многоразовый тренажер с
дифференцированными
уровнями сложности;
									</p>
								</li>
								<li>
									<span class="num">03</span>
									<p>
										азартный и захватывающий
формат, вовлекает участников
в игровой и познавательный
процессы;
									</p>
								</li>
								<li>
									<span class="num">04</span>
									<p>
										позитивный настрой участников
и ощущение единства команды
и силы командного духа;
									</p>
								</li>
								<li>
									<span class="num">05</span>
									<p>
										игры очень гибкие и
дорабатываются нами под
конкретный запрос и 
аудиторию.
									</p>
								</li>
								<li>
									<span class="num">06</span>
									<p>
										Мы получаем стопроцентную
положительную обратную связь 
от всех участников и заказчика.
									</p>
								</li>
							</ul>
					</div>
					 <!-- end .wrap -->
				</div>
				 <!-- end .slide -->
			</div>
			 <!-- end .slider -->
			<span class="mfp-close"><i class="fa fa-times" aria-hidden="true"></i></span>
		<!-- END POPUP -->
</div>
	 <!-- end .wrap -->

<!-- end -->


<!-- simulation popup -->
<div id="simulation-1" class="wrap  popup-cont slider-popup simulation mfp-hide white-popup-block">
		<h3>Модель симуляции</h3>
		<!-- start .wrap -->
		<div class="wrap">
			<!-- start .left-block -->
			<!-- start .row -->
			<div class="row">
			<div class="left-block">
				<ul>
					<li>
						<h5>Царь</h5>
						<p>Ключевая фигура в симуляции. В его руках
находятся все рычаги управления государством,
а на его плечах лежит ответственность за успех
всей игры.</p>
					</li>
					<li>
						<h5>Бояре</h5>
						<p>Посредники между Царем и остальными ролями,
претворяют в жизнь указы Царя и помогают ему
управлять государством. </p>
					</li>
					<li>
						<h5>Князья</h5>
						<p>Посредники между Царем и остальными ролями,
претворяют в жизнь указы Царя и помогают ему
управлять государством.</p>
					</li>
					<li>
						<h5>Крестьяне</h5>
						<p>Подданные Царя, основная рабочая сила
государства, при этом их вклад и влияние на
игру сложно переоценить.</p>
					</li>
					<li>
						<h5>Заморские купцы</h5>
						<p>жители заморских земель, на них не
распространяется влияние Царя, а успех
государства не влияет на их победу.</p>
					</li>
				</ul>
			</div>
			 <!-- end .left-block -->
			 <!-- start .right-block -->
			 <div class="right-block">
			 	<img src="img/model-simulation-1.png" alt="" />
			 </div>
			  <!-- end .right-block -->
			 </div>
			 <!-- end .row -->
		</div>
		 <!-- end .wrap -->
		<span class="mfp-close"><i class="fa fa-times" aria-hidden="true"></i></span>
</div>


<div id="simulation-2" class="wrap  popup-cont slider-popup simulation mfp-hide white-popup-block">
		<h3>Модель симуляции</h3>
		<!-- start .wrap -->
		<div class="wrap">
			<!-- start .left-block -->
			<!-- start .row -->
			<div class="row">
			<div class="left-block">
				<ul>
					<li>
						<h5>Лорды</h5>
						<p>Самые могущественные люди Вестероса, каждый
из которых управляет своей вотчиной, но мечтает
занять Железный трон. От их стиля руководства
и выбранной стратегии зависит многое</p>
					</li>
					<li>
						<h5>Мейстеры</h5>
						<p>Ближайшие советники Лордов, чью роль сложно
переоценить. Их задача - управлять народной
популярностью</p>
					</li>
					<li>
						<h5>Мастера над монетой </h5>
						<p>Казначеи каждого из Домов, ведут подсчёт доходов
и ресурсов своих домов, имеют исключительное
право вести расчеты с  ведущим</p>
					</li>
					<li>
						<h5>Мастера над шептунами </h5>
						<p>Поданные Лорда, в чьем подчинении находятся
шпионы, которых Мастера засылают к другим
командам для диверсий и добычи информации</p>
					</li>
				</ul>
			</div>
			 <!-- end .left-block -->
			 <!-- start .right-block -->
			 <div class="right-block">
			 	<img src="img/model-simulation-2.jpg" alt="" />
			 </div>
			  <!-- end .right-block -->
			 </div>
			 <!-- end .row -->
		</div>
		 <!-- end .wrap -->
		<span class="mfp-close"><i class="fa fa-times" aria-hidden="true"></i></span>
</div>



<div id="simulation-3" class="wrap  popup-cont slider-popup simulation mfp-hide white-popup-block">
		<h3>Модель симуляции</h3>
		<!-- start .wrap -->
		<div class="wrap">
			<!-- start .left-block -->
			<!-- start .row -->
			<div class="row">
			<div class="left-block full">
				<ul>
					<li>
						<h5>Капитан</h5>
						<p>лидер команды, единственный, кто может общаться с Рынком. Именно он организует групповую работу, и на
него ложится ответственность за успех или поражение команды </p>
					</li>
					<li>
						<h5>Главные инженеры </h5>
						<p>Посредники между Капитаном и Рядовыми инженерами, претворяют в жизнь указы Капитана и помогают ему
советами</p>
					</li>
					<li>
						<h5>Рядовые инженеры </h5>
						<p>На их плечах лежит производство деталей для космических модулей, и именно от их слаженности и умения
подстраиваться под изменения зависит победа команды</p>
					</li>
				</ul>
			</div>
			 <!-- end .left-block -->
			 </div>
			 <!-- end .row -->
		</div>
		 <!-- end .wrap -->
		<span class="mfp-close"><i class="fa fa-times" aria-hidden="true"></i></span>
</div>
<!-- end -->

<!-- timeplan popup -->

<div id="time-plan-1" class="wrap  popup-cont slider-popup timeplan mfp-hide white-popup-block">
		<h3>Модель симуляции</h3>
		<!-- start .wrap -->
		<div class="wrap">
			<table>
			<thead>
				<th>
					<tr>
						<td>Время</td>
						<td>Кто/что</td>
						<td>Активности</td>
					</tr>
				</th>
			</thead>
			<tbody>
				<tr>
					<td>45 минут</td>
					<td>Центральный Ведущий,
фасилитаторы, ассистенты</td>
					<td>Введение. Объяснение контекста игры. Выборы царя,
распределение ролей. Ответы на вопросы участников, уточнения
правил и ограничений. </td>
				</tr>

				<tr>
					<td>50 минут  <br /> 25 минут </td>
					<td>Игра: годы 1-3<br />
Фасилитация</td>
					<td>Игровой процесс. По 16 мин на игровой год.
Стоп-игра. Обсуждение в мини-группах. Цель - обсуждение
проблем, предложение решений, выработка дальнейшей
стратегии.  </td>
				</tr>

				<tr>
					<td>10 минут </td>
					<td>Ярмарка идей. </td>
					<td>Царь и бояре знакомятся с идеями групп в формате коротких
презентаций. </td>
				</tr>

				<tr>
					<td>50 минут  <br />
15 минут </td>
					<td> Игра: годы 4-6 <br />
Подведение итогов
в мини-группах. </td>
					<td>Игровой процесс. По 16 минут на игровой год.
Параллельно ведущие осуществляют подсчет заработанных
средств и определение победителей. </td>
				</tr>

				<tr>
					<td>15-20 минут</td>
					<td>Оглашение победителей
в каждом из игровых
сословий.</td>
					<td>Краткие выступления победителей. </td>
				</tr>

				<tr>
					<td>5-10 минут </td>
					<td>Слово спонсора</td>
					<td>Завершающее выступление руководителя департамента.</td>
				</tr>
			</tbody>

			</table>
		</div>
		 <!-- end .wrap -->
		<span class="mfp-close"><i class="fa fa-times" aria-hidden="true"></i></span>
</div>

<div id="time-plan-2" class="wrap  popup-cont slider-popup timeplan mfp-hide white-popup-block">
		<h3>Модель симуляции</h3>
		<!-- start .wrap -->
		<div class="wrap">
			<table>
			<thead>
				<th>
					<tr>
						<td>Время</td>
						<td>Кто/что</td>
						<td>Активности</td>
					</tr>
				</th>
			</thead>
			<tbody>
				<tr>
					<td>45 минут</td>
					<td>Центральный Ведущий,
фасилитаторы, ассистенты</td>
					<td>Введение. Объяснение контекста игры. Выборы царя,
распределение ролей. Ответы на вопросы участников, уточнения
правил и ограничений. </td>
				</tr>

				<tr>
					<td>50 минут  <br /> 25 минут </td>
					<td>Игра: годы 1-3<br />
Фасилитация</td>
					<td>Игровой процесс. По 16 мин на игровой год.
Стоп-игра. Обсуждение в мини-группах. Цель - обсуждение
проблем, предложение решений, выработка дальнейшей
стратегии.  </td>
				</tr>

				<tr>
					<td>10 минут </td>
					<td>Ярмарка идей. </td>
					<td>Царь и бояре знакомятся с идеями групп в формате коротких
презентаций. </td>
				</tr>

				<tr>
					<td>50 минут  <br />
15 минут </td>
					<td> Игра: годы 4-6 <br />
Подведение итогов
в мини-группах. </td>
					<td>Игровой процесс. По 16 минут на игровой год.
Параллельно ведущие осуществляют подсчет заработанных
средств и определение победителей. </td>
				</tr>

				<tr>
					<td>15-20 минут</td>
					<td>Оглашение победителей
в каждом из игровых
сословий.</td>
					<td>Краткие выступления победителей. </td>
				</tr>

				<tr>
					<td>5-10 минут </td>
					<td>Слово спонсора</td>
					<td>Завершающее выступление руководителя департамента.</td>
				</tr>
			</tbody>

			</table>
		</div>
		 <!-- end .wrap -->
		<span class="mfp-close"><i class="fa fa-times" aria-hidden="true"></i></span>
</div>

<div id="time-plan-3" class="wrap  popup-cont slider-popup timeplan mfp-hide white-popup-block">
		<h3>Модель симуляции</h3>
		<!-- start .wrap -->
		<div class="wrap">
			<table>
			<thead>
				<th>
					<tr>
						<td>Время</td>
						<td>Кто/что</td>
						<td>Активности</td>
					</tr>
				</th>
			</thead>
			<tbody>
				<tr>
					<td>45 минут</td>
					<td>Центральный Ведущий,
фасилитаторы, ассистенты</td>
					<td>Введение. Объяснение контекста игры. Выборы царя,
распределение ролей. Ответы на вопросы участников, уточнения
правил и ограничений. </td>
				</tr>

				<tr>
					<td>50 минут  <br /> 25 минут </td>
					<td>Игра: годы 1-3<br />
Фасилитация</td>
					<td>Игровой процесс. По 16 мин на игровой год.
Стоп-игра. Обсуждение в мини-группах. Цель - обсуждение
проблем, предложение решений, выработка дальнейшей
стратегии.  </td>
				</tr>

				<tr>
					<td>10 минут </td>
					<td>Ярмарка идей. </td>
					<td>Царь и бояре знакомятся с идеями групп в формате коротких
презентаций. </td>
				</tr>

				<tr>
					<td>50 минут  <br />
15 минут </td>
					<td> Игра: годы 4-6 <br />
Подведение итогов
в мини-группах. </td>
					<td>Игровой процесс. По 16 минут на игровой год.
Параллельно ведущие осуществляют подсчет заработанных
средств и определение победителей. </td>
				</tr>

				<tr>
					<td>15-20 минут</td>
					<td>Оглашение победителей
в каждом из игровых
сословий.</td>
					<td>Краткие выступления победителей. </td>
				</tr>

				<tr>
					<td>5-10 минут </td>
					<td>Слово спонсора</td>
					<td>Завершающее выступление руководителя департамента.</td>
				</tr>
			</tbody>

			</table>
		</div>
		 <!-- end .wrap -->
		<span class="mfp-close"><i class="fa fa-times" aria-hidden="true"></i></span>
</div>
<!-- end -->


        <script  src="js/scripts.min.js"></script>
        <script  src="integration_vtiger/js/watch.js"></script>
        <!-- <script  src="integration_vtiger/form.js"></script> -->
    </body>
</html>