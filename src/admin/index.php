<? $page = 'admin';

include '../templates/header.php'; ?>
	
    <div class="panel-message j-panel-message-wrap">
        <div class="panel-message__item j-panel-message panel-message__item--error">
            <div class="panel-message__inner">
                <span>
                    <img src="<?= $target; ?>/img/msg/error.svg" alt="" loading="lazy">
                </span>
                Произошла ошибка при сохранении
            </div>
        </div>
        <div class="panel-message__item j-panel-message">
            <div class="panel-message__inner">
                <span>
                    <img src="<?= $target; ?>/img/msg/ok.svg" alt="" loading="lazy">
                </span>
                Ваши данные успешно сохранены
            </div>
        </div>
    </div>
            
    <div class="wrapper panel j-wrapper">
        <section class="admin start">
            <div class="container">
                <div class="panel__top">
                    <div class="title-overflow">
                        <h1 class="title j-wow j-wow-up">
                            Главная
                        </h1>
                    </div>
                </div>
                <div class="start__tabs">
                    <div class="start__tabs-overflow j-overflow-wrap">
                        <div class="tabs">
                            <? $list = [
                                0 => [
                                    'title' => 'Бесплатный период 30 дней',
                                ],
                                1 => [
                                    'title' => 'Функции программы',
                                ],
                                2 => [
                                    'title' => 'Какие проблемы мы решаем',
                                ],
                                3 => [
                                    'title' => 'Более 1300 компаний используют наш сервис. Присоединяйт...',
                                ],
                                4 => [
                                    'title' => 'Тарифные планы',
                                ],
                                5 => [
                                    'title' => 'Видео отзывы',
                                ],
                                6 => [
                                    'title' => 'Остались вопросы?',
                                ],
                                7 => [
                                    'title' => 'Пару слов о нас',
                                ],
                            ];
                            
                            $count = 0;

                            foreach($list as $item) { 
                                $count++;

                                $class = '';

                                if($count == 4) {
                                    $class .= 'tabs__item-title--small';
                                }

                                if($count == $_GET['page']) {
                                    $class .= ' active';
                                }

                                if($count == 1 && !$_GET['page']) {
                                    $class .= ' active';
                                }
                            ?>
                                <div class="tabs__item">
                                    <a href="/admin?page=<?= $count; ?>" class="tabs__item-title <?= $class; ?>">
                                        <?= $item['title']; ?>
                                    </a>
                                </div>
                            <? } ?>
                        </div>
                    </div>
                </div>

                <div class="start__lang j-tabs">
                    <div class="start__lang-item" data-tab="#ru">
                        <div class="start__lang-img">
                            <img src="<?= $target; ?>/img/lang/ru.svg" alt="">
                        </div>
                        <div class="start__lang-name">
                            Русский
                        </div>
                    </div>
                    <div class="start__lang-item" data-tab="#uk">
                        <div class="start__lang-img">
                            <img src="<?= $target; ?>/img/lang/uk.svg" alt="">
                        </div>
                        <div class="start__lang-name">
                            Українська
                        </div>
                    </div>
                    <div class="start__lang-item" data-tab="#en">
                        <div class="start__lang-img">
                            <img src="<?= $target; ?>/img/lang/en.svg" alt="">
                        </div>
                        <div class="start__lang-name">
                            English
                        </div>
                    </div>
                </div>

                <!-- Page 1 -->
                <? if($_GET['page'] == 1 || !$_GET['page']) { ?>
                    <div class="start__tab-area j-tabs-area" id="ru">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="БЕСПЛАТНЫЙ ПЕРИОД 30 ДНЕЙ">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Подзаголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Более 1300 пациентов используют нас. Присоединяйтесь!">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Кнопка
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Начните сейчас">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Поле ввода
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" placeholder="__-___-__-__">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <div class="label-img">
                                            <div class="label-img__img">
                                                <img src="<?= $target; ?>/img/home/notebook.png" alt="">
                                            </div>
                                            <div class="label-img__title">
                                                Фото
                                            </div>
                                            <div class="label-img__nav">
                                                <div class="label-img__delete label-img__link" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#delete"/>
                                                    </svg>
                                                </div>
                                                <label class="label-img__edit label-img__link">
                                                    <input type="file">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#edit"/>
                                                    </svg>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin__col">
                                        <div class="label-img">
                                            <div class="label-img__img">
                                                <img src="<?= $target; ?>/img/home/banner.png" alt="">
                                            </div>
                                            <div class="label-img__title">
                                                Фон
                                            </div>
                                            <div class="label-img__nav">
                                                <div class="label-img__delete label-img__link" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#delete"/>
                                                    </svg>
                                                </div>
                                                <label class="label-img__edit label-img__link">
                                                    <input type="file">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#edit"/>
                                                    </svg>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin__btns admin__btns--one">
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                    <div class="start__tab-area j-tabs-area" id="uk">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="БЕСПЛАТНЫЙ ПЕРИОД 30 ДНЕЙ">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Подзаголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Более 1300 пациентов используют нас. Присоединяйтесь!">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Кнопка
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Начните сейчас">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Поле ввода
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" placeholder="__-___-__-__">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <div class="label-img">
                                            <div class="label-img__img">
                                                <img src="<?= $target; ?>/img/home/notebook.png" alt="">
                                            </div>
                                            <div class="label-img__title">
                                                Фото
                                            </div>
                                            <div class="label-img__nav">
                                                <div class="label-img__delete label-img__link" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#delete"/>
                                                    </svg>
                                                </div>
                                                <label class="label-img__edit label-img__link">
                                                    <input type="file">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#edit"/>
                                                    </svg>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin__col">
                                        <div class="label-img">
                                            <div class="label-img__img">
                                                <img src="<?= $target; ?>/img/home/banner.png" alt="">
                                            </div>
                                            <div class="label-img__title">
                                                Фон
                                            </div>
                                            <div class="label-img__nav">
                                                <div class="label-img__delete label-img__link" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#delete"/>
                                                    </svg>
                                                </div>
                                                <label class="label-img__edit label-img__link">
                                                    <input type="file">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#edit"/>
                                                    </svg>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin__btns admin__btns--one">
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                    <div class="start__tab-area j-tabs-area" id="en">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="БЕСПЛАТНЫЙ ПЕРИОД 30 ДНЕЙ">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Подзаголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Более 1300 пациентов используют нас. Присоединяйтесь!">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Кнопка
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Начните сейчас">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Поле ввода
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" placeholder="__-___-__-__">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <div class="label-img">
                                            <div class="label-img__img">
                                                <img src="<?= $target; ?>/img/home/notebook.png" alt="">
                                            </div>
                                            <div class="label-img__title">
                                                Фото
                                            </div>
                                            <div class="label-img__nav">
                                                <div class="label-img__delete label-img__link" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#delete"/>
                                                    </svg>
                                                </div>
                                                <label class="label-img__edit label-img__link">
                                                    <input type="file">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#edit"/>
                                                    </svg>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin__col">
                                        <div class="label-img">
                                            <div class="label-img__img">
                                                <img src="<?= $target; ?>/img/home/banner.png" alt="">
                                            </div>
                                            <div class="label-img__title">
                                                Фон
                                            </div>
                                            <div class="label-img__nav">
                                                <div class="label-img__delete label-img__link" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#delete"/>
                                                    </svg>
                                                </div>
                                                <label class="label-img__edit label-img__link">
                                                    <input type="file">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#edit"/>
                                                    </svg>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin__btns admin__btns--one">
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                <? } ?>

                <!-- Page 2 -->
                <? if($_GET['page'] == 2) { ?>
                    <div class="start__tab-area j-tabs-area" id="ru">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="ФУНКЦИИ ПРОГРАММЫ">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <? for($i = 1; $i < 7; $i++) { ?>
                                <div class="accordion">
                                    <div class="accordion__top">
                                        <div class="accordion__top-inner <?= ($i == 1) ? 'active' : ''; ?>" data-toggle="#ac<?= $i; ?>">
                                            <div class="accordion__title">
                                                Функция №<?= $i; ?>
                                            </div>
                                            <div class="accordion__arrow">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="minus" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">-</div>
                                    </div>
                                    <div class="accordion__content <?= ($i == 1) ? 'active' : ''; ?>" id="ac<?= $i; ?>">
                                        <div class="admin__row">
                                            <div class="admin__col admin__col--img">
                                                <div class="label-img">
                                                    <div class="label-img__img">
                                                        <img src="<?= $target; ?>/img/home/notebook.png" alt="">
                                                    </div>
                                                    <div class="label-img__title">
                                                        Фото
                                                    </div>
                                                    <div class="label-img__nav">
                                                        <div class="label-img__delete label-img__link" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                            <svg>
                                                                <use xlink:href="<?= $target; ?>/img/icons.svg#delete"/>
                                                            </svg>
                                                        </div>
                                                        <label class="label-img__edit label-img__link">
                                                            <input type="file">
                                                            <svg>
                                                                <use xlink:href="<?= $target; ?>/img/icons.svg#edit"/>
                                                            </svg>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="admin__col admin__col--img-right">
                                                <label class="label">
                                                    <span class="label__title">
                                                        Заголовок
                                                    </span>
                                                    <span class="input input--small">
                                                        <input type="text" value="Персонализированные документы и шаблоны изображений">     
                                                    </span>
                                                </label>
                                                <label class="label">
                                                    <span class="label__title">
                                                        Подзаголовок
                                                    </span>
                                                    <span class="input input--small">
                                                        <textarea rows="1">Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются</textarea>                                           
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                        <div class="admin__btns">
                            <button class="btn btn--border add-btn" type="button">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#plus"/>
                                </svg>
                                <span>Добавить функцию</span>
                            </button>
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                    <div class="start__tab-area j-tabs-area" id="uk">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="ФУНКЦИИ ПРОГРАММЫ">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <? for($i = 1; $i < 7; $i++) { ?>
                                <div class="accordion">
                                    <div class="accordion__top">
                                        <div class="accordion__top-inner <?= ($i == 1) ? 'active' : ''; ?>" data-toggle="#ac<?= $i; ?>">
                                            <div class="accordion__title">
                                                Функция №<?= $i; ?>
                                            </div>
                                            <div class="accordion__arrow">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="minus" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">-</div>
                                    </div>
                                    <div class="accordion__content <?= ($i == 1) ? 'active' : ''; ?>" id="ac<?= $i; ?>">
                                        <div class="admin__row">
                                            <div class="admin__col admin__col--img">
                                                <div class="label-img">
                                                    <div class="label-img__img">
                                                        <img src="<?= $target; ?>/img/home/notebook.png" alt="">
                                                    </div>
                                                    <div class="label-img__title">
                                                        Фото
                                                    </div>
                                                    <div class="label-img__nav">
                                                        <div class="label-img__delete label-img__link" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                            <svg>
                                                                <use xlink:href="<?= $target; ?>/img/icons.svg#delete"/>
                                                            </svg>
                                                        </div>
                                                        <label class="label-img__edit label-img__link">
                                                            <input type="file">
                                                            <svg>
                                                                <use xlink:href="<?= $target; ?>/img/icons.svg#edit"/>
                                                            </svg>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="admin__col admin__col--img-right">
                                                <label class="label">
                                                    <span class="label__title">
                                                        Заголовок
                                                    </span>
                                                    <span class="input input--small">
                                                        <input type="text" value="Персонализированные документы и шаблоны изображений">     
                                                    </span>
                                                </label>
                                                <label class="label">
                                                    <span class="label__title">
                                                        Подзаголовок
                                                    </span>
                                                    <span class="input input--small">
                                                        <textarea rows="1">Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются</textarea>                                           
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                        <div class="admin__btns">
                            <button class="btn btn--border add-btn" type="button">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#plus"/>
                                </svg>
                                <span>Добавить функцию</span>
                            </button>
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                    <div class="start__tab-area j-tabs-area" id="en">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="ФУНКЦИИ ПРОГРАММЫ">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <? for($i = 1; $i < 7; $i++) { ?>
                                <div class="accordion">
                                    <div class="accordion__top">
                                        <div class="accordion__top-inner <?= ($i == 1) ? 'active' : ''; ?>" data-toggle="#ac<?= $i; ?>">
                                            <div class="accordion__title">
                                                Функция №<?= $i; ?>
                                            </div>
                                            <div class="accordion__arrow">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="minus" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">-</div>
                                    </div>
                                    <div class="accordion__content <?= ($i == 1) ? 'active' : ''; ?>" id="ac<?= $i; ?>">
                                        <div class="admin__row">
                                            <div class="admin__col admin__col--img">
                                                <div class="label-img">
                                                    <div class="label-img__img">
                                                        <img src="<?= $target; ?>/img/home/notebook.png" alt="">
                                                    </div>
                                                    <div class="label-img__title">
                                                        Фото
                                                    </div>
                                                    <div class="label-img__nav">
                                                        <div class="label-img__delete label-img__link" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                            <svg>
                                                                <use xlink:href="<?= $target; ?>/img/icons.svg#delete"/>
                                                            </svg>
                                                        </div>
                                                        <label class="label-img__edit label-img__link">
                                                            <input type="file">
                                                            <svg>
                                                                <use xlink:href="<?= $target; ?>/img/icons.svg#edit"/>
                                                            </svg>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="admin__col admin__col--img-right">
                                                <label class="label">
                                                    <span class="label__title">
                                                        Заголовок
                                                    </span>
                                                    <span class="input input--small">
                                                        <input type="text" value="Персонализированные документы и шаблоны изображений">     
                                                    </span>
                                                </label>
                                                <label class="label">
                                                    <span class="label__title">
                                                        Подзаголовок
                                                    </span>
                                                    <span class="input input--small">
                                                        <textarea rows="1">Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются</textarea>                                           
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                        <div class="admin__btns">
                            <button class="btn btn--border add-btn" type="button">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#plus"/>
                                </svg>
                                <span>Добавить функцию</span>
                            </button>
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                <? } ?>

                <!-- Page 3 -->
                <? if($_GET['page'] == 3) { ?>
                    <div class="start__tab-area j-tabs-area" id="ru">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Какие проблемы мы решаем">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion__top">
                                    <div class="accordion__top-inner active" data-toggle="#problems1">
                                        <div class="accordion__title">
                                            ПРОБЛЕМЫ
                                        </div>
                                        <div class="accordion__arrow">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__content active" id="problems1">
                                    <div class="admin__row">
                                        <? for($i = 1; $i < 5; $i++) { ?>
                                            <div class="admin__col admin__col--full">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        Проблема <?= $i; ?>
                                                    </span>
                                                    <span class="input input--small">
                                                        <div class="minus" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">-</div>
                                                        <textarea rows="1">Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются</textarea>
                                                    </span>
                                                </label>
                                            </div>
                                        <? } ?>
                                    </div>
                                    <button class="btn add-btn add-btn--transparent" type="button">
                                        <div class="plus">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#plus"/>
                                            </svg>
                                        </div>
                                        <span>Добавить проблему</span>
                                    </button>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion__top">
                                    <div class="accordion__top-inner" data-toggle="#res2">
                                        <div class="accordion__title">
                                            РЕШЕНИЯ
                                        </div>
                                        <div class="accordion__arrow">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__content" id="res2">
                                    <div class="admin__row">
                                        <? for($i = 1; $i < 5; $i++) { ?>
                                            <div class="admin__col admin__col--full">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        РЕШЕНИЕ <?= $i; ?>
                                                    </span>
                                                    <span class="input input--small">
                                                        <div class="minus" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">-</div>
                                                        <textarea rows="1">Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются</textarea>
                                                    </span>
                                                </label>
                                            </div>
                                        <? } ?>
                                    </div>
                                    <button class="btn add-btn add-btn--transparent" type="button">
                                        <div class="plus">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#plus"/>
                                            </svg>
                                        </div>
                                        <span>Добавить решение</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="admin__btns admin__btns--one">
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                    <div class="start__tab-area j-tabs-area" id="uk">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Какие проблемы мы решаем">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion__top">
                                    <div class="accordion__top-inner active" data-toggle="#problems1">
                                        <div class="accordion__title">
                                            ПРОБЛЕМЫ
                                        </div>
                                        <div class="accordion__arrow">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__content active" id="problems1">
                                    <div class="admin__row">
                                        <? for($i = 1; $i < 5; $i++) { ?>
                                            <div class="admin__col admin__col--full">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        Проблема <?= $i; ?>
                                                    </span>
                                                    <span class="input input--small">
                                                        <div class="minus" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">-</div>
                                                        <textarea rows="1">Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются</textarea>
                                                    </span>
                                                </label>
                                            </div>
                                        <? } ?>
                                    </div>
                                    <button class="btn add-btn add-btn--transparent" type="button">
                                        <div class="plus">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#plus"/>
                                            </svg>
                                        </div>
                                        <span>Добавить проблему</span>
                                    </button>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion__top">
                                    <div class="accordion__top-inner" data-toggle="#res2">
                                        <div class="accordion__title">
                                            РЕШЕНИЯ
                                        </div>
                                        <div class="accordion__arrow">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__content" id="res2">
                                    <div class="admin__row">
                                        <? for($i = 1; $i < 5; $i++) { ?>
                                            <div class="admin__col admin__col--full">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        РЕШЕНИЕ <?= $i; ?>
                                                    </span>
                                                    <span class="input input--small">
                                                        <div class="minus" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">-</div>
                                                        <textarea rows="1">Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются</textarea>
                                                    </span>
                                                </label>
                                            </div>
                                        <? } ?>
                                    </div>
                                    <button class="btn add-btn add-btn--transparent" type="button">
                                        <div class="plus">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#plus"/>
                                            </svg>
                                        </div>
                                        <span>Добавить решение</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="admin__btns admin__btns--one">
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                    <div class="start__tab-area j-tabs-area" id="en">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Какие проблемы мы решаем">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion__top">
                                    <div class="accordion__top-inner active" data-toggle="#problems1">
                                        <div class="accordion__title">
                                            ПРОБЛЕМЫ
                                        </div>
                                        <div class="accordion__arrow">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__content active" id="problems1">
                                    <div class="admin__row">
                                        <? for($i = 1; $i < 5; $i++) { ?>
                                            <div class="admin__col admin__col--full">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        Проблема <?= $i; ?>
                                                    </span>
                                                    <span class="input input--small">
                                                        <div class="minus" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">-</div>
                                                        <textarea rows="1">Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются</textarea>
                                                    </span>
                                                </label>
                                            </div>
                                        <? } ?>
                                    </div>
                                    <button class="btn add-btn add-btn--transparent" type="button">
                                        <div class="plus">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#plus"/>
                                            </svg>
                                        </div>
                                        <span>Добавить проблему</span>
                                    </button>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion__top">
                                    <div class="accordion__top-inner" data-toggle="#res2">
                                        <div class="accordion__title">
                                            РЕШЕНИЯ
                                        </div>
                                        <div class="accordion__arrow">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__content" id="res2">
                                    <div class="admin__row">
                                        <? for($i = 1; $i < 5; $i++) { ?>
                                            <div class="admin__col admin__col--full">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        РЕШЕНИЕ <?= $i; ?>
                                                    </span>
                                                    <span class="input input--small">
                                                        <div class="minus" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">-</div>
                                                        <textarea rows="1">Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются</textarea>
                                                    </span>
                                                </label>
                                            </div>
                                        <? } ?>
                                    </div>
                                    <button class="btn add-btn add-btn--transparent" type="button">
                                        <div class="plus">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#plus"/>
                                            </svg>
                                        </div>
                                        <span>Добавить решение</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="admin__btns admin__btns--one">
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                <? } ?>

                <!-- Page 4 -->
                <? if($_GET['page'] == 4) { ?>
                    <div class="start__tab-area j-tabs-area" id="ru">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Более 1300 пациентов используют нас. Присоединяйтесь!">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Кнопка
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Начните сейчас">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Поле ввода
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" placeholder="__-___-__-__">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin__btns admin__btns--one">
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                    <div class="start__tab-area j-tabs-area" id="uk">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Более 1300 пациентов используют нас. Присоединяйтесь!">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Кнопка
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Начните сейчас">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Поле ввода
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" placeholder="__-___-__-__">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin__btns admin__btns--one">
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                    <div class="start__tab-area j-tabs-area" id="en">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Более 1300 пациентов используют нас. Присоединяйтесь!">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Кнопка
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Начните сейчас">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Поле ввода
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" placeholder="__-___-__-__">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin__btns admin__btns--one">
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                <? } ?>

                <!-- Page 5 -->
                <? if($_GET['page'] == 5) { ?>
                    <div class="start__tab-area j-tabs-area" id="ru">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="ТАРИФНЫЕ ПЛАНЫ">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Подзаголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Выберите план, который вам больше подходит">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Текст
                                            </span>
                                            <span class="input input--small">
                                                <textarea rows="1">Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются.  Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. </textarea>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <? for($i = 1; $i < 4; $i++) { ?>
                                <div class="accordion">
                                    <div class="accordion__top">
                                        <div class="accordion__top-inner <?= ($i == 1) ? 'active' : ''; ?>" data-toggle="#tar<?= $i; ?>">
                                            <div class="accordion__title">
                                                Тариф №<?= $i; ?>
                                            </div>
                                            <div class="accordion__arrow">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="minus" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">-</div>
                                    </div>
                                    <div class="accordion__content <?= ($i == 1) ? 'active' : ''; ?>" id="tar<?= $i; ?>">
                                        <div class="admin__row">
                                            <div class="admin__col">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        Заголовок
                                                    </span>
                                                    <span class="input">
                                                        <input type="text" value="БАЗОВЫЙ ТАРИФ">                                                
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="admin__col">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        Мини заголовок
                                                    </span>
                                                    <span class="input">
                                                        <input type="text" value="Для стоматологов">                                                
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="admin__col admin__col--full">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        Описание
                                                    </span>
                                                    <span class="input input--small">
                                                        <textarea rows="1">Диагностируйте все состояния</textarea>                                           
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="admin__col">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        Цена
                                                    </span>
                                                    <span class="input input--small">
                                                        <input type="text" value="9$ / месяц">                                                
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="admin__col">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        Кнопка
                                                    </span>
                                                    <span class="input input--small">
                                                        <input type="text" value="Начните сейчас">                                                
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                        <div class="admin__btns">
                            <button class="btn btn--border add-btn" type="button">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#plus"/>
                                </svg>
                                <span>Добавить тариф</span>
                            </button>
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                    <div class="start__tab-area j-tabs-area" id="uk">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="ТАРИФНЫЕ ПЛАНЫ">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Подзаголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Выберите план, который вам больше подходит">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Текст
                                            </span>
                                            <span class="input input--small">
                                                <textarea rows="1">Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются.  Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. </textarea>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <? for($i = 1; $i < 4; $i++) { ?>
                                <div class="accordion">
                                    <div class="accordion__top">
                                        <div class="accordion__top-inner <?= ($i == 1) ? 'active' : ''; ?>" data-toggle="#tar<?= $i; ?>">
                                            <div class="accordion__title">
                                                Тариф №<?= $i; ?>
                                            </div>
                                            <div class="accordion__arrow">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="minus" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">-</div>
                                    </div>
                                    <div class="accordion__content <?= ($i == 1) ? 'active' : ''; ?>" id="tar<?= $i; ?>">
                                        <div class="admin__row">
                                            <div class="admin__col">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        Заголовок
                                                    </span>
                                                    <span class="input">
                                                        <input type="text" value="БАЗОВЫЙ ТАРИФ">                                                
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="admin__col">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        Мини заголовок
                                                    </span>
                                                    <span class="input">
                                                        <input type="text" value="Для стоматологов">                                                
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="admin__col admin__col--full">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        Описание
                                                    </span>
                                                    <span class="input input--small">
                                                        <textarea rows="1">Диагностируйте все состояния</textarea>                                           
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="admin__col">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        Цена
                                                    </span>
                                                    <span class="input input--small">
                                                        <input type="text" value="9$ / месяц">                                                
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="admin__col">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        Кнопка
                                                    </span>
                                                    <span class="input input--small">
                                                        <input type="text" value="Начните сейчас">                                                
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                        <div class="admin__btns">
                            <button class="btn btn--border add-btn" type="button">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#plus"/>
                                </svg>
                                <span>Добавить тариф</span>
                            </button>
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                    <div class="start__tab-area j-tabs-area" id="en">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="ТАРИФНЫЕ ПЛАНЫ">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Подзаголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Выберите план, который вам больше подходит">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Текст
                                            </span>
                                            <span class="input input--small">
                                                <textarea rows="1">Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются.  Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. </textarea>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <? for($i = 1; $i < 4; $i++) { ?>
                                <div class="accordion">
                                    <div class="accordion__top">
                                        <div class="accordion__top-inner <?= ($i == 1) ? 'active' : ''; ?>" data-toggle="#tar<?= $i; ?>">
                                            <div class="accordion__title">
                                                Тариф №<?= $i; ?>
                                            </div>
                                            <div class="accordion__arrow">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="minus" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">-</div>
                                    </div>
                                    <div class="accordion__content <?= ($i == 1) ? 'active' : ''; ?>" id="tar<?= $i; ?>">
                                        <div class="admin__row">
                                            <div class="admin__col">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        Заголовок
                                                    </span>
                                                    <span class="input">
                                                        <input type="text" value="БАЗОВЫЙ ТАРИФ">                                                
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="admin__col">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        Мини заголовок
                                                    </span>
                                                    <span class="input">
                                                        <input type="text" value="Для стоматологов">                                                
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="admin__col admin__col--full">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        Описание
                                                    </span>
                                                    <span class="input input--small">
                                                        <textarea rows="1">Диагностируйте все состояния</textarea>                                           
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="admin__col">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        Цена
                                                    </span>
                                                    <span class="input input--small">
                                                        <input type="text" value="9$ / месяц">                                                
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="admin__col">
                                                <label class="label">
                                                    <span class="label__title label__title--small">
                                                        Кнопка
                                                    </span>
                                                    <span class="input input--small">
                                                        <input type="text" value="Начните сейчас">                                                
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                        <div class="admin__btns">
                            <button class="btn btn--border add-btn" type="button">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#plus"/>
                                </svg>
                                <span>Добавить тариф</span>
                            </button>
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                <? } ?>

                <!-- Page 6 -->
                <? if($_GET['page'] == 6) { ?>
                    <div class="start__tab-area j-tabs-area" id="ru">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Видео отзывы">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <? for($i = 1; $i < 5; $i++) { ?>
                                <div class="accordion">
                                    <div class="accordion__top">
                                        <div class="accordion__top-inner <?= ($i == 1) ? 'active' : ''; ?>" data-toggle="#video<?= $i; ?>">
                                            <div class="accordion__title">
                                                ВИДЕО ОТЗЫВ #<?= $i; ?>
                                            </div>
                                            <div class="accordion__arrow">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__content <?= ($i == 1) ? 'active' : ''; ?>" id="video<?= $i; ?>">
                                        <div class="admin__row">
                                            <div class="admin__col admin__col--img">
                                                <div class="label-img">
                                                    <div class="label-img__img">
                                                        <img src="<?= $target; ?>/img/home/rev3.jpg" alt="">
                                                    </div>
                                                    <div class="label-img__title">
                                                        Видео
                                                    </div>
                                                    <div class="label-img__nav">
                                                        <div class="label-img__delete label-img__link" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                            <svg>
                                                                <use xlink:href="<?= $target; ?>/img/icons.svg#delete"/>
                                                            </svg>
                                                        </div>
                                                        <label class="label-img__edit label-img__link">
                                                            <input type="file">
                                                            <svg>
                                                                <use xlink:href="<?= $target; ?>/img/icons.svg#edit"/>
                                                            </svg>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="admin__col admin__col--img-right">
                                                <label class="label">
                                                    <span class="label__title">
                                                        Заголовок
                                                    </span>
                                                    <span class="input input--small">
                                                        <input type="text" value="Николай">     
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                            <div class="start__inner">
                                <button class="btn btn--border add-btn" type="button">
                                    <svg>
                                        <use xlink:href="<?= $target; ?>/img/icons.svg#plus"/>
                                    </svg>
                                    <span>Добавить видео отзыв</span>
                                </button>
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Кнопка
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Начните сейчас">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Текст
                                            </span>
                                            <span class="input input--small">
                                                <textarea rows="1">Регулярное плановое посещение стоматологии помогает вовремя выявлять и лечить болезни зубов. Но зубная боль не ждет, пока вы запишетесь на прием к дантисту. Она может прийти внезапно посреди рабочего дня, в ночное время, в выходной. Острая зубная боль труднопереносимая, настолько, что терпеть ее нет сил даже несколько минут, не говоря уже о том, чтобы дождаться утра или наступления понедельника, когда можно, наконец, обратиться за помощью в стоматологию.</textarea>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin__btns admin__btns--one">
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                    <div class="start__tab-area j-tabs-area" id="uk">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Видео отзывы">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <? for($i = 1; $i < 5; $i++) { ?>
                                <div class="accordion">
                                    <div class="accordion__top">
                                        <div class="accordion__top-inner <?= ($i == 1) ? 'active' : ''; ?>" data-toggle="#video<?= $i; ?>">
                                            <div class="accordion__title">
                                                ВИДЕО ОТЗЫВ #<?= $i; ?>
                                            </div>
                                            <div class="accordion__arrow">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__content <?= ($i == 1) ? 'active' : ''; ?>" id="video<?= $i; ?>">
                                        <div class="admin__row">
                                            <div class="admin__col admin__col--img">
                                                <div class="label-img">
                                                    <div class="label-img__img">
                                                        <img src="<?= $target; ?>/img/home/rev3.jpg" alt="">
                                                    </div>
                                                    <div class="label-img__title">
                                                        Видео
                                                    </div>
                                                    <div class="label-img__nav">
                                                        <div class="label-img__delete label-img__link" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                            <svg>
                                                                <use xlink:href="<?= $target; ?>/img/icons.svg#delete"/>
                                                            </svg>
                                                        </div>
                                                        <label class="label-img__edit label-img__link">
                                                            <input type="file">
                                                            <svg>
                                                                <use xlink:href="<?= $target; ?>/img/icons.svg#edit"/>
                                                            </svg>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="admin__col admin__col--img-right">
                                                <label class="label">
                                                    <span class="label__title">
                                                        Заголовок
                                                    </span>
                                                    <span class="input input--small">
                                                        <input type="text" value="Николай">     
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                            <div class="start__inner">
                                <button class="btn btn--border add-btn" type="button">
                                    <svg>
                                        <use xlink:href="<?= $target; ?>/img/icons.svg#plus"/>
                                    </svg>
                                    <span>Добавить видео отзыв</span>
                                </button>
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Кнопка
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Начните сейчас">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Текст
                                            </span>
                                            <span class="input input--small">
                                                <textarea rows="1">Регулярное плановое посещение стоматологии помогает вовремя выявлять и лечить болезни зубов. Но зубная боль не ждет, пока вы запишетесь на прием к дантисту. Она может прийти внезапно посреди рабочего дня, в ночное время, в выходной. Острая зубная боль труднопереносимая, настолько, что терпеть ее нет сил даже несколько минут, не говоря уже о том, чтобы дождаться утра или наступления понедельника, когда можно, наконец, обратиться за помощью в стоматологию.</textarea>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin__btns admin__btns--one">
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                    <div class="start__tab-area j-tabs-area" id="en">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Видео отзывы">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <? for($i = 1; $i < 5; $i++) { ?>
                                <div class="accordion">
                                    <div class="accordion__top">
                                        <div class="accordion__top-inner <?= ($i == 1) ? 'active' : ''; ?>" data-toggle="#video<?= $i; ?>">
                                            <div class="accordion__title">
                                                ВИДЕО ОТЗЫВ #<?= $i; ?>
                                            </div>
                                            <div class="accordion__arrow">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__content <?= ($i == 1) ? 'active' : ''; ?>" id="video<?= $i; ?>">
                                        <div class="admin__row">
                                            <div class="admin__col admin__col--img">
                                                <div class="label-img">
                                                    <div class="label-img__img">
                                                        <img src="<?= $target; ?>/img/home/rev3.jpg" alt="">
                                                    </div>
                                                    <div class="label-img__title">
                                                        Видео
                                                    </div>
                                                    <div class="label-img__nav">
                                                        <div class="label-img__delete label-img__link" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                            <svg>
                                                                <use xlink:href="<?= $target; ?>/img/icons.svg#delete"/>
                                                            </svg>
                                                        </div>
                                                        <label class="label-img__edit label-img__link">
                                                            <input type="file">
                                                            <svg>
                                                                <use xlink:href="<?= $target; ?>/img/icons.svg#edit"/>
                                                            </svg>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="admin__col admin__col--img-right">
                                                <label class="label">
                                                    <span class="label__title">
                                                        Заголовок
                                                    </span>
                                                    <span class="input input--small">
                                                        <input type="text" value="Николай">     
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                            <div class="start__inner">
                                <button class="btn btn--border add-btn" type="button">
                                    <svg>
                                        <use xlink:href="<?= $target; ?>/img/icons.svg#plus"/>
                                    </svg>
                                    <span>Добавить видео отзыв</span>
                                </button>
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Кнопка
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Начните сейчас">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Текст
                                            </span>
                                            <span class="input input--small">
                                                <textarea rows="1">Регулярное плановое посещение стоматологии помогает вовремя выявлять и лечить болезни зубов. Но зубная боль не ждет, пока вы запишетесь на прием к дантисту. Она может прийти внезапно посреди рабочего дня, в ночное время, в выходной. Острая зубная боль труднопереносимая, настолько, что терпеть ее нет сил даже несколько минут, не говоря уже о том, чтобы дождаться утра или наступления понедельника, когда можно, наконец, обратиться за помощью в стоматологию.</textarea>
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin__btns admin__btns--one">
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                <? } ?>

                <!-- Page 7 -->
                <? if($_GET['page'] == 7) { ?>
                    <div class="start__tab-area j-tabs-area" id="ru">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="ОСТАЛИСЬ ВОПРОСЫ ?">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Кнопка
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Отправить">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Поле ввода №1
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Имя и фамилия">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Поле ввода №2
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="__-___-__-__">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Поле ввода №3
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="E-mail">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Поле ввода №4
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Комметарий">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin__btns admin__btns--one">
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                    <div class="start__tab-area j-tabs-area" id="uk">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="ОСТАЛИСЬ ВОПРОСЫ ?">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Кнопка
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Отправить">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Поле ввода №1
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Имя и фамилия">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Поле ввода №2
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="__-___-__-__">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Поле ввода №3
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="E-mail">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Поле ввода №4
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Комметарий">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin__btns admin__btns--one">
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                    <div class="start__tab-area j-tabs-area" id="en">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="ОСТАЛИСЬ ВОПРОСЫ ?">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Кнопка
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Отправить">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Поле ввода №1
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Имя и фамилия">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Поле ввода №2
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="__-___-__-__">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Поле ввода №3
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="E-mail">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <label class="label">
                                            <span class="label__title">
                                                Поле ввода №4
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="Комметарий">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin__btns admin__btns--one">
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                <? } ?>
                
                <!-- Page 8 -->
                <? if($_GET['page'] == 8) { ?>
                    <div class="start__tab-area j-tabs-area" id="ru">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="ПАРУ СЛОВ О НАС">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <div class="label-img">
                                            <div class="label-img__img">
                                                <img src="<?= $target; ?>/img/home/about.jpg" alt="">
                                            </div>
                                            <div class="label-img__title">
                                                Фото
                                            </div>
                                            <div class="label-img__nav">
                                                <div class="label-img__delete label-img__link" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#delete"/>
                                                    </svg>
                                                </div>
                                                <label class="label-img__edit label-img__link">
                                                    <input type="file">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#edit"/>
                                                    </svg>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Текст
                                            </span>
                                            <span class="input input--small">
                                                <textarea rows="1">Регулярное плановое посещение стоматологии помогает вовремя выявлять и лечить болезни зубов. Но зубная боль не ждет, пока вы запишетесь на прием к дантисту. Она может прийти внезапно посреди рабочего дня, в ночное время, в выходной. Острая зубная боль труднопереносимая, настолько, что терпеть ее нет сил даже несколько минут, не говоря уже о том, чтобы дождаться утра или наступления понедельника, когда можно, наконец, обратиться за помощью в стоматологию. В стоматологической клинике  начинает свою работу отделение ургентной терапии. Теперь наши двери открыты 24/7, поэтому и взрослые, и маленькие пациенты могут получить ургентную помощь в любой день недели, в любое время дня и ночи. В отделении неотложной стом помощи есть все необходимое для полноценной диагностики, безболезненного и эффективного лечения – современное оборудование, инструментарий, качественные материалы и медикаменты. .</textarea>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Ссылка
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="ПОКАЗАТЬ ЕЩЕ">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin__btns admin__btns--one">
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                    <div class="start__tab-area j-tabs-area" id="uk">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="ПАРУ СЛОВ О НАС">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <div class="label-img">
                                            <div class="label-img__img">
                                                <img src="<?= $target; ?>/img/home/about.jpg" alt="">
                                            </div>
                                            <div class="label-img__title">
                                                Фото
                                            </div>
                                            <div class="label-img__nav">
                                                <div class="label-img__delete label-img__link" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#delete"/>
                                                    </svg>
                                                </div>
                                                <label class="label-img__edit label-img__link">
                                                    <input type="file">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#edit"/>
                                                    </svg>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Текст
                                            </span>
                                            <span class="input input--small">
                                                <textarea rows="1">Регулярное плановое посещение стоматологии помогает вовремя выявлять и лечить болезни зубов. Но зубная боль не ждет, пока вы запишетесь на прием к дантисту. Она может прийти внезапно посреди рабочего дня, в ночное время, в выходной. Острая зубная боль труднопереносимая, настолько, что терпеть ее нет сил даже несколько минут, не говоря уже о том, чтобы дождаться утра или наступления понедельника, когда можно, наконец, обратиться за помощью в стоматологию. В стоматологической клинике  начинает свою работу отделение ургентной терапии. Теперь наши двери открыты 24/7, поэтому и взрослые, и маленькие пациенты могут получить ургентную помощь в любой день недели, в любое время дня и ночи. В отделении неотложной стом помощи есть все необходимое для полноценной диагностики, безболезненного и эффективного лечения – современное оборудование, инструментарий, качественные материалы и медикаменты. .</textarea>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Ссылка
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="ПОКАЗАТЬ ЕЩЕ">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin__btns admin__btns--one">
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                    <div class="start__tab-area j-tabs-area" id="en">
                        <div class="start__bl">
                            <div class="start__inner">
                                <div class="admin__row">
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Заголовок
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="ПАРУ СЛОВ О НАС">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col">
                                        <div class="label-img">
                                            <div class="label-img__img">
                                                <img src="<?= $target; ?>/img/home/about.jpg" alt="">
                                            </div>
                                            <div class="label-img__title">
                                                Фото
                                            </div>
                                            <div class="label-img__nav">
                                                <div class="label-img__delete label-img__link" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#delete"/>
                                                    </svg>
                                                </div>
                                                <label class="label-img__edit label-img__link">
                                                    <input type="file">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#edit"/>
                                                    </svg>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Текст
                                            </span>
                                            <span class="input input--small">
                                                <textarea rows="1">Регулярное плановое посещение стоматологии помогает вовремя выявлять и лечить болезни зубов. Но зубная боль не ждет, пока вы запишетесь на прием к дантисту. Она может прийти внезапно посреди рабочего дня, в ночное время, в выходной. Острая зубная боль труднопереносимая, настолько, что терпеть ее нет сил даже несколько минут, не говоря уже о том, чтобы дождаться утра или наступления понедельника, когда можно, наконец, обратиться за помощью в стоматологию. В стоматологической клинике  начинает свою работу отделение ургентной терапии. Теперь наши двери открыты 24/7, поэтому и взрослые, и маленькие пациенты могут получить ургентную помощь в любой день недели, в любое время дня и ночи. В отделении неотложной стом помощи есть все необходимое для полноценной диагностики, безболезненного и эффективного лечения – современное оборудование, инструментарий, качественные материалы и медикаменты. .</textarea>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="admin__col admin__col--full">
                                        <label class="label">
                                            <span class="label__title">
                                                Ссылка
                                            </span>
                                            <span class="input input--small">
                                                <input type="text" value="ПОКАЗАТЬ ЕЩЕ">
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="admin__btns admin__btns--one">
                            <button class="btn btn--orange admin__btns-submit" type="submit">
                                Сохранить
                            </button>
                        </div>
                    </div>
                <? } ?>
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