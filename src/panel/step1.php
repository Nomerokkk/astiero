<? $page = 'panel';

include '../templates/header.php'; ?>
	
    <div class="wrapper panel panel--withperiod j-wrapper">
        <section class="steps">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumbs__list">
                        <li>
                            <a href="/panel">
                                Главная
                            </a>
                        </li>
                        <li>
                            Создание плана
                        </li>
                    </ul>
                </div>
                <div class="panel__top panel__top--center">
                    <div class="title-overflow">
                        <h1 class="title j-wow j-wow-up">
                            Создание плана
                        </h1>
                    </div>
                </div>
                <div class="steps__list">
                    <div class="steps__list-wrap j-overflow-wrap">
                        <div class="steps__list-inner">
                            <div class="steps__list-item done active">
                                <div class="steps__list-number">01</div>
                                <div class="steps__list-title">
                                    Создание плана
                                </div>
                            </div>
                            <div class="steps__list-line"></div>
                            <div class="steps__list-item">
                                <div class="steps__list-number">02</div>
                                <div class="steps__list-title">
                                    Диагностика
                                </div>
                            </div>
                            <div class="steps__list-line"></div>
                            <div class="steps__list-item">
                                <div class="steps__list-number">03</div>
                                <div class="steps__list-title">
                                    План лечения
                                </div>
                            </div>
                            <div class="steps__list-line"></div>
                            <div class="steps__list-item">
                                <div class="steps__list-number">04</div>
                                <div class="steps__list-title">
                                    Генерация плана
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="step2.php" class="create-plan j-form">
                    <div class="create-plan__bl">
                        <div class="create-plan__title">
                            Создание плана
                        </div>
                        <div class="create-plan__label">
                            <div class="create-plan__label-title">
                                Навание плана
                            </div>
                            <div class="input">
                                <input type="text" placeholder="Лечение зубов *" data-required>
                            </div>
                        </div>
                        <div class="create-plan__label">
                            <div class="create-plan__label-title">
                                Пациент
                            </div>
                            <div class="input create-plan__select j-select2-wrap">
                                <input type="text" data-notfound="Пациент не найден" placeholder="Выберите пациента *" class="j-select2" data-required>
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="create-plan__btn">
                        <button type="submit" class="btn btn--orange">
                            Выбрать
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>


    <div class="modal modal--remove" id="ok-remove">
        <div class="modal__inner">
            <div class="modal__icon">
                <svg>
                    <use xlink:href="<?= $target; ?>/img/icons.svg#bucket"/>
                </svg>
            </div>
            <div class="modal__title">
                Вы точно хотите удалить?
            </div>
            <div class="modal__btns">
                <div class="modal__btns-col">
                    <button class="btn btn--orange modal__btn" type="button" data-close>
                        Да
                    </button>
                </div>
                <div class="modal__btns-col">
                    <button class="btn btn--grey modal__btn" type="button" data-close>
                        Нет
                    </button>
                </div>
            </div>
        </div>
    </div>

<? include '../templates/footer.php'; ?>