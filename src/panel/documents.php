<? $page = 'panel';

include '../templates/header.php'; ?>
	
    <div class="wrapper panel panel--withperiod j-wrapper">
        <section class="documents">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumbs__list">
                        <li>
                            <a href="/panel">
                                Главная
                            </a>
                        </li>
                        <li>
                            Документы
                        </li>
                    </ul>
                </div>
                <div class="panel__top">
                    <div class="title-overflow">
                        <h1 class="title j-wow j-wow-up">
                            ДОкументы
                        </h1>
                    </div>
                    <form class="search">
                        <div class="search__clear j-search-clear">
                            <svg>
                                <use xlink:href="<?= $target; ?>/img/icons.svg#close"/>
                            </svg>
                        </div>
                        <div class="input">
                            <input type="text" class="j-search" placeholder="Поиск">
                        </div>
                        <button class="search__btn" type="submit">
                            <svg>
                                <use xlink:href="<?= $target; ?>/img/icons.svg#search"/>
                            </svg>
                        </button>
                    </form>
                    <button class="btn btn--border add-btn" type="button" data-fancybox data-src="#new-document">
                        <svg>
                            <use xlink:href="<?= $target; ?>/img/icons.svg#plus"/>
                        </svg>
                        <span>Добавить документ</span>
                    </button>
                </div>
                <div class="table">
                    <div class="table__tr table__tr--head">
                        <div class="table__td">
                            №
                        </div>
                        <div class="table__td">
                            Название
                        </div>
                        <div class="table__td table__td--center">
                            Дата
                        </div>
                    </div>
                    <? for($i = 1; $i < 6; $i++) { ?>
                        <div class="table__tr">
                            <div class="table__td">
                                <?= $i; ?>
                            </div>
                            <div class="table__td table__td--pointer" data-fancybox data-src="#done-document">
                                <div class="input">
                                    <input type="text" value="Форма согласия на импланцию зубов" readonly>  
                                </div>
                            </div>
                            <div class="table__td table__td--date">
                                <div class="date">
                                    12.08.2021 13:00
                                    <div class="table__icon table__icon--minus" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">-</div>
                                </div>
                            </div>
                        </div>
                    <? } ?>
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
    
    <div class="newdoc" id="done-document">
        <form class="newdoc__inner">
            <div class="newdoc__top">
                <div class="newdoc__tooltip">
                    ?
                    <div class="newdoc__tooltip-text">Чтобы отредактировать текст - нажмите на область</div>
                </div>
                <div class="newdoc__top-input input">
                    <input type="text" placeholder="Название документа">
                </div>
                <div class="newdoc__nav">
                    <button class="newdoc__btn btn btn--orange j-document-btn" type="submit">
                        Сохранить
                    </button>
                </div>
            </div> 
            <div class="newdoc__textarea"></div> 
            <div class="newdoc__nav newdoc__nav--bottom">
                <button class="newdoc__btn btn btn--orange j-document-btn" type="submit">
                    Сохранить
                </button>
                <div class="sort newdoc__sort">
                    <div class="sort__title">
                        Порядок
                    </div>
                    <div class="input">
                        <input type="number" min="1" value="1" data-required>
                    </div>
                </div>
            </div>
        </form>  
    </div>

    <div class="newdoc" id="new-document">
        <form class="newdoc__inner">
            <div class="newdoc__top">
                <div class="newdoc__tooltip">
                    ?
                    <div class="newdoc__tooltip-text">Чтобы отредактировать текст - нажмите на область</div>
                </div>
                <div class="newdoc__top-input input">
                    <input type="text" placeholder="Название документа">
                </div>
                <div class="newdoc__nav">
                    <button class="newdoc__btn btn btn--orange j-document-btn" type="submit">
                        Сохранить
                    </button>
                </div>
            </div> 
            <div class="newdoc__textarea"></div> 
            <div class="newdoc__nav newdoc__nav--bottom">
                <button class="newdoc__btn btn btn--orange j-document-btn" type="submit">
                    Сохранить
                </button>
                <div class="sort newdoc__sort">
                    <div class="sort__title">
                        Порядок
                    </div>
                    <div class="input">
                        <input type="number" min="1" value="1" data-required>
                    </div>
                </div>
            </div>
        </form>  
    </div>

<? include '../templates/footer.php'; ?>