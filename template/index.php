<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");

// Получаем список популярных запросов
$arFilter = array(
    "DATE_HIT_1" => ConvertDateTime(Date("d.m.Y", strtotime("-1 month")), "YYYY-MM-DD"),
    "DATE_HIT_2" => ConvertDateTime(Date("d.m.Y"), "YYYY-MM-DD"),
);

$dbRes = CSearchStatistic::GetList(
    array("RESULT_COUNT" => "DESC"),
    $arFilter,
    false,
    false
);

$uniquePhrases = [];
if ($dbRes) {
    while ($arItem = $dbRes->Fetch()) {
        if (strlen($arItem["PHRASE"]) > 2 && $arItem["RESULT_COUNT"] > 0) {
            if (!isset($uniquePhrases[$arItem["PHRASE"]])) {
                $uniquePhrases[$arItem["PHRASE"]] = $arItem["RESULT_COUNT"];
            } else {
                $uniquePhrases[$arItem["PHRASE"]] += $arItem["RESULT_COUNT"];
            }
        }
    }
}

arsort($uniquePhrases);
$uniquePhrases = array_slice($uniquePhrases, 0, 10, true);

?>

<main>
    <section class="section-breadcrumbs">
        <p><a href="/">Главная</a> / <a href="/search/">Поиск</a></p>
    </section>
    <section class="section-search">
        <div class="row">
            <div class="col articlehdr-container">
                <h2 class="article-header">поиск</h2>
            </div>
        </div>
        <div class="row flex-wrap flex-sm-wrap flex-md-wrap flex-lg-nowrap flex-xl-nowrap flex-xxl-nowrap">
            <div class="col public-article">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:search.page",
                    "forpage",
                    array(
                        "RESTART" => "Y",
                        "CHECK_DATES" => "N",
                        "DEFAULT_SORT" => "rank",
                        "arrFILTER" => array("iblock"),
                        "NUM_CATEGORIES" => "10",
                        "CATEGORY_0_TITLE" => "Товары и услуги",
                        "CATEGORY_0" => array("products"),
                        "CATEGORY_1_TITLE" => "Новости",
                        "CATEGORY_1" => array("news"),
                        "SHOW_WHEN" => "N",
                        "SHOW_WHERE" => "N",
                        "DISPLAY_TOP_PAGER" => "N",
                        "SHOW_ORDER_BY" => "N",
                        "SHOW_TAGS_CLOUD" => "N",
                        "SHOW_ITEM_TAGS" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TEMPLATE" => "catalog",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGE_RESULT_COUNT" => 5,
                        "AJAX_MODE" => "Y",
                        "CACHE_TYPE" => "N",
                    ),
                    false,
                    array("HIDE_ICONS" => "Y")
                );?>
            </div>
            <div class="col flex-wrap flex-sm-wrap flex-md-nowrap flex-lg-nowrap flex-xl-nowrap flex-xxl-nowrap aside-col">
                <!-- Боковая панель из макета -->
                <div id="article-accordion-catalog" class="accordion mb20px" role="tablist">
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button accordion-button__level1" type="button" data-bs-toggle="collapse" data-bs-target="#article-accordion-catalog .item-1" aria-expanded="true" aria-controls="article-accordion-catalog .item-1">КАТАЛОГ</button>
                        </h2>
                        <div class="accordion-collapse collapse show item-1" role="tabpanel" data-bs-parent="#article-accordion-catalog">
                            <div class="accordion-body">
                                <a class="filters-label banner-caps filter-catalog_link" href="#">светодиодные драйверы</a>
                                <a class="filters-label banner-caps filter-catalog_link" href="#">светодиодные модули</a>
                                <a class="filters-label banner-caps filter-catalog_link" href="#">светодиоды COB и SMD</a>
                                <a class="filters-label banner-caps filter-catalog_link" href="#">вторичная оптика</a>
                                <a class="filters-label banner-caps filter-catalog_link" href="#">корпуса для светильников</a>
                                <a class="filters-label banner-caps filter-catalog_link" href="#">расходные материалы</a>
                                <a class="filters-label banner-caps filter-catalog_link" href="#">производство под заказ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="article-accordion-publics" class="accordion" role="tablist">
                    <div class="accordion-item">
                        <h2 class="accordion-header" role="tab">
                            <button class="accordion-button accordion-button__level1" type="button" data-bs-toggle="collapse" data-bs-target="#article-accordion-publics .item-1" aria-expanded="true" aria-controls="article-accordion-publics .item-1"><strong>Публикации</strong></button>
                        </h2>
                        <div class="accordion-collapse collapse show item-1" role="tabpanel" data-bs-parent="#article-accordion-publics">
                            <div class="accordion-body">
                                <a class="filters-label banner-caps filter-catalog_link" href="#">светодиодные драйверы</a>
                                <a class="filters-label banner-caps filter-catalog_link" href="#">светодиодные модули</a>
                                <a class="filters-label banner-caps filter-catalog_link" href="#">светодиоды COB и SMD</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
