<? $page = 'admin';

include '../templates/header.php'; ?>
	
    <div class="wrapper panel j-wrapper">
        <section class="admin users">
            <div class="container">
                <div class="panel__top panel__top--center">
                    <div class="title-overflow">
                        <h1 class="title j-wow j-wow-up">
                            Пользователи
                        </h1>
                    </div>
                </div>
                <div class="users__top">
                    <div class="users__top-info">
                        <div class="users__top-col">
                            <div class="users__top-total">
                                <b>(1045)</b> Всего пользователей
                            </div>
                        </div>
                        <div class="users__top-col">
                            <div class="users__top-total">
                                <b>(245)</b> Пользователей онлайн
                            </div>
                        </div>
                    </div>
                    <div class="users__top-col">
                        <div class="users__select users__select--count">
                            <div class="users__select-title j-select-users">
                                Количество:
                            </div>
                            <select class="j-select users__select-select">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="100">100</option>
                            </select>
                        </div>                           
                    </div>
                    <div class="users__top-col">
                        <div class="users__select users__select--sort">
                            <div class="users__select-title j-select-users">
                                Сортировка по:
                            </div>
                            <select class="j-select users__select-select">
                                <option value="возрастанию">возрастанию</option>
                                <option value="уменьшению">уменьшению</option>
                                <option value="дате рождения">дате рождения</option>
                            </select>
                        </div>                           
                    </div>
                    <div class="users__top-col">
                        <form class="search">
                            <div class="input">
                                <input type="text" placeholder="Поиск">
                            </div>
                            <button class="search__btn" type="submit">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#search"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="users-table users-table--desctop">
                    <div class="users-table__row">
                        <div class="users-table__col users-table__col--name">
                            <div class="users-table__td users-table__td--head">
                                <div class="users-table__title">
                                    ФИО/дата рождения
                                </div>
                            </div>
                            <? for($i = 0; $i < 5; $i++) { ?>
                                <div class="users-table__td">
                                    <div class="users-table__input">
                                        <input type="text" value="Иван Иванов" readonly>
                                    </div>
                                    <div class="users-table__input">
                                        <input type="text" value="14.12.1995" readonly>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                        <div class="users-table__col users-table__col--contacts">
                            <div class="users-table__td users-table__td--head">
                                <div class="users-table__title">
                                    Телефон/почта и город
                                </div>
                            </div>
                            <? for($i = 0; $i < 5; $i++) { ?>
                                <div class="users-table__td users-table__td--contacts">
                                    <div class="users-table__input">
                                        <input type="text" value="г. Днепр" readonly>
                                    </div>
                                    <div class="users-table__input">
                                        <input type="text" value="+38 067 000 00 00" readonly>
                                    </div>
                                    <div class="users-table__input">
                                        <input type="text" value="name@mail.com" readonly>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                        <div class="users-table__col users-table__col--time">
                            <div class="users-table__td users-table__td--head">
                                <div class="users-table__title">
                                    Время на сервисе
                                </div>
                            </div>
                            <div class="users-table__td">
                                <div class="users-table__input">
                                    4 месяца
                                </div>
                            </div>
                            <div class="users-table__td">
                                <div class="users-table__input">
                                    2 дня
                                </div>
                            </div>
                            <div class="users-table__td">
                                <div class="users-table__input">
                                    2 недели
                                </div>
                            </div>
                            <div class="users-table__td">
                                <div class="users-table__input">
                                    3 дня
                                </div>
                            </div>
                            <div class="users-table__td">
                                <div class="users-table__input">
                                    2 недели
                                </div>
                            </div>
                        </div>
                        <div class="users-table__col users-table__col--treatment">
                            <div class="users-table__td users-table__td--head users-table__td--treatment">
                                <div class="users-table__title">
                                    Лечение
                                </div>
                                <div class="users-table__row">
                                    <div class="users-table__col">
                                        <div class="users-table__td">
                                            День
                                        </div>
                                    </div>
                                    <div class="users-table__col">
                                        <div class="users-table__td">
                                            Неделя
                                        </div>
                                    </div>
                                    <div class="users-table__col">
                                        <div class="users-table__td">
                                            Месяц
                                        </div>
                                    </div>
                                    <div class="users-table__col">
                                        <div class="users-table__td">
                                            Год
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <? for($i = 0; $i < 5; $i++) { ?>
                                <div class="users-table__td">
                                    <div class="users-table__row">
                                        <div class="users-table__col">
                                            <div class="users-table__td">
                                                <div class="users-table__input">
                                                    556
                                                </div>
                                            </div>
                                        </div>
                                        <div class="users-table__col">
                                            <div class="users-table__td">
                                                <div class="users-table__input">
                                                    556
                                                </div>
                                            </div>
                                        </div>
                                        <div class="users-table__col">
                                            <div class="users-table__td">
                                                <div class="users-table__input">
                                                    556
                                                </div>
                                            </div>
                                        </div>
                                        <div class="users-table__col">
                                            <div class="users-table__td">
                                                <div class="users-table__input">
                                                    556
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                        <div class="users-table__col users-table__col--activity">
                            <div class="users-table__td users-table__td--head">
                                <div class="users-table__title">
                                    Активность
                                </div>
                            </div>
                            <div class="users-table__td">
                                <div class="users-table__input">
                                    В сети
                                </div>
                            </div>
                            <? for($i = 0; $i < 4; $i++) { ?>
                                <div class="users-table__td">
                                    <div class="users-table__input">
                                        12.08.2021 13:00
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                        <div class="users-table__col users-table__col--subscription">
                            <div class="users-table__td users-table__td--head">
                                <div class="users-table__title">
                                    Подписка до
                                </div>
                            </div>
                            <div class="users-table__td">
                                <div class="users-table__btn">
                                    Базовый тариф
                                </div>
                            </div>
                            <div class="users-table__td">
                                <div class="users-table__btn">
                                    Пробный период
                                </div>
                            </div>
                            <div class="users-table__td">
                                <div class="users-table__btn">
                                    Годовая подписка
                                </div>
                            </div>
                            <div class="users-table__td">
                                <div class="users-table__btn">
                                    Премиум +
                                </div>
                            </div>
                            <div class="users-table__td">
                                <div class="users-table__btn">
                                    Не продлили
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="users-table users-table--mobile">
                    <div class="users-table__row users-table__row--head">
                        <div class="users-table__col users-table__col--name">
                            <div class="users-table__td">
                                <div class="users-table__title">
                                    ФИО/дата рождения
                                </div>
                            </div>
                        </div>
                        <div class="users-table__col users-table__col--contacts">
                            <div class="users-table__td">
                                <div class="users-table__title">
                                    Телефон/почта и город
                                </div>
                            </div>
                        </div>
                        <div class="users-table__col users-table__col--activity">
                            <div class="users-table__td">
                                <div class="users-table__title">
                                    Активность
                                </div>
                            </div>
                        </div>
                        <div class="users-table__col users-table__col--time">
                            <div class="users-table__td">
                                <div class="users-table__title">
                                    Время на сервисе
                                </div>
                            </div>
                        </div>
                    </div>
                    <? for($i = 0; $i < 5; $i++) { ?>
                        <div class="users-table__item j-table-users-item">
                            <div class="users-table__arrow j-table-users-arrow">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                </svg>
                            </div>
                            <div class="users-table__row">
                                <div class="users-table__col users-table__col--name">
                                    <div class="users-table__td">
                                        <div class="users-table__input">
                                            <input type="text" value="Иван Иванов" readonly>
                                        </div>
                                        <div class="users-table__input">
                                            <input type="text" value="14.12.1995" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="users-table__col users-table__col--contacts">
                                    <div class="users-table__td">
                                        <div class="users-table__input">
                                            <input type="text" value="г. Днепр" readonly>
                                        </div>
                                        <div class="users-table__input">
                                            <input type="text" value="+38 067 000 00 00" readonly>
                                        </div>
                                        <div class="users-table__input">
                                            <input type="text" value="name@mail.com" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="users-table__col users-table__col--activity">
                                    <div class="users-table__td">
                                        <div class="users-table__input">
                                            В сети
                                        </div>
                                    </div>
                                </div>
                                <div class="users-table__col users-table__col--time">
                                    <div class="users-table__td">
                                        <div class="users-table__input">
                                            4 месяца
                                        </div>
                                    </div>
                                </div>
                                <div class="users-table__col users-table__col--mob-time">
                                    <div class="users-table__td">
                                        <div class="users-table__subscription-flex">
                                            <div class="users-table__title">
                                                Время на сервисе
                                            </div>
                                            <div class="users-table__input">
                                                4 месяца
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="users-table__col users-table__col--mob-treatment">
                                    <div class="users-table__td">
                                        <div class="users-table__treatment-flex">
                                            <div class="users-table__title">
                                                Лечение
                                            </div>
                                            <ul class="users-table__list">
                                                <li>
                                                    <span class="users-table__list-title">День</span>
                                                    <span class="users-table__list-val">556</span>
                                                </li>
                                                <li>
                                                    <span class="users-table__list-title">Неделя</span>
                                                    <span class="users-table__list-val">556</span>
                                                </li>
                                                <li>
                                                    <span class="users-table__list-title">Месяц</span>
                                                    <span class="users-table__list-val">556</span>
                                                </li>
                                                <li>
                                                    <span class="users-table__list-title">Год</span>
                                                    <span class="users-table__list-val">556</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="users-table__col users-table__col--mob-subscription">
                                    <div class="users-table__td">
                                        <div class="users-table__subscription-flex">
                                            <div class="users-table__title">
                                                Подписка до
                                            </div>
                                            <div class="users-table__btn">
                                                Базовый тариф
                                            </div>
                                        </div>
                                    </div>
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
    
<? include '../templates/footer.php'; ?>