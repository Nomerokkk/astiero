<? $page = 'panel';

include '../templates/header.php'; ?>
	
    <div class="wrapper panel panel--withperiod j-wrapper">
        <section class="plans">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumbs__list">
                        <li>
                            <a href="/panel">
                                Главная
                            </a>
                        </li>
                        <li>
                            Мои планы
                        </li>
                    </ul>
                </div>
                <div class="panel__top panel__top--center">
                    <div class="title-overflow">
                        <h1 class="title j-wow j-wow-up">
                            Мои планы
                        </h1>
                    </div>
                </div>
                <div class="table">
                    <div class="table__tr table__tr--head">
                        <div class="table__td">
                            №
                        </div>
                        <div class="table__td table__td--show-mob">
                            Фио и телефон
                        </div>
                        <div class="table__td table__td--hide-mob">
                            Фио
                        </div>
                        <div class="table__td table__td--hide-mob">
                            Телефон
                        </div>
                        <div class="table__td">
                            План лечения
                        </div>
                    </div>
                    <? for($i = 1; $i < 6; $i++) { ?>
                        <div class="table__tr">
                            <div class="table__td">
                                <?= $i; ?>
                            </div>
                            <div class="table__td table__td--show-mob plans__td-save">
                                <div class="save" data-tooltip="Сохранить">
                                    <svg>
                                        <use xlink:href="<?= $target; ?>/img/icons.svg#save"/>
                                    </svg>
                                </div>
                                <div class="input">
                                    <input type="text" value="Иван Иванов">    
                                </div>
                                <div class="input">
                                    <input type="text" value="+38 (067) 567 77 77">    
                                </div>
                            </div>
                            <div class="table__td table__td--hide-mob plans__td-save">
                                <div class="save" data-tooltip="Сохранить">
                                    <svg>
                                        <use xlink:href="<?= $target; ?>/img/icons.svg#save"/>
                                    </svg>
                                </div>
                                <div class="input">
                                    <input type="text" value="Иван Иванов">    
                                </div>
                            </div>
                            <div class="table__td table__td--hide-mob">
                                <div class="input">
                                    <input type="text" value="+38 (067) 567 77 77">    
                                </div>
                            </div>
                            <div class="table__td table__td--plan">
                                <a href="step5.php" class="date">
                                    12.08.2021 13:00
                                    <div class="table__icon table__icon--minus" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">-</div>
                                </a>
                            </div>
                        </div>
                    <? } ?>
                </div>
                <div class="panel__btns">
                    <button class="btn btn--orange" type="submit">
                        Сохранить
                    </button>
                </div>
                <div class="pagination">
                    <ul class="pagination__list">
                        <li>
                            <a href="#" class="pagination__item pagination__item--prev">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                </svg>
                            </a>
                        </li>
                        <li><div class="pagination__item pagination__item--current">1</div></li>
                        <li><a href="#" class="pagination__item">2</a></li>
                        <li><a href="#" class="pagination__item">3</a></li>
                        <li><a href="#" class="pagination__item">4</a></li>
                        <li>
                            <a href="#" class="pagination__item pagination__item--next">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
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