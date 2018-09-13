# bitrix-calltoaction
Компонент обратного звонка. Работает со встроенным механизмом веб-форм битрикса.

Код для вызова компонента:

<?$APPLICATION->IncludeComponent("yushkov:calltoaction", "", Array(
        "WEB_FORM_ID" => "contacts_form", //ID веб-формы созданной в битриксе
        "FORM_NAME" => "contacts_form" //Имя формы на странице
    )
);?>