<? $page = 'panel';

include '../templates/header.php'; ?>
	
    <div class="wrapper panel panel--withperiod j-wrapper">
        <section class="help">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumbs__list">
                        <li>
                            <a href="/panel">
                                Главная
                            </a>
                        </li>
                        <li>
                            Помощь
                        </li>
                    </ul>
                </div>
                <div class="panel__top panel__top--center">
                    <div class="title-overflow">
                        <h1 class="title j-wow j-wow-up">
                            помощь
                        </h1>
                    </div>
                </div>
                <div class="faq">
                    <? for($i = 0; $i < 3; $i++) { ?>
                        <div class="faq__item">
                            <div class="faq__title <?= ($i == 0) ? 'active' : ''; ?>" data-toggle="#faq<?= $i; ?>">
                                Как работает ?
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                </svg>
                            </div>
                            <div class="faq__desc" <?= ($i == 0) ? 'style="display: block;"' : ''; ?> id="faq<?= $i; ?>">
                                Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
                            </div>
                        </div>
                    <? } ?>
                </div>
            </div>
        </section>

        <section class="form">
            <div class="container">
                <div class="title-overflow">
                    <h2 class="title title--center j-wow j-wow-up">
                        ОСТАЛИСЬ ВОПРОСЫ?
                    </h2>
                </div>
                <form class="form__form j-form" data-modal="#ok">
                    <div class="row">
                        <div class="col">
                            <div class="input">
                                <input type="text" placeholder="Имя и фамилия" data-required>
                                <svg width="15" height="18">
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#user"/>
                                </svg>
                            </div>
                        </div>
                        <div class="col">
                            <div class="phone phone--pink">
                                <input type="tel" class="j-phone" data-required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input">
                                <input type="email" placeholder="E-mail" data-required>
                                <svg width="16" height="11">
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#email"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="input">
                        <textarea rows="9" placeholder="Комментарий"></textarea>
                    </div>
                    <button class="form__btn btn btn--orange" type="submit">Отправить</button>
                </form>
            </div>
        </section>
    </div>

    <div class="modal modal--ok modal--ok2" id="ok">
        <div class="modal__inner">
            <div class="modal__icon">
                <svg>
                    <use xlink:href="<?= $target; ?>/img/modal/ok-smile.svg#icon"/>
                </svg>
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