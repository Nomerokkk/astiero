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
                            Пациенты
                        </li>
                    </ul>
                </div>
                <div class="panel__top">
                    <div class="title-overflow">
                        <h1 class="title j-wow j-wow-up">
                            Пациенты
                        </h1>
                    </div>
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
                <div class="panel__not">
                    <div class="panel__not-icon">
                        <img src="<?= $target; ?>/img/patients/not.svg" alt="">
                    </div>
                    <div class="panel__not-title">
                        у вас пока нет пациентов
                    </div>
                    <div class="panel__not-btn">
                        <button type="button" class="btn btn--orange" data-fancybox data-src="#add-patient">
                            <svg>
                                <use xlink:href="<?= $target; ?>/img/icons.svg#plus"/>
                            </svg>
                            Добавить пациента
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="info info--modal" id="add-patient">
        <div class="info__title-modal">
            Добавьте пациента
        </div>
        <form class="info__inner j-form" data-modal="#ok-add-patient">
            <div class="info__top">
                <div class="info__img avatar">
                    <img data-src="<?= $target; ?>/img/panel/avatar.jpg" alt="" class="j-lazy">
                </div>
                <div class="info__top-text">
                    <div class="info__title">
                        Пациент
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
                        <div class="sort">
                            <div class="sort__title">
                                Порядок:
                            </div>
                            <div class="input">
                                <input type="number" min="1" value="1" data-required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info__row">
                    <div class="info__col info__col--btn">
                        <button class="btn btn--orange" type="submit">
                            Сохранить
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="modal modal--ok-patient" id="ok-add-patient">
        <div class="modal__inner">
            <div class="modal__icon">
                <svg>
                    <use xlink:href="<?= $target; ?>/img/modal/ok-check.svg#icon"/>
                </svg>
            </div>
            <div class="modal__title">
                Отлично!
            </div>
            <div class="modal__desc">
                Вы успешно добавили пациента  
            </div>
            <button type="button" class="btn btn--orange modal__btn" data-close>
                Продолжить
            </button>
        </div>
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