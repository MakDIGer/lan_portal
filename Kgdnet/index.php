
<?php
/**
 * @copyright   Copyright (C) 2017 KGDNET.RU. All rights reserved.
 */

defined('_JEXEC') or die;

$doc = JFactory::getDocument();

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

			<!-- Features -->
				<jdoc:include type="modules" name="position-1" />
			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row 200%">
							<div class="12u 12u(medium)">

								<!-- Content -->
									<div id="content">
										<section class="last">
										<jdoc:include type="component" />
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
										<jdoc:include type="modules" name="position-2" />
									</section>
							</div>
							<div class="3u 6u$(medium) 12u$(small)">
								<!-- Links -->
									<section class="widget links">
										<h3>Интернет</h3>
										<jdoc:include type="modules" name="position-3" />
									</section>
							</div>
							<div class="3u 6u(medium) 12u$(small)">
								<!-- Links -->
									<section class="widget links">
										<h3>ip-телефония</h3>
										<jdoc:include type="modules" name="position-4" />
									</section>
							</div>
							<div class="3u 6u$(medium) 12u$(small)">
								<!-- Contact -->
									<section class="widget contact last">
										<jdoc:include type="modules" name="support" />
									</section>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<div id="copyright">
									<ul class="menu">
										<li><jdoc:include type="modules" name="footer" /></li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

			</div>
	</body>
</html>
