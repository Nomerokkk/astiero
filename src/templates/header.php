<? global $target;

$target = '../assets';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Astiero</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	<? if($page == 'home') { ?>
		<link rel="stylesheet" href="<?= $target; ?>/css/home/home.css">
	<? } ?>

	<? if($page == 'login') { ?>
		<link rel="stylesheet" href="<?= $target; ?>/css/login/login.css">
	<? } ?>

	<? if($page == 'page') { ?>
		<link rel="stylesheet" href="<?= $target; ?>/css/page/page.css">
	<? } ?>

	<? if($page == '404') { ?>
		<link rel="stylesheet" href="<?= $target; ?>/css/404/404.css">
	<? } ?>

	<? if($page == 'panel') { ?>
		<link rel="stylesheet" href="<?= $target; ?>/css/panel/panel.css">
	<? } ?>

	<? if($page == 'admin') { ?>
		<link rel="stylesheet" href="<?= $target; ?>/css/admin/admin.css">
	<? } ?>
	
	<link rel="stylesheet" href="<?= $target; ?>/libs/tel/css/intlTelInput.min.css">

	<link rel="apple-touch-icon" sizes="180x180" href="<?= $target; ?>/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= $target; ?>/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= $target; ?>/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?= $target; ?>/img/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?= $target; ?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
</head>
<body <?= ($page == 'panel' || $page == 'admin') ? 'class="body-wrapper"' : '' ?>>
	
	<? if($page == 'panel') { ?>

		<header class="header header--user-panel j-header">
			<div class="container">
				<div class="header__wrapper">
					<a href="/" class="header__logo">
						<svg>
							<use xlink:href="<?= $target; ?>/img/icons.svg#logo"/>
						</svg>
					</a>
					<div class="header__info">
						<a href="#period-modal" data-fancybox class="btn btn--orange header__promo">
							?????????????? ???????????? - ???????????????? 10 ????????
						</a>
						<a href="tel:example@gmail.com" class="header__phone">
							<svg>
								<use xlink:href="<?= $target; ?>/img/icons.svg#email"/>
							</svg>
							example@gmail.com
						</a>
						<div class="lang">
							<div class="lang__title" data-target="#lang">
								<div class="lang__img">
									<img src="<?= $target; ?>/img/lang/ru.svg" alt="">
								</div>
								<div class="lang__name">
									??????????????
								</div>
								<svg>
									<use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
								</svg>
							</div>
							<div class="lang__menu" id="lang">
								<ul class="lang__list">
									<li>
										<a href="#" class="lang__item">
											<div class="lang__img">
												<img src="<?= $target; ?>/img/lang/en.svg" alt="">
											</div>
											<div class="lang__name">
												English
											</div>
										</a>
									</li>
									<li>
										<a href="#" class="lang__item">
											<div class="lang__img">
												<img src="<?= $target; ?>/img/lang/uk.svg" alt="">
											</div>
											<div class="lang__name">
												????????????????????
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="login login--panel">
							<div class="btn btn--border login__btn">
								<a href="#" class="login__title">
									<div class="login__user">
										<svg>
											<use xlink:href="<?= $target; ?>/img/icons.svg#user"/>
										</svg>
									</div>
									<div class="login__name">
										???????? ????????????
									</div>
								</a>
								<div class="login__arrow" data-target="#login, .login__btn">
									<svg>
										<use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
									</svg>
								</div>
							</div>
							<ul class="login__menu" id="login">
								<li>
									<div class="login__item login__item--name">
										<span>???????? ????????????</span>
									</div>
								</li>
								<li><a href="settings.php" class="login__item"><span>??????????????????</span></a></li>
								<li><a href="#exit-modal" data-fancybox class="login__item"><span>??????????</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="promo-tablet j-period">
				<a href="#period-modal" data-fancybox class="promo-tablet__title">
					?????????????? ???????????? - ???????????????? 10 ????????
				</a>
				<div class="promo-tablet__close j-period-remove">
					<svg>
						<use xlink:href="<?= $target; ?>/img/icons.svg#close"/>
					</svg>
				</div>
			</div>
			<div class="menup" id="menup">
				<div class="menup__inner">
					<div class="menup__arrow" data-target="#menup">
						<svg>
							<use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
						</svg>
					</div>
					<nav class="menup__nav j-overflow-wrap">
						<ul class="menup__list">
							<? $items = [
								0 => [
									'img' => $target . '/img/start/1.svg#icon',
									'title' => '??????????????',
									'href' => 'account.php',
								],
								1 => [
									'img' => $target . '/img/start/2.svg#icon',
									'title' => '?????????????? ???????? ??????????????',
									'href' => 'step1.php',
								],
								2 => [
									'img' => $target . '/img/start/3.svg#icon',
									'title' => '????????????????',
									'href' => 'patients.php',
								],
								3 => [
									'img' => $target . '/img/start/4.svg#icon',
									'title' => '?????? ??????????',
									'href' => 'plans.php',
								],
								4 => [
									'img' => $target . '/img/start/5.svg#icon',
									'title' => '??????????????????',
									'href' => 'documents.php',
								],
								5 => [
									'img' => $target . '/img/start/6.svg#icon',
									'title' => '????????????????????',
									'href' => 'info.php',
								],
								6 => [
									'img' => $target . '/img/start/7.svg#icon',
									'title' => '????????????',
									'href' => 'help.php',
								],
							];

							foreach($items as $item) { ?>

								<li>
									<a href="<?= $item['href']; ?>" class="<?= (strpos($_SERVER['REQUEST_URI'], $item['href'])) ? 'active' : ''; ?>">
										<div class="menup__item">
											<div class="menup__icon">
												<svg>
													<use xlink:href="<?= $item['img']; ?>"/>
												</svg>
											</div>
											<div class="menup__title">
												<?= $item['title']; ?>
											</div>
										</div>
									</a>
								</li>

							<? } ?>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<div class="header-toggle header-toggle--user-panel" data-target="#menu, .j-overlay">
			<span></span><span></span><span></span>
		</div>

		<div class="menu menu--user-panel" id="menu">
			<div class="menu__wrapper">
				<ul class="menu__list">
					<li><a href="/#functions" <?= ($page == 'home') ? 'data-scroll="#functions"' : ''; ?>>?????????????? ??????????????????</a></li>
					<li><a href="/#problems" <?= ($page == 'home') ? 'data-scroll="#problems"' : ''; ?>>?????????? ???????????????? ???? ????????????</a></li>
					<li><a href="/#tarifs" <?= ($page == 'home') ? 'data-scroll="#tarifs"' : ''; ?>>???????????????? ??????????</a></li>
					<li><a href="/#reviews" <?= ($page == 'home') ? 'data-scroll="#reviews"' : ''; ?>>????????????</a></li>
				</ul>
				<div class="menu__bottom">
					<a href="tel:example@gmail.com" class="header__phone">
						<svg>
							<use xlink:href="<?= $target; ?>/img/icons.svg#email"/>
						</svg>
						example@gmail.com
					</a>
				</div>
			</div>
		</div>

	<? } elseif($page == 'admin') { ?>

		<header class="header header--user-panel header--admin j-header">
			<div class="container">
				<div class="header__wrapper">
					<a href="/" class="header__logo">
						<svg>
							<use xlink:href="<?= $target; ?>/img/icons.svg#logo"/>
						</svg>
					</a>
					<div class="header__info">
						<div class="lang">
							<div class="lang__title" data-target="#lang">
								<div class="lang__img">
									<img src="<?= $target; ?>/img/lang/ru.svg" alt="">
								</div>
								<div class="lang__name">
									??????????????
								</div>
								<svg>
									<use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
								</svg>
							</div>
							<div class="lang__menu" id="lang">
								<ul class="lang__list">
									<li>
										<a href="#" class="lang__item">
											<div class="lang__img">
												<img src="<?= $target; ?>/img/lang/en.svg" alt="">
											</div>
											<div class="lang__name">
												English
											</div>
										</a>
									</li>
									<li>
										<a href="#" class="lang__item">
											<div class="lang__img">
												<img src="<?= $target; ?>/img/lang/uk.svg" alt="">
											</div>
											<div class="lang__name">
												????????????????????
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="login login--panel">
							<div class="btn btn--border login__btn">
								<a href="#" class="login__title">
									<div class="login__user">
										<svg>
											<use xlink:href="<?= $target; ?>/img/icons.svg#user"/>
										</svg>
									</div>
									<div class="login__name">
										???????? ????????????
									</div>
								</a>
								<div class="login__arrow" data-target="#login, .login__btn">
									<svg>
										<use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
									</svg>
								</div>
							</div>
							<ul class="login__menu" id="login">
								<li>
									<div class="login__item login__item--name">
										<span>???????? ????????????</span>
									</div>
								</li>
								<li><a href="settings.php" class="login__item"><span>??????????????????</span></a></li>
								<li><a href="#exit-modal" data-fancybox class="login__item"><span>??????????</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="menup" id="menup">
				<div class="menup__inner">
					<div class="menup__arrow" data-target="#menup">
						<svg>
							<use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
						</svg>
					</div>
					<nav class="menup__nav j-overflow-wrap">
						<ul class="menup__list">
							<? $items = [
								0 => [
									'img' => $target . '/img/start/8.svg#icon',
									'title' => '??????????????',
									'href' => 'index.php',
								],
								1 => [
									'img' => $target . '/img/start/1.svg#icon',
									'title' => '????????????????????????',
									'href' => 'users.php',
								],
								2 => [
									'img' => $target . '/img/start/9.svg#icon',
									'title' => '?????????????????????? ????????',
									'href' => 'prices.php',
								],
								3 => [
									'img' => $target . '/img/start/10.svg#icon',
									'title' => '?????????????????? ???????????????? ??????????',
									'href' => 'settings.php',
								],
							];

							foreach($items as $item) { ?>

								<li>
									<a href="<?= $item['href']; ?>" class="<?= (strpos($_SERVER['REQUEST_URI'], $item['href'])) ? 'active' : ''; ?>">
										<div class="menup__item">
											<div class="menup__icon">
												<svg>
													<use xlink:href="<?= $item['img']; ?>"/>
												</svg>
											</div>
											<div class="menup__title">
												<?= $item['title']; ?>
											</div>
										</div>
									</a>
								</li>

							<? } ?>
						</ul>
					</nav>
				</div>
			</div>
		</header>

	<? } elseif($page == '404') { ?>

		<header class="header header--user-panel j-header">
			<div class="container">
				<div class="header__wrapper">
					<a href="/" class="header__logo">
						<svg>
							<use xlink:href="<?= $target; ?>/img/icons.svg#logo"/>
						</svg>
					</a>
					<div class="header__info">
						<a href="#period-modal" data-fancybox class="btn btn--orange header__promo">
							?????????????? ???????????? - ???????????????? 10 ????????
						</a>
						<a href="tel:example@gmail.com" class="header__phone">
							<svg>
								<use xlink:href="<?= $target; ?>/img/icons.svg#email"/>
							</svg>
							example@gmail.com
						</a>
						<div class="lang">
							<div class="lang__title" data-target="#lang">
								<div class="lang__img">
									<img src="<?= $target; ?>/img/lang/ru.svg" alt="">
								</div>
								<div class="lang__name">
									??????????????
								</div>
								<svg>
									<use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
								</svg>
							</div>
							<div class="lang__menu" id="lang">
								<ul class="lang__list">
									<li>
										<a href="#" class="lang__item">
											<div class="lang__img">
												<img src="<?= $target; ?>/img/lang/en.svg" alt="">
											</div>
											<div class="lang__name">
												English
											</div>
										</a>
									</li>
									<li>
										<a href="#" class="lang__item">
											<div class="lang__img">
												<img src="<?= $target; ?>/img/lang/uk.svg" alt="">
											</div>
											<div class="lang__name">
												????????????????????
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="login login--panel">
							<div class="btn btn--border login__btn">
								<a href="#" class="login__title">
									<div class="login__user">
										<svg>
											<use xlink:href="<?= $target; ?>/img/icons.svg#user"/>
										</svg>
									</div>
									<div class="login__name">
										???????? ????????????
									</div>
								</a>
								<div class="login__arrow" data-target="#login, .login__btn">
									<svg>
										<use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
									</svg>
								</div>
							</div>
							<ul class="login__menu" id="login">
								<li>
									<div class="login__item login__item--name">
										<span>???????? ????????????</span>
									</div>
								</li>
								<li><a href="settings.php" class="login__item"><span>??????????????????</span></a></li>
								<li><a href="#exit-modal" data-fancybox class="login__item"><span>??????????</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="header-toggle header-toggle--user-panel" data-target="#menu, .j-overlay">
			<span></span><span></span><span></span>
		</div>

		<div class="menu menu--user-panel" id="menu">
			<div class="menu__wrapper">
				<ul class="menu__list">
					<li><a href="/#functions" <?= ($page == 'home') ? 'data-scroll="#functions"' : ''; ?>>?????????????? ??????????????????</a></li>
					<li><a href="/#problems" <?= ($page == 'home') ? 'data-scroll="#problems"' : ''; ?>>?????????? ???????????????? ???? ????????????</a></li>
					<li><a href="/#tarifs" <?= ($page == 'home') ? 'data-scroll="#tarifs"' : ''; ?>>???????????????? ??????????</a></li>
					<li><a href="/#reviews" <?= ($page == 'home') ? 'data-scroll="#reviews"' : ''; ?>>????????????</a></li>
				</ul>
				<div class="menu__bottom">
					<a href="tel:example@gmail.com" class="header__phone">
						<svg>
							<use xlink:href="<?= $target; ?>/img/icons.svg#email"/>
						</svg>
						example@gmail.com
					</a>
				</div>
			</div>
		</div>

	<? } else { ?>

		<header class="header j-header">
			<div class="header__wrapper">
				<a href="/" class="header__logo">
					<svg>
						<use xlink:href="<?= $target; ?>/img/icons.svg#logo"/>
					</svg>
				</a>
				<nav class="header__nav">
					<ul class="header__menu">
						<li><a href="/#functions" <?= ($page == 'home') ? 'data-scroll="#functions"' : ''; ?>>?????????????? ??????????????????</a></li>
						<li><a href="/#problems" <?= ($page == 'home') ? 'data-scroll="#problems"' : ''; ?>>?????????? ???????????????? ???? ????????????</a></li>
						<li><a href="/#tarifs" <?= ($page == 'home') ? 'data-scroll="#tarifs"' : ''; ?>>???????????????? ??????????</a></li>
						<li><a href="/#reviews" <?= ($page == 'home') ? 'data-scroll="#reviews"' : ''; ?>>????????????</a></li>
					</ul>
				</nav>
				<div class="header__info">
					<a href="tel:example@gmail.com" class="header__phone">
						<svg>
							<use xlink:href="<?= $target; ?>/img/icons.svg#email"/>
						</svg>
						example@gmail.com
					</a>
					<!-- <div class="login">
						<a href="login.php" class="btn btn--border login__btn">
							??????????????????????
						</a>
					</div> -->
					<div class="login login--panel">
						<div class="btn btn--border login__btn">
							<a href="#" class="login__title">
								<div class="login__user">
									<svg>
										<use xlink:href="<?= $target; ?>/img/icons.svg#user"/>
									</svg>
								</div>
								<div class="login__name">
									???????? ????????????
								</div>
							</a>
							<div class="login__arrow" data-target="#login, .login__btn">
								<svg>
									<use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
								</svg>
							</div>
						</div>
						<ul class="login__menu" id="login">
							<li>
								<div class="login__item login__item--name">
									<span>???????? ????????????</span>
								</div>
							</li>
							<li><a href="settings.php" class="login__item"><span>??????????????????</span></a></li>
							<li><a href="#exit-modal" data-fancybox class="login__item"><span>??????????</span></a></li>
						</ul>
					</div>
				</div>
				<div class="lang">
					<div class="lang__title" data-target="#lang">
						<div class="lang__img">
							<img src="<?= $target; ?>/img/lang/ru.svg" alt="">
						</div>
						<div class="lang__name">
							??????????????
						</div>
						<svg>
							<use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
						</svg>
					</div>
					<div class="lang__menu" id="lang">
						<ul class="lang__list">
							<li>
								<a href="#" class="lang__item">
									<div class="lang__img">
										<img src="<?= $target; ?>/img/lang/en.svg" alt="">
									</div>
									<div class="lang__name">
										English
									</div>
								</a>
							</li>
							<li>
								<a href="#" class="lang__item">
									<div class="lang__img">
										<img src="<?= $target; ?>/img/lang/uk.svg" alt="">
									</div>
									<div class="lang__name">
										????????????????????
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>

		<div class="header-toggle" data-target="#menu, .j-overlay">
			<span></span><span></span><span></span>
		</div>

		<div class="menu" id="menu">
			<div class="menu__wrapper">
				<ul class="menu__list">
					<li><a href="/#functions" <?= ($page == 'home') ? 'data-scroll="#functions"' : ''; ?>>?????????????? ??????????????????</a></li>
					<li><a href="/#problems" <?= ($page == 'home') ? 'data-scroll="#problems"' : ''; ?>>?????????? ???????????????? ???? ????????????</a></li>
					<li><a href="/#tarifs" <?= ($page == 'home') ? 'data-scroll="#tarifs"' : ''; ?>>???????????????? ??????????</a></li>
					<li><a href="/#reviews" <?= ($page == 'home') ? 'data-scroll="#reviews"' : ''; ?>>????????????</a></li>
				</ul>
				<div class="menu__bottom">
					<a href="tel:example@gmail.com" class="header__phone">
						<svg>
							<use xlink:href="<?= $target; ?>/img/icons.svg#email"/>
						</svg>
						example@gmail.com
					</a>
				</div>
			</div>
		</div>
	
	<? } ?>