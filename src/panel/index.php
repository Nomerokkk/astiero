<? $page = 'panel';

include '../templates/header.php'; ?>
	
    <div class="wrapper panel panel--withperiod j-wrapper">
        <section class="start">
            <div class="container">
                <div class="row">
                    <? $items = [
                        0 => [
                            'img' => $target . '/img/start/1.svg#icon',
                            'title' => 'Аккаунт',
                            'href' => 'account.php',
                        ],
                        1 => [
                            'img' => $target . '/img/start/2.svg#icon',
                            'title' => 'Создать план лечения',
                            'href' => 'step1.php',
                        ],
                        2 => [
                            'img' => $target . '/img/start/3.svg#icon',
                            'title' => 'Пациенты',
                            'href' => 'patients.php',
                        ],
                        3 => [
                            'img' => $target . '/img/start/4.svg#icon',
                            'title' => 'Мои планы',
                            'href' => 'plans.php',
                        ],
                        4 => [
                            'img' => $target . '/img/start/5.svg#icon',
                            'title' => 'Документы',
                            'href' => 'documents.php',
                        ],
                        5 => [
                            'img' => $target . '/img/start/6.svg#icon',
                            'title' => 'Информация',
                            'href' => 'info.php',
                        ],
                        6 => [
                            'img' => $target . '/img/start/7.svg#icon',
                            'title' => 'Помощь',
                            'href' => 'help.php',
                        ],
                    ];

                    foreach($items as $item) { ?>
                        <div class="col">
                            <a href="<?= $item['href']; ?>" class="start__item">
                                <div class="start__icon">
                                    <svg>
                                        <use xlink:href="<?= $item['img']; ?>"/>
                                    </svg>
                                </div>
                                <div class="start__title">
                                    <?= $item['title']; ?>
                                </div>
                            </a>
                        </div>
                    <? } ?>
                </div>
            </div>
        </section>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Fancybox.show(
                [{
                    src: '#info',
                }], opts_fancybox
            );
        });
    </script>

    <div class="info info--modal" id="info">
        <form class="info__inner j-form">
            <div class="info__top">
                <div class="info__img avatar">
                    <img data-src="<?= $target; ?>/img/panel/avatar-no.svg" alt="" class="j-lazy">
                </div>
                <div class="info__top-text">
                    <div class="info__title">
                        Иван Иванов Иванович
                    </div>
                    <label class="info__file">
                        <input type="file">
                        <div class="info__file-text">
                            <div class="info__file-title">
                                Загрузить аватар
                            </div>
                            <div class="info__file-format">
                                (Jpeg, PNG)
                            </div>
                        </div>
                    </label>
                </div>
            </div>
            <div class="info__inputs">
                <div class="info__row">
                    <div class="info__col">
                        <div class="phone phone--pink">
                            <input type="tel" class="j-phone" data-required>
                        </div>
                    </div>
                    <div class="info__col">
                        <div class="info__date-title">
                            Дата рождения
                        </div>
                        <div class="info__select">
                            <div class="info__select-col">
                                <select class="select j-select">
                                <option value="" disabled selected>День</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                            <div class="info__select-col">
                                <select class="select j-select">
                                    <option value="" disabled selected>Месяц</option>
                                    <option value="Январь">Январь</option>
                                    <option value="Февраль">Февраль</option>
                                    <option value="Март">Март</option>
                                    <option value="Апрель">Апрель</option>
                                    <option value="Май">Май</option>
                                    <option value="Июнь">Июнь</option>
                                    <option value="Июль">Июль</option>
                                    <option value="Август">Август</option>
                                    <option value="Сентябрь">Сентябрь</option>
                                    <option value="Октябрь">Октябрь</option>
                                    <option value="Ноябрь">Ноябрь</option>
                                    <option value="Декабрь">Декабрь</option>
                                </select>
                            </div>
                            <div class="info__select-col">
                                <select class="select j-select" data-required>
                                    <option value="" disabled selected>Год</option>
                                    <option value="2001">2001</option>
                                    <option value="2001">2001</option>
                                    <option value="2001">2001</option>
                                    <option value="2001">2001</option>
                                    <option value="2001">2001</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="info__col">
                        <div class="input">
                            <input type="text" placeholder="ФИО" data-required>
                            <svg width="15" height="18">
                                <use xlink:href="<?= $target; ?>/img/icons.svg#user"/>
                            </svg>
                        </div>
                    </div>
                    <div class="info__col">
                        <select class="select j-select">
                            <option value="" disabled selected>Страна</option>
                            <option value="Украина">Украина</option>
                            <option value="Россия">Россия</option>
                            <option value="США">США</option>
                            <option value="Мексика">Мексика</option>
                            <option value="Польша">Польша</option>
                        </select>
                    </div>
                    <div class="info__col">
                        <div class="input">
                            <input type="email" placeholder="E-mail" data-required>
                            <svg width="16" height="11">
                                <use xlink:href="<?= $target; ?>/img/icons.svg#email"/>
                            </svg>
                        </div>
                    </div>
                    <div class="info__col">
                        <div class="input">
                            <input type="text" placeholder="Адрес" data-required>
                        </div>
                    </div>
                    <div class="info__col">
                        <div class="input">
                            <input type="text" placeholder="Родственные связи" data-required>
                        </div>
                    </div>
                    <div class="info__col">
                        <button class="btn btn--pink" type="button" data-src="#change-password" data-fancybox>
                            Изменить пароль
                        </button>
                    </div>
                </div>
                <div class="info__row">
                    <div class="info__col info__col--btn">
                        <button class="btn btn--orange" type="submit">
                            Сохранить
                        </button>
                    </div>
                    <div class="info__col info__col--btn">
                        <button class="btn btn--grey" data-close>
                            Пропустить
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <div class="modal modal--password" id="change-password">
        <form class="modal__inner j-form">
            <div class="modal__title">
                Изменить пароль
            </div>
            <div class="input">
                <input type="password" autocomplete="new-password" placeholder="Старый пароль" data-required>
            </div>
            <div class="input">
                <input type="password" autocomplete="new-password" placeholder="Новый пароль" data-required>
            </div>
            <button type="submit" class="btn btn--orange modal__btn">
                Сохранить
            </button>
        </form>
    </div>

<? include '../templates/footer.php'; ?>