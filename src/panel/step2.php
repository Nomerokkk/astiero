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
                            Диагностика
                        </li>
                    </ul>
                </div>
                <div class="panel__top panel__top--center">
                    <div class="title-overflow">
                        <h1 class="title j-wow j-wow-up">
                            Диагностика
                        </h1>
                    </div>
                </div>
                <div class="steps__list">
                    <div class="steps__list-wrap j-overflow-wrap">
                        <div class="steps__list-inner">
                            <a href="step1.php" class="steps__list-item done">
                                <div class="steps__list-number">01</div>
                                <div class="steps__list-title">
                                    Создание плана
                                </div>
                            </a>
                            <div class="steps__list-line"></div>
                            <div class="steps__list-item active">
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
                                    Этапы лечения
                                </div>
                            </div>
                            <div class="steps__list-line"></div>
                            <div class="steps__list-item">
                                <div class="steps__list-number">05</div>
                                <div class="steps__list-title">
                                    Генерация плана
                                </div>
                            </div>
                            <div class="steps__list-progress"></div>
                        </div>
                    </div>
                </div>
                <form action="step3.php" class="step">
                    <div class="step__title">
                        Диагностика
                    </div>
                    <div class="step__tabs">
                        <? $tabs = [
                            0 => [
                                'title' => 'Гигиена и периостатус',
                                'sub' => [
                                    0 => [
                                        'title' => 'Налет',
                                        'dir' => 'nalet',
                                        'border' => 'normal',
                                    ],
                                    1 => [
                                        'title' => 'Зубной камень',
                                        'dir' => 'zubnoj_kamen',
                                        'border' => 'normal',
                                    ],
                                    2 => [
                                        'title' => 'Кровоточивость',
                                        'dir' => 'krovotochivost',
                                        'border' => 'normal',
                                    ],
                                    3 => [
                                        'title' => 'Гной',
                                        'dir' => 'gnoj',
                                        'border' => 'normal',
                                    ],
                                    4 => [
                                        'title' => 'Пародонтальные карманы',
                                        'dir' => 'parodontalnye_karmany',
                                        'border' => 'normal',
                                    ],
                                    5 => [
                                        'title' => 'Подвижность зубов',
                                        'dir' => 'podvizhnost_zubov',
                                        'border' => 'normal',
                                    ],
                                ],
                            ],
                            1 => [
                                'title' => 'Кариес',
                                'sub' => [
                                    0 => [
                                        'title' => 'Мезиальный',
                                        'dir' => 'karies_mezialnyj',
                                        'border' => 'normal',
                                    ],
                                    1 => [
                                        'title' => 'Дистальный',
                                        'dir' => 'karies_distalnyj',
                                        'border' => 'normal',
                                    ],
                                    2 => [
                                        'title' => 'Оклюзионный',
                                        'dir' => 'karies_oklyuzionnyj',
                                        'border' => 'normal',
                                    ],
                                    3 => [
                                        'title' => 'Язычный',
                                        'dir' => 'karies_yazychnyj',
                                        'border' => 'normal',
                                    ],
                                    4 => [
                                        'title' => 'Пришеечный',
                                        'dir' => 'karies_prisheechnyj',
                                        'border' => 'normal',
                                    ],
                                    5 => [
                                        'title' => 'Вестибулярный \ щечный',
                                        'dir' => 'vestibulyarnyj',
                                        'border' => 'normal',
                                    ],
                                    6 => [
                                        'title' => 'Коронка зуба полностью разрушена',
                                        'dir' => 'koronka_razrushena',
                                        'border' => 'normal',
                                    ],
                                    7 => [
                                        'title' => 'Трещина коронки (до уровня десны)',
                                        'dir' => 'treshina_do_desny',
                                        'border' => 'normal',
                                    ],
                                    8 => [
                                        'title' => 'Трещина коронки (ниже уровня десны)',
                                        'dir' => 'treshina_nizhe_desny',
                                        'border' => 'normal',
                                    ],
                                ],
                            ],
                            2 => [
                                'title' => 'Эндодонтия',
                                'sub' => [
                                    0 => [
                                        'title' => 'Пульпит',
                                        'dir' => 'pulpit',
                                        'border' => 'normal',
                                    ],
                                    1 => [
                                        'title' => 'Леченные каналы (удовлетворительно)',
                                        'dir' => 'lechenie_kanalov_udovlit',
                                        'border' => 'normal',
                                    ],
                                    2 => [
                                        'title' => 'Леченные каналы (неудовлетворительно)',
                                        'dir' => 'lechenie_kanalov_neudovlit',
                                        'border' => 'normal',
                                    ],
                                    3 => [
                                        'title' => 'Сломанный инструмент в канале',
                                        'dir' => 'slomannyj_instrument',
                                        'border' => 'normal',
                                    ],
                                    4 => [
                                        'title' => 'Перелом корня',
                                        'dir' => 'perelom_kornya',
                                        'border' => 'normal',
                                    ],
                                ],
                            ],
                            3 => [
                                'title' => 'Отсутствующие и ретенированые  зубы, имплантаты',
                                'sub' => [
                                    0 => [
                                        'title' => 'Отсутствующий зуб',
                                        'border' => 'normal',
                                    ],
                                    1 => [
                                        'title' => 'Имплантат (десневая рецессия)',
                                        'dir' => 'desnevaya_recessiya',
                                        'border' => 'normal',
                                    ],
                                    2 => [
                                        'title' => 'Имплантат (потеря кости)',
                                        'dir' => 'poterya_kosti',
                                        'border' => 'normal',
                                    ],
                                    3 => [
                                        'title' => 'Ретинированный',
                                        'dir' => 'retinirovannyj',
                                        'border' => 'normal',
                                    ],
                                ],
                            ],
                            4 => [
                                'title' => 'Ортопедия',
                                'sub' => [
                                    0 => [
                                        'title' => 'Винир',
                                        'dir' => 'viniry',
                                        'border' => 'normal',
                                    ],
                                    1 => [
                                        'title' => 'Накладка',
                                        'dir' => 'nakladka',
                                        'border' => 'normal',
                                    ],
                                ],
                            ],
                        ]; 
                        
                        $count = 0; ?>

                        <div class="step__tabs-overflow">
                            <div class="tabs">
                                <? foreach($tabs as $item) { 
                                    $count++;
                                ?>
                                    <div class="tabs__item">
                                        <div class="tabs__item-title" data-target="#sub<?= $count; ?>">
                                            <?= $item['title']; ?>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>
                        </div>

                        <? $count = 0;

                        foreach($tabs as $item) { 
                            $count++;
                        ?>
                            <ul class="tabs__submenu j-tabs-submenu" id="sub<?= $count; ?>">
                                <? $sub = $item['sub'];

                                foreach($sub as $item) { 
                                    $title = $item['title'];
                                    $dir = $item['dir'];
                                    $visual = $item['visual'];
                                    $class = $dir . ' ' . $visual;
                                    $dir = ($item['dir']) ? $target . '/img/jaw/teeth/' . $dir . '/' : '';
                                    $border = $item['border'];
                                    $format = ($item['format']) ? $item['format'] : 'svg';
                                    $visual = ($item['visual']) ? $target . '/img/jaw/visual/' . $visual . '/' : '';
                                ?>
                                    <li>
                                        <label class="tabs__label">
                                            <input type="radio" name="disease" class="j-tooth-radio" 
                                                data-dir="<?= $dir; ?>"
                                                data-border="<?= $target; ?>/img/jaw/border/<?= $border; ?>/"
                                                data-class="<?= $class; ?>"
                                                data-class-border="<?= $border; ?>"
                                                data-format="<?= $format; ?>"
                                                <? if($visual) { ?>
                                                    data-visual="<?= $visual; ?>"
                                                <? } ?>
                                                data-number="">
                                            <span class="tabs__label-title">
                                                <?= $title; ?>
                                            </span>
                                        </label>
                                    </li>
                                <? } ?>
                            </ul>
                        <? } ?>
                    </div>
                    <div class="step__row">
                        <div class="step__col">
                            <div class="step-img">
                                <div class="step-img__loader j-jaw-loader"></div>
                                <div class="step-img__top">
                                    <div class="step-img__zoom j-zoom-btn">
                                    <svg>
                                        <use xlink:href="<?= $target; ?>/img/icons.svg#search"/>
                                    </svg>
                                </div>
                                <div class="step-img__title j-title-jaw">Выберите зуб</div>
                                </div>
                                <div class="step-img__img panzoom j-panzoom">
                                    <div class="panzoom__content">
                                        <div class="jaw j-jaw">
                                            <div class="jaw__bg">
                                                <img src="<?= $target; ?>/img/jaw/bg-normal.svg" alt="">
                                            </div>
                                            <div class="jaw__gum-top j-gum-top">
                                                <img src="<?= $target; ?>/img/jaw/gum-top.svg" alt="">
                                            </div>
                                            <div class="jaw__gum-bottom j-gum-bottom">
                                                <img src="<?= $target; ?>/img/jaw/gum-bottom.svg" alt="">
                                            </div>
                                            <div class="jaw__teeth">

                                                <!-- TOP JAW -->
                                                <? for($i = 1; $i < 33; $i++) {                                                     
                                                    $border = $target . '/img/jaw/border/normal/' . $i . '.svg';
                                                    $tooth = $target . '/img/jaw/teeth/normal/' . $i . '.svg';

                                                    $title = $i . '-й зуб';
                                                ?>

                                                    <div class="jaw-item jaw-item--<?= $i; ?> j-jaw-item <?= ($i > 16) ? 'jaw-item--bottom' : ''; ?>" 
                                                        data-number="<?= $i; ?>" data-title="<?= $title; ?>">
                                                        <div class="border j-jaw-border">
                                                            <img src="<?= $border; ?>" alt="">
                                                        </div>
                                                        <div class="tooth" style="-webkit-mask-image: url(<?= $tooth; ?>); mask-image: url(<?= $tooth; ?>);">
                                                            <img src="<?= $tooth; ?>" alt="">
                                                        </div>
                                                        <div class="visual"></div>
                                                    </div>

                                                <? } ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step-img__reset">
                                    <svg>
                                        <use xlink:href="<?= $target; ?>/img/steps/reset.svg#icon"/>
                                    </svg>
                                    <span>Сбросить фильтр</span>
                                </div>
                            </div>
                        </div>
                        <div class="step__col">
                            <div class="step-diagnostic">
                                <div class="step-diagnostic__top">
                                    <span>Зуб</span>
                                    <span>32</span>
                                </div>
                                <ul class="step-diagnostic__list">
                                    <li>
                                        <div class="step-diagnostic__list-item active">
                                            Кариес - 32
                                            <div class="step-diagnostic__list-close" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#close"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="step-diagnostic__list-item">
                                            Пульпит - 32
                                            <div class="step-diagnostic__list-close" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#close"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <textarea rows="3" class="step__textarea" placeholder="Описание"></textarea>
                            </div>
                            <div class="step__nav">
                                <div class="step__nav-col">
                                    <div class="btn btn--border">Сбросить фильтр</div>
                                </div>
                            </div>
                            <label class="step__load">
                                <input type="file">
                                <div class="step__load-title">
                                    <svg>
                                        <use xlink:href="<?= $target; ?>/img/icons.svg#file"/>
                                    </svg>
                                    <div class="step__load-place">
                                        Загрузить снимок
                                    </div>
                                </div>
                                <div class="step__load-format">
                                    (Jpeg, PNG, PDF)
                                </div>
                            </label>
                            <button type="submit" class="step__btn btn btn--orange">
                                Далее
                            </button>
                        </div>
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