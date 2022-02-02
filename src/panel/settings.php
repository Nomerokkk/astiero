<? $page = 'panel';

include '../templates/header.php'; ?>
	
    <div class="wrapper panel panel--withperiod j-wrapper">
        <section class="settings-page">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumbs__list">
                        <li>
                            <a href="/panel">
                                Главная
                            </a>
                        </li>
                        <li>
                            Настройки
                        </li>
                    </ul>
                </div>
                <div class="panel__top panel__top--center">
                    <div class="title-overflow">
                        <h1 class="title j-wow j-wow-up">
                            Настройки
                        </h1>
                    </div>
                </div>
                <form class="settings j-form">
                    <div class="settings__item settings__item--info">
                        <div class="row">
                            <div class="col">
                                <div class="settings__label-title">
                                    Название клиники
                                </div>
                                <div class="input">
                                    <input type="text" value="Medical">
                                </div>
                            </div>
                            <div class="col">
                                <div class="settings__label-title">
                                    Язык
                                </div>
                                <select class="select j-select">
                                    <option value="Русский">Русский</option>
                                    <option value="English">English</option>
                                    <option value="Українська">Українська</option>
                                </select>
                            </div>
                            <div class="col">
                                <div class="settings__label-title">
                                    Адрес клиники
                                </div>
                                <div class="input">
                                    <input type="text" value="Ленина 15-3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="settings__item settings__item--color">
                        <div class="settings-color">
                            <div class="settings-color__title">
                                Цвет
                            </div>
                            <div class="settings-color__items">
                                <label class="settings-color__item">
                                    <span class="settings-color__img j-settings-color" style="background: #D73F34;">
                                        <input name="color1" type="text" value="#D73F34" class="j-pickr" data-color="#D73F34" data-var="orange">
                                    </span>
                                    <span class="settings-color__subtitle">
                                        Цвет 1
                                    </span>
                                </label>
                                <label class="settings-color__item">
                                    <span class="settings-color__img j-settings-color" style="background: #EA7771;">
                                        <input name="color2" type="text" value="#EA7771" class="j-pickr" data-color="#EA7771" data-var="orangeL">
                                    </span>
                                    <span class="settings-color__subtitle settings__label-title">
                                        Цвет 2
                                    </span>
                                </label>
                                <label class="settings-color__item">
                                    <span class="settings-color__img j-settings-color" style="background: #8A3A34;">
                                        <input name="color3" type="text" value="#8A3A34" class="j-pickr" data-color="#8A3A34" data-var="orangeD">
                                    </span>
                                    <span class="settings-color__subtitle settings__label-title">
                                        Цвет 3
                                    </span>
                                </label>
                                <label class="settings-color__item">
                                    <span class="settings-color__img j-settings-color" style="background: #F5E2E1;">
                                        <input name="color4" type="text" value="#F5E2E1" class="j-pickr" data-color="#F5E2E1" data-var="orangeS">
                                    </span>
                                    <span class="settings-color__subtitle settings__label-title">
                                        Цвет 4
                                    </span>
                                </label>
                                <label class="settings-color__item">
                                    <span class="settings-color__img j-settings-color" style="background: #333333;">
                                        <input name="color5" type="text" value="#333333" class="j-pickr" data-color="#333333" data-var="black">
                                    </span>
                                    <span class="settings-color__subtitle settings__label-title">
                                        Цвет 5
                                    </span>
                                </label>
                            </div>
                            <button type="button" class="btn btn--grey settings-color__reset j-reset-settings">Сбросить</button>
                        </div>
                    </div>
                    <button class="btn btn--orange settings__btn" type="submit">
                        Сохранить
                    </button>
                </form>
            </div>
        </section>
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