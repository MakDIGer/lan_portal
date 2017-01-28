
<?php
/**
 * @copyright   Copyright (C) 2017 KGDNET.RU. All rights reserved.
 */

defined('_JEXEC') or die;

$doc = JFactory::getDocument();

$doc->setTitle('KGDNET.RU - '.$this->getTitle());
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/assets/css/main.css');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/assets/js/jquery.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/assets/js/jquery.dropotron.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/assets/js/skel.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/assets/js/util.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/assets/js/main.js');

// Output as HTML5
$doc->setHtml5(true);
?>

<!DOCTYPE HTML>
<!--
	Шаблон доработал Макарин Николай
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<jdoc:include type="head" />
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="<?php echo JUri::base(true); ?>">KGDNET.RU</a></h1>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<jdoc:include type="modules" name="position-0" />
							</nav>
					</header>
				</div>
			<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="image 8u">
								<p><img src="<?php echo $this->baseurl . '/templates/' . $this->template; ?>/images/switches.jpg" /></p>
							</div>
							<div class="image 4u">
								<p><img src="<?php echo $this->baseurl . '/templates/' . $this->template; ?>/images/server.jpg" /></p>
							</div>
						</div>
					</div>
				</div>

			<!-- Features -->
				<jdoc:include type="modules" name="position-1" />

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row 200%">
							<div class="4u 12u(medium)">

								<!-- Sidebar -->
									<div id="sidebar">
										<section class="widget thumbnails">
											<h3>Мы используем:</h3>
											<div class="grid">
												<div class="row 50%">
													<div class="6u"><a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a></div>
													<div class="6u"><a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a></div>
													<div class="6u"><a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a></div>
													<div class="6u"><a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a></div>
												</div>
											</div>
										</section>
									</div>

							</div>
							<div class="8u 12u(medium) important(medium)">

								<!-- Content -->
									<div id="content">
										<section class="last">
											<h2>Что такое KGDNET?</h2>
											<p><strong>KGDNET</strong> - это частная локальная сеть, объединяющая компьютеры, ноутбуки, мобильные телефоны, планшеты, телевизоры, сетевые ТВ-терминалы
											и игровые приставки в единую сеть на рекордно быстрой скорости до 1 Гбит/сек.</p>
											<p>Всем пользователям сети доступны внутрисетевые сервисы такие как: <strong>безлимитный доступ в интернет</strong>, <strong>ip-телефония</strong> и <strong>облачное хранение файлов</strong> на общем внутрисетевом сервере.</p>
										</section>
									</div>

							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="3u 6u(medium) 12u$(small)">
								<!-- Links -->
									<section class="widget links">
										<h3>Локалка</h3>
										<ul class="style2">
											<li><a href="#">Подключение к сети</a></li>
											<li><a href="#">Локальные ресурсы</a></li>
											<li><a href="#">Файлохранилище</a></li>
											<li><a href="#">Тест скорости</a></li>
											<li><a href="#">Возможные проблемы</a></li>
										</ul>
									</section>
							</div>
							<div class="3u 6u$(medium) 12u$(small)">
								<!-- Links -->
									<section class="widget links">
										<h3>Интернет</h3>
										<ul class="style2">
											<li><a href="#">Подключение</a></li>
											<li><a href="#">Настройка</a></li>
											<li><a href="#">Email</a></li>
											<li><a href="#">Возможные проблемы</a></li>
										</ul>
									</section>
							</div>
							<div class="3u 6u(medium) 12u$(small)">
								<!-- Links -->
									<section class="widget links">
										<h3>ip-телефония</h3>
										<ul class="style2">
											<li><a href="#">Подключение</a></li>
											<li><a href="#">Настройка</a></li>
											<li><a href="#">Возможные проблемы</a></li>
										</ul>
									</section>
							</div>
							<div class="3u 6u$(medium) 12u$(small)">
								<!-- Contact -->
									<section class="widget contact last">
										<h3>Техническая поддержка</h3>
										<p>Email: admin@kgdnet.ru,<br />
										Тел. внутр.: 1005/1008,<br />
										Тел. гор.: +7 (4012) 52-74-43</p>
									</section>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; 2016-2017 <a href="http://kgdnet.ru">KGDNET.RU</a> Все права защищены.</li><li>Дизайн: <a href="http://html5up.net">HTML5 UP</a></li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

			</div>
	</body>
</html>