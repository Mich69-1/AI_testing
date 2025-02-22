<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
?>
<div class="search-page">
    <div class="search-input-block">
        <button class="btn btn-primary search-start" type="button"></button>
        <form action="" method="get">
            <?if($arParams["USE_SUGGEST"] === "Y"):
                if(mb_strlen($arResult["REQUEST"]["~QUERY"]) && is_object($arResult["NAV_RESULT"])) {
                    $arResult["FILTER_MD5"] = $arResult["NAV_RESULT"]->GetFilterMD5();
                    $obSearchSuggest = new CSearchSuggest($arResult["FILTER_MD5"], $arResult["REQUEST"]["~QUERY"]);
                    $obSearchSuggest->SetResultCount($arResult["NAV_RESULT"]->NavRecordCount);
                }
                ?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:search.suggest.input",
                    "",
                    array(
                        "NAME" => "q",
                        "VALUE" => $arResult["REQUEST"]["~QUERY"],
                        "INPUT_SIZE" => 40,
                        "DROPDOWN_SIZE" => 10,
                        "FILTER_MD5" => $arResult["FILTER_MD5"],
                    ),
                    $component,
                    array("HIDE_ICONS" => "Y")
                );?>
            <?else:?>
                <input class="search-page-input" type="text" name="q" value="<?=$arResult["REQUEST"]["QUERY"]?>" size="40" />
            <?endif;?>
            <input type="hidden" name="how" value="<?echo $arResult["REQUEST"]["HOW"]=="d"? "d": "r"?>" />
        </form>
        <button class="btn btn-primary search-clear" type="button"></button>
    </div>

    <p>Популярные запросы</p>
    <div class="popular-queries">
        <?global $uniquePhrases;?>
        <?foreach($uniquePhrases as $phrase => $count):?>
            <div class="popular-query">
                <p><a href="/search/?q=<?=urlencode($phrase)?>"><?=htmlspecialcharsbx($phrase)?></a> (<?=$count?>)</p>
            </div>
        <?endforeach;?>
    </div>

    <h4>результаты поиска</h4>
    <?if(count($arResult["SEARCH"]) > 0):?>
        <p>Найдено: <?=$arResult["NAV_RESULT"]->NavRecordCount?></p>
        <?if($arParams["DISPLAY_TOP_PAGER"] != "N") echo $arResult["NAV_STRING"]?>
        <?foreach($arResult["SEARCH"] as $arItem):?>
            <div class="search-item-top">
                <a href="<?echo $arItem["URL"]?>"><?echo $arItem["TITLE_FORMATED"]?></a>
            </div>
        <?endforeach;?>
        <?if($arParams["DISPLAY_BOTTOM_PAGER"] != "N") echo $arResult["NAV_STRING"]?>
        <p>
            <?if($arResult["REQUEST"]["HOW"]=="d"):?>
                <a href="<?=$arResult["URL"]?>&how=r<?echo $arResult["REQUEST"]["FROM"]? '&from='.$arResult["REQUEST"]["FROM"]: ''?><?echo $arResult["REQUEST"]["TO"]? '&to='.$arResult["REQUEST"]["TO"]: ''?>"><?=GetMessage("SEARCH_SORT_BY_RANK")?></a> | <b><?=GetMessage("SEARCH_SORTED_BY_DATE")?></b>
            <?else:?>
                <b><?=GetMessage("SEARCH_SORTED_BY_RANK")?></b> | <a href="<?=$arResult["URL"]?>&how=d<?echo $arResult["REQUEST"]["FROM"]? '&from='.$arResult["REQUEST"]["FROM"]: ''?><?echo $arResult["REQUEST"]["TO"]? '&to='.$arResult["REQUEST"]["TO"]: ''?>"><?=GetMessage("SEARCH_SORT_BY_DATE")?></a>
            <?endif;?>
        </p>
    <?else:?>
        <?ShowNote(GetMessage("SEARCH_NOTHING_TO_FOUND"));?>
    <?endif;?>

    <?if(isset($arResult["REQUEST"]["ORIGINAL_QUERY"])):?>
        <div class="search-language-guess">
            <?echo GetMessage("CT_BSP_KEYBOARD_WARNING", array("#query#"=>'<a href="'.$arResult["ORIGINAL_QUERY_URL"].'">'.$arResult["REQUEST"]["ORIGINAL_QUERY"].'</a>'))?>
        </div>
    <?endif;?>

    <?if($arResult["ERROR_CODE"]!=0):?>
        <p><?=GetMessage("SEARCH_ERROR")?></p>
        <?ShowError($arResult["ERROR_TEXT"]);?>
        <p><?=GetMessage("SEARCH_CORRECT_AND_CONTINUE")?></p>
    <?endif;?>
</div>
