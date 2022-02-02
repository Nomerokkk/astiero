<? $page = 'admin';

include '../templates/header.php'; ?>
	
    <div class="wrapper panel j-wrapper">
        <section class="admin prices">
            <div class="container">
                <div class="panel__top panel__top--center">
                    <div class="title-overflow">
                        <h1 class="title j-wow j-wow-up">
                            Выставление цены
                        </h1>
                    </div>
                </div>
                <div class="prices__bl">
                    <? for($i = 1; $i < 2; $i++) { ?>
                        <div class="accordion accordion--pink">
                            <div class="accordion__top">
                                <div class="accordion__top-inner <?= ($i == 1) ? 'active' : ''; ?>" data-toggle="#ac<?= $i; ?>">
                                    <div class="accordion__title">
                                        Тариф №<?= $i; ?>
                                    </div>
                                    <div class="accordion__arrow">
                                        <svg>
                                            <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                        </svg>
                                    </div>
                                </div>
                                <!-- <div class="minus" data-fancybox data-src="#ok-remove">-</div> -->
                            </div>
                            <div class="accordion__content <?= ($i == 1) ? 'active' : ''; ?>" id="ac<?= $i; ?>">
                                <div class="admin__row">
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title label__title--small">
                                                Заголовок
                                            </span>
                                            <span class="input">
                                                <input type="text" value="БАЗОВЫЙ ТАРИФ">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title label__title--small">
                                                Мини заголовок
                                            </span>
                                            <span class="input">
                                                <input type="text" value="Для стоматологов">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title label__title--small">
                                                Описание
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Диагностируйте все состояния">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title label__title--small">
                                                Цена (грн)
                                            </span>
                                            <span class="input input--small">
                                                <input type="number" value="9" min="0">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title label__title--small">
                                                Кнопка
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Начните сейчас">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                   <? } ?>
                </div>
                <div class="admin__btns admin__btns--one">
                    <!-- <button class="btn btn--border add-btn" type="button">
                        <svg>
                            <use xlink:href="<?= $target; ?>/img/icons.svg#plus"/>
                        </svg>
                        <span>Добавить тариф</span>
                    </button> -->
                    <button class="btn btn--orange admin__btns-submit" type="submit">
                        Сохранить
                    </button>
                </div>
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