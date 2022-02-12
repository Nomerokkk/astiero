<? $page = 'admin';

include '../templates/header.php'; ?>
	
    <div class="wrapper panel j-wrapper">
        <section class="admin settings">
            <div class="container">
                <div class="panel__top panel__top--center">
                    <div class="title-overflow">
                        <h1 class="title j-wow j-wow-up">
                            Настройки
                        </h1>
                    </div>
                </div>
                <div class="info">
                    <form class="info__inner j-form">
                        <div class="info__top">
                            <div class="info__img avatar">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#user"/>
                                </svg>
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
                                        <input type="tel" class="j-phone" value="+380 67 328 2822" data-required>
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
                                    <div class="input">
                                        <input type="email" placeholder="E-mail" data-required>
                                        <svg width="16" height="11">
                                            <use xlink:href="<?= $target; ?>/img/icons.svg#email"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="info__col">
                                    <div class="input">
                                        <input type="text" placeholder="Логин" data-required>
                                        <svg width="15" height="18">
                                            <use xlink:href="<?= $target; ?>/img/icons.svg#user"/>
                                        </svg>
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
                            </div>
                        </div>
                    </form>
                </div>
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