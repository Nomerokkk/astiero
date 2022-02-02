<? $page = 'panel';

include '../templates/header.php'; ?>
	
    <div class="wrapper panel panel--withperiod j-wrapper">
        <section class="ok-page">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumbs__list">
                        <li>
                            <a href="/panel">
                                Главная
                            </a>
                        </li>
                        <li>
                            Результат оплаты
                        </li>
                    </ul>
                </div>
                <div class="ok">
                    <div class="ok__img ok__img--pay">
                        <svg>
							<use xlink:href="<?= $target; ?>/img/ok/pay.svg#icon"/>
						</svg>
                    </div>
                    <div class="ok__title">
                        <div class="title-overflow">
                            <h1 class="title title--center j-wow j-wow-up">
                                спасибо - оплата прошла успешно
                            </h1>
                        </div>
                    </div>
                    <div class="ok__btns">
                        <div class="ok__btns-col">
                            <a href="account.php" class="btn btn--orange">
                                В аккаунт
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
<? include '../templates/footer.php'; ?>