<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");
?>

<?$APPLICATION->IncludeComponent("bitrix:search.page", "forpage", array(
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
    "CACHE_TYPE" => "N", // Отключаем кэширование
	),
	false
);?>

<?php
// Получаем список популярных запросов
$arFilter = array(
  "DATE_HIT_1" => ConvertDateTime(Date("d.m.Y", strtotime("-1 month")), "YYYY-MM-DD"),
  "DATE_HIT_2" => ConvertDateTime(Date("d.m.Y"), "YYYY-MM-DD"),
);

$dbRes = CSearchStatistic::GetList(
  array("RESULT_COUNT" => "DESC"), // Сортировка по количеству запросов (по убыванию)
  $arFilter,
  false,
  false // Убираем ограничение на количество, чтобы обработать все записи
);

$uniquePhrases = [];
if ($dbRes) {
  while ($arItem = $dbRes->Fetch()) {
      // Проверяем, что длина фразы больше двух символов и количество результатов больше 0
      if (strlen($arItem["PHRASE"]) > 2 && $arItem["RESULT_COUNT"] > 0) {
          // Добавляем фразу в массив, если ее там еще нет
          if (!isset($uniquePhrases[$arItem["PHRASE"]])) {
              $uniquePhrases[$arItem["PHRASE"]] = $arItem["RESULT_COUNT"];
          } else {
              // Если фраза уже есть, увеличиваем счетчик
              $uniquePhrases[$arItem["PHRASE"]] += $arItem["RESULT_COUNT"];
          }
      }
  }
}

// Сортируем уникальные фразы по количеству результатов
arsort($uniquePhrases);

// Ограничиваем вывод до 10 самых популярных фраз
$uniquePhrases = array_slice($uniquePhrases, 0, 10, true);

echo "<ul>";
foreach ($uniquePhrases as $phrase => $count) {
  echo '<li><a href="/search/?q=' . urlencode($phrase) . '">' . htmlspecialcharsbx($phrase) . '</a> (' . $count . ')</li>';
}
echo "</ul>";
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>