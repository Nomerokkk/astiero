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
                            Документы
                        </li>
                    </ul>
                </div>
                <div class="panel__top">
                    <div class="title-overflow">
                        <h1 class="title j-wow j-wow-up">
                            ДОкументы
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
                        <img src="<?= $target; ?>/img/documents/not.svg" alt="">
                    </div>
                    <div class="panel__not-title">
                        у вас пока нет документов
                    </div>
                    <div class="panel__not-btn">
                        <button type="button" class="btn btn--orange" data-fancybox data-src="#new-document">
                            <svg>
                                <use xlink:href="<?= $target; ?>/img/icons.svg#plus"/>
                            </svg>
                            Добавить документ
                        </button>
                    </div>
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
    
    <div class="newdoc" id="done-document">
        <form class="newdoc__inner">
            <div class="newdoc__top">
                <div class="newdoc__tooltip">
                    ?
                    <div class="newdoc__tooltip-text">Чтобы отредактировать текст - нажмите на область</div>
                </div>
                <div class="newdoc__top-input input">
                    <input class="j-input-document" type="text" placeholder="Название документа">
                </div>
                <div class="newdoc__nav j-document-nav">
                    <button class="newdoc__btn btn btn--orange j-document-btn" type="submit">
                        Сохранить
                    </button>
                </div>
            </div> 
            <div class="newdoc__textarea input">
                <textarea class="j-input-document" placeholder="Текст документа">Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 

Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 

Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 
Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются.

Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 

Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 

Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 
Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются.

Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 

Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 

Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 
Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются.

Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 

Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 

Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 
Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются.

Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 

Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 

Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 
Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются.

Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 

Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 

Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 
Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются.

Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 

Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 

Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются. 
Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются.
</textarea>
            </div> 
            <div class="newdoc__nav j-document-nav newdoc__nav--bottom">
                <button class="newdoc__btn btn btn--orange j-document-btn" type="submit">
                    Сохранить
                </button>
                <div class="sort newdoc__sort">
                    <div class="sort__title">
                        Порядок
                    </div>
                    <div class="input">
                        <input type="number" min="1" value="1" data-required>
                    </div>
                </div>
            </div>
        </form>  
    </div>

    <div class="newdoc" id="new-document">
        <form class="newdoc__inner">
            <div class="newdoc__top">
                <div class="newdoc__tooltip">
                    ?
                    <div class="newdoc__tooltip-text">Чтобы отредактировать текст - нажмите на область</div>
                </div>
                <div class="newdoc__top-input input">
                    <input class="j-input-document" type="text" placeholder="Название документа">
                </div>
                <div class="newdoc__nav j-document-nav">
                    <button class="newdoc__btn btn btn--orange j-document-btn" type="submit">
                        Сохранить
                    </button>
                </div>
            </div> 
            <div class="newdoc__textarea input">
                <textarea class="j-input-document" placeholder="Текст документа"></textarea>
            </div> 
            <div class="newdoc__nav j-document-nav newdoc__nav--bottom">
                <button class="newdoc__btn btn btn--orange j-document-btn" type="submit">
                    Сохранить
                </button>
                <div class="sort newdoc__sort">
                    <div class="sort__title">
                        Порядок
                    </div>
                    <div class="input">
                        <input type="number" min="1" value="1" data-required>
                    </div>
                </div>
            </div>
        </form>  
    </div>

<? include '../templates/footer.php'; ?>