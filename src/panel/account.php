<? $page = 'panel';

include '../templates/header.php'; ?>
	
    <div class="wrapper panel panel--withperiod j-wrapper">
        <section class="account-page">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumbs__list">
                        <li>
                            <a href="/panel">
                                Главная
                            </a>
                        </li>
                        <li>
                            Аккаунт
                        </li>
                    </ul>
                </div>
                <div class="panel__top panel__top--center">
                    <div class="title-overflow">
                        <h1 class="title j-wow j-wow-up">
                            Аккаунт
                        </h1>
                    </div>
                </div>
                <div class="account">
                    <div class="account__title">
                        Текущий план
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="account-cart">
                                <div class="account-cart__title">
                                    Месячный
                                </div>
                                <div class="account-cart__inner">
                                    <ul class="account-cart__list">
                                        <li>
                                            <div>
                                                Дата обновления подписки
                                            </div>
                                            <span>
                                                Октябрь 12, 2021 <br> (через 18 дней)
                                            </span>
                                        </li>
                                        <li>
                                            <div>
                                                Сумма составит
                                            </div>
                                            <span>
                                                2 000 грн
                                            </span>
                                        </li>
                                    </ul>
                                    <label class="account-cart__check">
                                        <input type="checkbox" checked>
                                        <div class="account-cart__check-bl">
                                            <div class="account-cart__check-svg">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#check"/>
                                                </svg>
                                            </div>
                                            <div class="account-cart__check-title">
                                                Автоматическое списание
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <form class="account-action" action="pay-ok.php">
                                <ul class="account-action__list">
                                    <? for($i = 0; $i < 8; $i++) { ?>
                                        <li>
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#check"/>
                                            </svg>
                                            Сложно описать комплексное стоматологическое лечение.
                                        </li>
                                    <? } ?>
                                </ul>
                                <button type="submit" class="btn btn--orange account-action__btn">
                                    Продлить подписку
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="account-page__table">
                    <div class="table-wrap">
                        <div class="table">
                            <div class="table__tr table__tr--head">
                                <div class="table__td">
                                    №
                                </div>
                                <div class="table__td">
                                    Номер транзакции
                                </div>
                                <div class="table__td table__td--center">
                                    Дата и время
                                </div>
                                <div class="table__td table__td--center">
                                    Сумма
                                </div>
                                <div class="table__td table__td--center">
                                    PDF
                                </div>
                            </div>
                            <? for($i = 1; $i < 3; $i++) { ?>
                                <div class="table__tr">
                                    <div class="table__td">
                                        <?= $i; ?>
                                    </div>
                                    <div class="table__td">
                                        #1-570355056565
                                    </div>
                                    <div class="table__td table__td--center">
                                        12.10.21 18:00
                                    </div>
                                    <div class="table__td table__td--center">
                                        1 000 грн
                                    </div>
                                    <div class="table__td">
                                        <a href="#" class="btn btn--orange" target="_blank">
                                            Скачать PDF
                                        </a>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="modal modal--change-tarif" id="change-tarif">
        <form class="modal__inner j-form">
            <div class="modal__title">
                Сменить тариф
            </div>
            <select class="select j-select change-tarif-select">
                <option value="Базовый тариф">Базовый тариф</option>
                <option value="Базовый тариф 2">Базовый тариф 2</option>
                <option value="Базовый тариф 3">Базовый тариф 3</option>
            </select>
            <div class="account-action">
                <ul class="account-action__checks">
                    <li>
                        <label class="account-action__check">
                            <input name="percent" type="radio" checked>
                            <span class="account-action__check-bl">
                                <span class="account-action__check-month">
                                    1 мес
                                </span>
                                <span class="account-action__check-percent">
                                    -5%
                                </span>
                            </span>
                        </label>
                    </li>
                    <li>
                        <label class="account-action__check">
                            <input name="percent" type="radio">
                            <span class="account-action__check-bl">
                                <span class="account-action__check-month">
                                    3 мес
                                </span>
                                <span class="account-action__check-percent">
                                    -10%
                                </span>
                            </span>
                        </label>
                    </li>
                    <li>
                        <label class="account-action__check">
                            <input name="percent" type="radio">
                            <span class="account-action__check-bl">
                                <span class="account-action__check-month">
                                    6 мес
                                </span>
                                <span class="account-action__check-percent">
                                    -15%
                                </span>
                            </span>
                        </label>
                    </li>
                    <li>
                        <label class="account-action__check">
                            <input name="percent" type="radio">
                            <span class="account-action__check-bl">
                                <span class="account-action__check-month">
                                    9 мес
                                </span>
                                <span class="account-action__check-percent">
                                    -20%
                                </span>
                            </span>
                        </label>
                    </li>
                    <li>
                        <label class="account-action__check">
                            <input name="percent" type="radio">
                            <span class="account-action__check-bl">
                                <span class="account-action__check-month">
                                    1 год
                                </span>
                                <span class="account-action__check-percent">
                                    -25%
                                </span>
                            </span>
                        </label>
                    </li>
                </ul>
                <div class="account-action__month">
                    <div class="account-action__month-title">
                        Месяц
                    </div>
                    <select class="select j-select">
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
                    </select>
                    <div class="account-action__month-title">
                        500 грн
                    </div>
                    <div class="account-action__month-percent">
                        -5%
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn--orange modal__btn">
                Сохранить
            </button>
        </form>
    </div>

    <div class="modal modal--ok modal--ok2" id="ok">
        <div class="modal__inner">
            <div class="modal__icon">
                <img data-src="<?= $target; ?>/img/modal/ok-smile.svg" alt="" class="j-lazy">
            </div>
            <div class="modal__title">
                Ваша заявка была отправлена
            </div>
            <button class="btn btn--orange modal__btn" type="button" data-close>
                Хорошо
            </button>
        </div>
    </div>
    
<? include '../templates/footer.php'; ?>