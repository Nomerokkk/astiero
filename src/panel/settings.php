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
                    <button class="btn btn--orange settings__btn" type="submit">
                        Сохранить
                    </button>
                </form>
            </div>
        </section>
    </div>
    
<? include '../templates/footer.php'; ?>