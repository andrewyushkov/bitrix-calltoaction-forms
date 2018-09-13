<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

if (empty($_POST["name"]) or strlen($_POST["name"]) < 2)
    $json["error"][] = "name can not be empty";

if (empty($_POST["phone"]) or strlen(preg_replace("/[^0-9]/", '', $_POST["phone"]))  < 10)
    $json["error"][] = "phone can not be empty";

if (empty($_POST["message"]) or strlen($_POST["message"]) < 2)
    $json["error"][] = "name can not be empty";

if (empty($json["error"])) {
    if (!empty($_POST["WEB_FORM_ID"])) {
        CModule::IncludeModule("form");

        $rsForm = CForm::GetBySID($_POST["WEB_FORM_ID"]);
        $arForm = $rsForm->Fetch();
        $f_id = $arForm['ID'];

        CForm::GetDataByID($f_id,
            $form,
            $questions,
            $answers,
            $dropdown,
            $multiselect);

        $arValues = array();
        foreach ($answers as $key => $answer) {
            $item = $answer[0];
            $code = 'form_' . $item['FIELD_TYPE'] . '_' . $item['ID'];
            switch ($key) {
                case 'NAME':
                    $arValues[$code] = $_POST["name"];
                    break;
                case 'PHONE':
                    $arValues[$code] = $_POST["phone"];
                    break;
                case 'TEXT':
                    $arValues[$code] = $_POST["message"];
                    break;
            }
        }
//        $json["error"][] = $arForm;
        if ($form_res = CFormResult::Add($f_id, $arValues, 'N')) {
            CFormResult::Mail($form_res);
            $json["success"][] = "1";
        }else{
            $json["error"][] = "Ошибка при отправке, попробуйте позднее.";
        }
    }


}

print_r(json_encode($json));
