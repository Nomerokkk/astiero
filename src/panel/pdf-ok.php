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
                            Результат отправки
                        </li>
                    </ul>
                </div>
                <div class="ok">
                    <div class="ok__img ok__img--pdf">
                        <svg>
							<use xlink:href="<?= $target; ?>/img/ok/pdf.svg#icon"/>
						</svg>
                    </div>
                    <div class="ok__title">
                        <div class="title-overflow">
                            <h1 class="title title--center j-wow j-wow-up">
                                спасибо - Pdf успешно отправлен
                            </h1>
                        </div>
                    </div>
                    <div class="ok__btns">
                        <div class="ok__btns-col">
                            <a href="#" class="btn btn--orange" target="_blank">
                                Скачать PDF
                            </a>
                        </div>
                        <div class="ok__btns-col">
                            <a href="account.php" class="btn btn--border-black">
                                Мой план
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
<? include '../templates/footer.php'; ?>