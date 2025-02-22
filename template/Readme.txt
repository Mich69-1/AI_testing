Есть файл страницы поиска Bitrix - index.php и файл шаблона поисковой выдачи template.php. Также есть файл public_search.html, который является макетом страницы поиска.
Группа элементов 
<div class="search-input-block">
  <button class="btn btn-primary search-start" type="button"></button>
  <input class="search-page-input" type="text" name="q" size="40" />
  <button class="btn btn-primary search-clear" type="button"></button>
</div>
Служит для работы с поисковой строкой.
Группа элементов
<div class="popular-queries">
    <div class="popular-query">
        <p>Paragraph</p>
    </div>
    <div class="popular-query">
        <p>Paragraph</p>
    </div>
</div>
Служит для вывода популярных запросов ($uniquePhrases в index.php)
Элемент <p>Найдено: 6</p> служит для вывода количества найденных строк.
Ниже этого элемента выводится собственно выдача поиска (фрагмент template.php)
<div class = "search-item-top">
   <a href="<?echo $arItem["URL"]?>"><?echo $arItem["TITLE_FORMATED"]?></a>
</div> 
Задача - изменить index.php и template.php в соответствии с макетом public_search.html. Собственно выдача в макете не показана, но она остается как в template.php, просто нужно ее поместить в указанное место.
