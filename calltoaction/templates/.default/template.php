<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->addExternalJS("https://code.jquery.com/jquery-3.3.1.min.js");
$this->addExternalJS("/local/templates/lundenilona/static/js/inputmask.js");
$this->addExternalJS("/local/components/awg/calltoaction/script.js");
?>

<section class="contacts">
    <section class="contacts__part">
        <h3 class="contacts__subtitle">Офис в Москве</h3>
        <div class="contacts__item">
            <div class="contacts__label">График работы:</div>
            <div class="contacts__value">Понедельник - воскресенье <br class="media_mobile media_tablet">с 9:00 до 19:00</div>
        </div>
        <div class="contacts__item">
            <div class="contacts__label">Оформление заказов и подбор продукции:</div>
            <div class="contacts__value"><a href="tel:+78001002143">8 (800) 100 21 43</a></div>
        </div>
        <div class="contacts__item">
            <div class="contacts__label">Главный офис: </div>
            <div class="contacts__value"><a href="tel:+74957844847">8 (495) 784 48 47</a></div>
        </div>
        <div class="contacts__item">
            <div class="contacts__label">E-mail: </div>
            <div class="contacts__value"><a href="mailto:mail@lundenilona.ru">mail@lundenilona.ru</a></div>
        </div>
        <div class="contacts__item">
            <div class="contacts__label">WhatsApp, VIBER, Telegram: </div>
            <div class="contacts__value"><a href="tel:+74957844847">8 (495) 784 48 47</a></div>
        </div>
        <div class="contacts__item">
            <div class="contacts__label">Мы в социальных сетях: </div>
            <div class="contacts__value contacts__value_social">
                <div class="social"><a class="social__item" href="javascript:void(0);">
                        <svg width="11" height="21">
                            <use xlink:href="#facebook"></use>
                        </svg></a><a class="social__item" href="javascript:void(0);">
                        <svg width="23" height="13">
                            <use xlink:href="#vk"></use>
                        </svg></a><a class="social__item" href="javascript:void(0);">
                        <svg width="18" height="18">
                            <use xlink:href="#instagram"></use>
                        </svg></a></div>
            </div>
        </div>
        <div class="contacts__item">
            <div class="contacts__label">Реквизиты: </div>
            <div class="contacts__value contacts__value_grey">ООО "ОРГАНИК КОСМЕТИКС" 123182, г.Москва, ул.Маршала Василевского, д.17, п.II, к.11. ИНН 7734392393 КПП 773401001 ОГРН 1147746715291 АО Тинькофф Банк р/с 40702810510000132215 к/с 30101810145250000974 БИК 044525974</div>
        </div>
    </section>
    <section class="contacts__part">
        <h3 class="contacts__subtitle">
            Остались вопросы?<br>
            Напишите нам:
        </h3>
        <form class="contacts__form js--checkup-call-to-action-form" action="#" name="<?= $form_name; ?>" >
            <input type="hidden" name="WEB_FORM_ID" value="<?=$arParams['WEB_FORM_ID']; ?>" />
            <div class="contacts__input">
                <div class="input">
                    <input class="input__input" type="text" id="name" name="name" placeholder="Имя"/>
                    <label class="input__label" for="name">Имя</label>
                </div>
            </div>
            <div class="contacts__input">
                <div class="input">
                    <input class="input__input phone" type="text" id="phone" name="phone" placeholder="Телефон"/>
                    <label class="input__label" for="phone">Телефон</label>
                </div>
            </div>
            <div class="contacts__input">
                <div class="input">
                    <textarea class="input__input" name="message" id="message" rows="1" placeholder="Сообщение"></textarea>
                    <label class="input__label" for="message">Сообщение</label>
                </div>
            </div>
            <div class="contacts__button">
                <button class="button" type="submit" disabled>отправить сообщение</button>
            </div>
        </form>
    </section>
</section>