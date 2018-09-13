<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

include_once dirname(__FILE__) . '/popups.php';

$arResult['FORM_NAME'] = html_entity_decode($arParams['FORM_NAME']);

//Возможность получить личензионное соглашение
//if($arParams['POLICY'] === 'Y') {
//    $arSelect = Array("ID", "NAME", "PROPERTY_FILE", "PROPERTY_NAME_ON_FORM");
//    $arFilter = Array("IBLOCK_ID" => IBLOCK_ID_DOCUMENTS, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "PROPERTY_SHOW_ON_FORM_VALUE" => "Y");
//    $arDocuments = CIBlockElement::GetList(Array("SORT" => "ASC"), $arFilter, false, Array("nPageSize" => 99999), $arSelect);
//
//    while($obDocument = $arDocuments->GetNextElement())
//    {
//        $document = $obDocument->GetFields();
//        $file = CFile::GetFileArray($document['PROPERTY_FILE_VALUE']);
//        $filename = isset($document['PROPERTY_NAME_ON_FORM_VALUE']) ? $document['PROPERTY_NAME_ON_FORM_VALUE'] : $document['NAME'];
//
//        $arResult['POLICY'] = array(
//            'LINK' => $file['SRC'],
//            'NAME' => $filename,
//            'TEXT' => !empty($arParams['POLICY_TEXT']) ? $arParams['POLICY_TEXT'] : "Политика в отношении обработки персональных данных"
//        );
//    }
//}

$this->IncludeComponentTemplate();

