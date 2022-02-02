<? $page = '404';

include 'templates/header.php'; ?>
	
    <div class="wrapper j-wrapper">
        <section class="page404">
            <div class="container">
                <div class="page404__wrapper">
                    <div class="page404__img">
                        <img src="<?= $target; ?>/img/404/404.svg" alt="">
                    </div>
                    <div class="title-overflow">
                        <h1 class="title title--center j-wow j-wow-up">
                            Ваша страница
                            <b>не найдена</b>
                        </h1>
                    </div>
                    <a href="/" class="page404__btn btn btn--orange">
                        Главная
                    </a>
                </div>
            </div>
        </section>
    </div>

<? include 'templates/footer.php'; ?>