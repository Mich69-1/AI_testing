<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class=""><!-- container catalogContainer -->
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<!--  begin -->
<section class="section-breadcrumbs">
            <p><a href="/">Главная</a>&nbsp;/&nbsp;<a href="#">Светодиодные драйверы</a></p>
        </section>
        <section class="section-catalog">
            <div class="row">
                <div class="col section-headercont">
                    <h2>Светодиодные драйверы&nbsp;<span>18 товаров</span><br></h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2">
                <div class="col" id="catalog-filters">
                    <div class="accordion" role="tablist" id="catalog-accordion-filters">
                        <div class="accordion-item">
                            <h2 class="accordion-header" role="tab"><button class="accordion-button accordion-button__level1" type="button" data-bs-toggle="collapse" data-bs-target="#catalog-accordion-filters .item-1" aria-expanded="true" aria-controls="catalog-accordion-filters .item-1">ФИЛЬТРЫ</button></h2>
                            <div class="accordion-collapse collapse show item-1" role="tabpanel">
                                <div class="accordion-body">
                                    <form>
                                        <div class="accordion" role="tablist" id="accordion-1">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" role="tab"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-1" aria-expanded="true" aria-controls="accordion-1 .item-1">Гальваническая развязка</button></h2>
                                                <div class="accordion-collapse collapse show item-1" role="tabpanel">
                                                    <div class="accordion-body">
                                                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="halvanic" checked="" value="Есть"><label class="form-check-label filters-label" for="formCheck-1">Да</label></div>
                                                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2" name="halvanic" value="Нет"><label class="form-check-label filters-label" for="formCheck-2">Нет</label></div>
                                                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-8" name="halvanic" value="Any" checked=""><label class="form-check-label filters-label" for="formCheck-8">Не важно</label></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" role="tab"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-2" aria-expanded="true" aria-controls="accordion-1 .item-2">Материал корпуса</button></h2>
                                                <div class="accordion-collapse collapse show item-2" role="tabpanel">
                                                    <div class="accordion-body">
                                                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="material" value="Металл"><label class="form-check-label filters-label" for="formCheck-3">Металл</label></div>
                                                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-4" name="material" value="Пластик"><label class="form-check-label filters-label" for="formCheck-4">Пластик</label></div>
                                                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-9" name="material" value="Металл/пластик"><label class="form-check-label filters-label" for="formCheck-9">Металл/пластик</label></div>
                                                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-11" name="material" value="Любой" checked=""><label class="form-check-label filters-label" for="formCheck-11">Любой</label></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" role="tab"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-3" aria-expanded="true" aria-controls="accordion-1 .item-3">Степень защиты корпуса</button></h2>
                                                <div class="accordion-collapse collapse show item-3" role="tabpanel">
                                                    <div class="accordion-body">
                                                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-5" name="protect" value="IP 20"><label class="form-check-label filters-label" for="formCheck-5">IP 20</label></div>
                                                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-6" name="protect" value="IP 30"><label class="form-check-label filters-label" for="formCheck-6">IP 30</label></div>
                                                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-7" name="protect" value="IP 65"><label class="form-check-label filters-label" for="formCheck-7">IP 65</label></div>
                                                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-10" name="protect" value="Любая" checked=""><label class="form-check-label filters-label" for="formCheck-10">Любая</label></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" role="tab"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-4" aria-expanded="true" aria-controls="accordion-1 .item-4">Min выходная мощность, W</button></h2>
                                                <div class="accordion-collapse collapse show item-4" role="tabpanel">
                                                    <div class="accordion-body">
                                                        <div id="slider-outpower" class="slider_container">
                                                            <div class="sl2_values"><input class="form-control input_left" type="number" id="power_low_min"><input class="form-control input_right" type="number" id="power_low_max"></div>
                                                            <div class="slider_small"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" role="tab"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-5" aria-expanded="true" aria-controls="accordion-1 .item-5">Max выходная мощность, W</button></h2>
                                                <div class="accordion-collapse collapse show item-5" role="tabpanel">
                                                    <div class="accordion-body">
                                                        <div id="slider-outcurrent" class="slider_container">
                                                            <div class="sl2_values"><input class="form-control input_left" type="number" id="power_hi_min"><input class="form-control input_right" type="number" id="power_hi_max"></div>
                                                            <div class="slider_small"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><button class="btn btn-primary btn-mlt btn-mlt__filter" type="button" onclick="window.location.reload();">Сбросить фильтры</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion" role="tablist" id="catalog-accordion-catalog">
                        <div class="accordion-item">
                            <h2 class="accordion-header" role="tab"><button class="accordion-button accordion-button__level1" type="button" data-bs-toggle="collapse" data-bs-target="#catalog-accordion-catalog .item-1" aria-expanded="true" aria-controls="catalog-accordion-catalog .item-1">КАТАЛОГ</button></h2>
                            <div class="accordion-collapse collapse show item-1" role="tabpanel" data-bs-parent="#catalog-accordion-catalog">
                                <div class="accordion-body"><a class="filters-label banner-caps filter-catalog_link" href="#">светодиодные драйверы</a><a class="filters-label banner-caps filter-catalog_link" href="#">светодиодные модули</a><a class="filters-label banner-caps filter-catalog_link" href="#">светодиоды COB и SMD</a><a class="filters-label banner-caps filter-catalog_link" href="#">вторичная оптика</a><a class="filters-label banner-caps filter-catalog_link" href="#">корпуса для светильников</a><a class="filters-label banner-caps filter-catalog_link" href="#">расходные материалы</a><a class="filters-label banner-caps filter-catalog_link" href="#">производство под заказ</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col columns-3">
                    <div class="container" id="catalog-header">
                        <div class="catalog-options"><select id="catalog_dtaprice-sort" class="options-select">
                                <option value="1" selected="">Новинки</option>
                                <option value="2">Дороже</option>
                                <option value="3">Дешевле</option>
                            </select>
                            <div class="catalog-viewtoggle"><a id="switch-to-table" class="catalog-table_on" href="javascript:void(0);"></a><a id="switch-to-cards" href="javascript:void(0);"></a></div>
                        </div>
                    </div>
                    <div class="container catalog-table-class">
                        <div id="sort-line" class="sort-controls">
                            <div class="sortline_spacer"></div><a class="sort-power" href="#">Вых. мощность, W</a><a class="sort-current" href="#">Вых. ток, mA</a><a class="sort-voltage" href="#">Вых. напряж., V<br></a><a class="sort-protection" href="#">Степень защиты<br></a><a class="sort-warranty" href="#">Гарантия</a><a class="sort-price" href="#">Цена с НДС</a>
                        </div>
                        <div id="cards-view" style="display: none;">
                            <div id="catalog-content-cards">
                                <div class="shopping-card">
                                    <div class="fixheight_contaner"><img class="shopping-card-image" src="assets/img/PSG40-350-IP65E%20new%201.png"></div>
                                    <div class="shopping-card-prodgroup">
                                        <p>Светодиодный драйвер</p>
                                    </div>
                                    <div class="shopping-card-prodname">
                                        <h4 class="banner-caps"><strong>MLT-PSG40-350-IP65e</strong><br></h4>
                                    </div><a class="shopping-card-link" href="#"></a>
                                    <div class="shopping-card-pricebuy">
                                        <p><strong>От 467 ₽&nbsp;</strong></p><button class="btn btn-primary btn-mlt btn-mlt_small" type="button">Купить</button>
                                    </div>
                                </div>
                                <div class="shopping-card">
                                    <div class="fixheight_contaner"><img class="shopping-card-image" src="assets/img/MLT-PSG100-700-IP65.png"></div>
                                    <div class="shopping-card-prodgroup">
                                        <p>Светодиодный драйвер</p>
                                    </div>
                                    <div class="shopping-card-prodname">
                                        <h4 class="banner-caps">MLT-PSG100-700-IP65<br></h4>
                                    </div>
                                    <div class="shopping-card-pricebuy">
                                        <p><strong>От 907 ₽&nbsp;</strong></p><button class="btn btn-primary btn-mlt btn-mlt_small" type="button">Купить</button>
                                    </div>
                                </div>
                                <div class="shopping-card">
                                    <div class="fixheight_contaner"><img class="shopping-card-image" src="assets/img/PSG40-350-IP65E%20new%201.png"></div>
                                    <div class="shopping-card-prodgroup">
                                        <p>Светодиодный драйвер</p>
                                    </div>
                                    <div class="shopping-card-prodname">
                                        <h4 class="banner-caps"><strong>MLT-PSG40-350-IP65e</strong><br></h4>
                                    </div>
                                    <div class="shopping-card-pricebuy">
                                        <p><strong>От 467 ₽&nbsp;</strong></p><button class="btn btn-primary btn-mlt btn-mlt_small" type="button">Купить</button>
                                    </div>
                                </div>
                                <div class="shopping-card">
                                    <div class="fixheight_contaner"><img class="shopping-card-image" src="assets/img/PSG40-350-IP65E%20new%201.png"></div>
                                    <div class="shopping-card-prodgroup">
                                        <p>Светодиодный драйвер</p>
                                    </div>
                                    <div class="shopping-card-prodname">
                                        <h4 class="banner-caps"><strong>MLT-PSG40-350-IP65e</strong><br></h4>
                                    </div>
                                    <div class="shopping-card-pricebuy">
                                        <p><strong>От 467 ₽&nbsp;</strong></p><button class="btn btn-primary btn-mlt btn-mlt_small" type="button">Купить</button>
                                    </div>
                                </div>
                                <div class="shopping-card">
                                    <div class="fixheight_contaner"><img class="shopping-card-image" src="assets/img/PSG40-350-IP65E%20new%201.png"></div>
                                    <div class="shopping-card-prodgroup">
                                        <p>Светодиодный драйвер</p>
                                    </div>
                                    <div class="shopping-card-prodname">
                                        <h4 class="banner-caps"><strong>MLT-PSG40-350-IP65e</strong><br></h4>
                                    </div>
                                    <div class="shopping-card-pricebuy">
                                        <p><strong>От 467 ₽&nbsp;</strong></p><button class="btn btn-primary btn-mlt btn-mlt_small" type="button">Купить</button>
                                    </div>
                                </div>
                                <div class="shopping-card">
                                    <div class="fixheight_contaner"><img class="shopping-card-image" src="assets/img/PSG40-350-IP65E%20new%201.png"></div>
                                    <div class="shopping-card-prodgroup">
                                        <p>Светодиодный драйвер</p>
                                    </div>
                                    <div class="shopping-card-prodname">
                                        <h4 class="banner-caps"><strong>MLT-PSG40-350-IP65e</strong><br></h4>
                                    </div>
                                    <div class="shopping-card-pricebuy">
                                        <p><strong>От 467 ₽&nbsp;</strong></p><button class="btn btn-primary btn-mlt btn-mlt_small" type="button">Купить</button>
                                    </div>
                                </div>
                                <div class="shopping-card">
                                    <div class="fixheight_contaner"><img class="shopping-card-image" src="assets/img/PSG40-350-IP65E%20new%201.png"></div>
                                    <div class="shopping-card-prodgroup">
                                        <p>Светодиодный драйвер</p>
                                    </div>
                                    <div class="shopping-card-prodname">
                                        <h4 class="banner-caps"><strong>MLT-PSG40-350-IP65e</strong><br></h4>
                                    </div>
                                    <div class="shopping-card-pricebuy">
                                        <p><strong>От 467 ₽&nbsp;</strong></p><button class="btn btn-primary btn-mlt btn-mlt_small" type="button">Купить</button>
                                    </div>
                                </div>
                                <div class="shopping-card">
                                    <div class="fixheight_contaner"><img class="shopping-card-image" src="assets/img/PSG40-350-IP65E%20new%201.png"></div>
                                    <div class="shopping-card-prodgroup">
                                        <p>Светодиодный драйвер</p>
                                    </div>
                                    <div class="shopping-card-prodname">
                                        <h4 class="banner-caps"><strong>MLT-PSG40-350-IP65e</strong><br></h4>
                                    </div>
                                    <div class="shopping-card-pricebuy">
                                        <p><strong>От 467 ₽&nbsp;</strong></p><button class="btn btn-primary btn-mlt btn-mlt_small" type="button">Купить</button>
                                    </div>
                                </div>
                                <div class="shopping-card">
                                    <div class="fixheight_contaner"><img class="shopping-card-image" src="assets/img/PSG40-350-IP65E%20new%201.png"></div>
                                    <div class="shopping-card-prodgroup">
                                        <p>Светодиодный драйвер</p>
                                    </div>
                                    <div class="shopping-card-prodname">
                                        <h4 class="banner-caps"><strong>MLT-PSG40-350-IP65e</strong><br></h4>
                                    </div>
                                    <div class="shopping-card-pricebuy">
                                        <p><strong>От 467 ₽&nbsp;</strong></p><button class="btn btn-primary btn-mlt btn-mlt_small" type="button">Купить</button>
                                    </div>
                                </div>
                            </div>
                            <nav class="catalog-paginator">
                                <ul class="pagination" id="paginator-drivers-cards">
                                    <li class="page-item"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                </ul>
                            </nav>
                        </div>
                        <div id="table-view">
                            <div id="catalog-content-table"><a class="catalog_row_url" href="#">
                                    <div class="catalog-row">
                                        <div class="prod-image"><img src="assets/img/MLT-PSG80-700-IP65.png"></div>
                                        <div class="prod-name">
                                            <p><strong>MLT-PSG80-700-IP65</strong></p>
                                            <p>В наличии</p>
                                        </div>
                                        <div class="prod-power">
                                            <p>50-80</p>
                                        </div>
                                        <div class="prod-current">
                                            <p>700</p>
                                        </div>
                                        <div class="prod-voltage">
                                            <p>72-115</p>
                                        </div>
                                        <div class="prod-protect">
                                            <p>IP 65</p>
                                        </div>
                                        <div class="prod-wtime">
                                            <p>5 лет</p>
                                        </div>
                                        <div class="prod-price">
                                            <p>От 875 ₽</p>
                                        </div>
                                    </div>
                                </a><a class="catalog_row_url" href="#">
                                    <div class="catalog-row">
                                        <div class="prod-image"><img src="assets/img/PSG40-350-IP65E%20new%201.png"></div>
                                        <div class="prod-name not-exist">
                                            <p><strong>MLT-PSG80-700-IP65</strong></p>
                                            <p>Нет в наличии</p>
                                        </div>
                                        <div class="prod-power">
                                            <p>50-80</p>
                                        </div>
                                        <div class="prod-current">
                                            <p>700</p>
                                        </div>
                                        <div class="prod-voltage">
                                            <p>72-115</p>
                                        </div>
                                        <div class="prod-protect">
                                            <p>IP 65</p>
                                        </div>
                                        <div class="prod-wtime">
                                            <p>5 лет</p>
                                        </div>
                                        <div class="prod-price">
                                            <p>От 875 ₽</p>
                                        </div>
                                    </div>
                                </a><a class="catalog_row_url" href="#">
                                    <div class="catalog-row">
                                        <div class="prod-image"><img src="assets/img/MLT-PS50-350-IP20ET%201.png"></div>
                                        <div class="prod-name">
                                            <p><strong>MLT-PSG80-700-IP65</strong></p>
                                            <p>В наличии</p>
                                        </div>
                                        <div class="prod-power">
                                            <p>50-80</p>
                                        </div>
                                        <div class="prod-current">
                                            <p>700</p>
                                        </div>
                                        <div class="prod-voltage">
                                            <p>72-115</p>
                                        </div>
                                        <div class="prod-protect">
                                            <p>IP 65</p>
                                        </div>
                                        <div class="prod-wtime">
                                            <p>5 лет</p>
                                        </div>
                                        <div class="prod-price">
                                            <p>От 875 ₽</p>
                                        </div>
                                    </div>
                                </a></div>
                            <nav class="catalog-paginator">
                                <ul class="pagination" id="paginator-drivers">
                                    <li class="page-item"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="container" id="catalog-footer">
                        <div class="catalog-text">
                            <h4><strong>купить светодиодные драйверы в спб от производителя</strong></h4>
                            <p>В нынешние времена появляется все больше вариантов осветительных устройств и&nbsp;техники. Потребность в&nbsp;простых в&nbsp;установке и&nbsp;эксплуатации модулях возникает гораздо чаще. Практика показывает, что led-технологии более перспективны.<br></p>
                            <p>Светодиодный led-модуль&nbsp;современен и&nbsp;универсален. Модули герметичные, не&nbsp;содержат ртути, тяжелых металлов или вредных газов и&nbsp;подлежат вторичной переработке. Еще один показатель качества&nbsp;— это пульсация. Пульсация светового потока светодиодов не&nbsp;значительна.&nbsp;Светодиодные модули&nbsp;выпускаются разнообразным характеристиками: размер, форма, диапазон мощностей. Мощные светодиодные устройства применяются для освещения улиц, для помещений&nbsp;же&nbsp;используются модули с&nbsp;меньшей яркостью.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- end -->
 <? /*
<div class="filterBlock">
  <div class="filters">
  <div class="links-container">
  <div class="links-block">
    <h2>Каталог</h2>
    <div class="link-item">
      <a href="/products/4/">Светодиодные драйверы</a>
      <span class="arrow">
		<svg class="icon">
          <use xlink:href="#arrow--left"></use>
        </svg>
</span>
    </div>
    <div class="link-item">
      <a href="/products/2/">Светодиодные модули</a>
      <span class="arrow">		<svg class="icon">
          <use xlink:href="#arrow--left"></use>
        </svg></span>
    </div>
    <div class="link-item">
      <a href="/products/3/">Вторичная оптика</a>
      <span class="arrow">		<svg class="icon">
          <use xlink:href="#arrow--left"></use>
        </svg></span>
    </div>
  </div>
  <div class="links-block">
    <h2>Публикации</h2>
    <div class="link-item">
      <a href="/products/4/">Светодиодные драйверы</a>
      <span class="arrow">		<svg class="icon">
          <use xlink:href="#arrow--left"></use>
        </svg></span>
    </div>
    <div class="link-item">
      <a href="#">Светодиодные модули</a>
      <span class="arrow">		<svg class="icon">
          <use xlink:href="#arrow--left"></use>
        </svg></span>
    </div>
    <div class="link-item">
      <a href="#">Вторичная оптика</a>
      <span class="arrow">		<svg class="icon">
          <use xlink:href="#arrow--left"></use>
        </svg></span>
    </div>
  </div>
  </div>
   </div>
</div> */?>
<? /*
<div class="itemsBlock">
	<div class="goodsBlock"> */?>
<?
// Генерация массива для передачи данных во фронтенд
$jsData = [];
foreach ($arResult["ITEMS"] as $item) {
    $jsItem = [
        'name' => $item['NAME'] ?? '',
        'url' => $item['DETAIL_PAGE_URL'] ?? '',
        'previewPicture' => $item['PREVIEW_PICTURE']['SRC'] ?? null,
        'image' => $item['DETAIL_PICTURE']['SRC'] ?? null,
        
        // Числовые значения
        'price' => (float)($item['PROPERTIES']['PRICE']['VALUE'][0] ?? 0),
        'exist' => ($item['PROPERTIES']['EXIST']['VALUE'] ?? 'Нет') == 'Да',
        
        // Характеристики мощности
        'power_low' => (float)($item['PROPERTIES']['P_EX']['VALUE'][0] ?? 0),
        'power_hi' => (float)($item['PROPERTIES']['P_EX']['VALUE'][1] ?? 0),
        
        // Рабочее напряжение
        'voltage_lo' => (float)($item['PROPERTIES']['V_EX']['VALUE'][0] ?? 0),
        'voltage_hi' => (float)($item['PROPERTIES']['V_EX']['VALUE'][1] ?? 0),
        
        // Текстовые параметры
        'warranty' => $item['PROPERTIES']['GARANTEE']['VALUE'] ?? 'нет данных',
        'categoryName' => $item['PROPERTIES']['CATEGORY_NAME']['VALUE'][0] ?? '',
        'current' => $item['PROPERTIES']['OUT_CURRENT']['VALUE'] ?? "",
        'material' => $item['PROPERTIES']['MATERIAL']['VALUE'] ?? '',
        'halv_unl' => $item['PROPERTIES']['HALV_UNL']['VALUE'] ?? '',
        // IP-класс защиты
        'protect' => $item['PROPERTIES']['IP']['VALUE'] ?? ''
    ];

    $jsData[] = $jsItem;
}
?>

<script>
  window.productData = <?= 
      json_encode(
          $jsData, 
          JSON_UNESCAPED_UNICODE |  // Главный флаг для русского текста
          JSON_UNESCAPED_SLASHES |  // Не экранировать слеши
          JSON_PRETTY_PRINT         // Для красивого форматирования (опционально)
      ) 
  ?>;
</script>

<? /*
foreach($arResult["ITEMS"] as $cell=>$arElement):
	$width = 0;
	$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CATALOG_ELEMENT_DELETE_CONFIRM')));
?>
<div class="catalogItem" id="<?=$this->GetEditAreaId($arElement['ID']);?>">
<?
	if(is_array($arElement["PREVIEW_PICTURE"])):
		$width = $arElement["PREVIEW_PICTURE"]["WIDTH"];
?>
	<div class="catalogItemImage">
		<a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><img src="<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arElement["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arElement["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arElement["NAME"]?>" title="<?=$arElement["NAME"]?>" /></a>
	</div>
<?
	elseif(is_array($arElement["DETAIL_PICTURE"])):
		$width = $arElement["DETAIL_PICTURE"]["WIDTH"];
?>
	<div class="catalogItemImage">
		<a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><img src="<?=$arElement["DETAIL_PICTURE"]["SRC"]?>" width="<?=$arElement["DETAIL_PICTURE"]["WIDTH"]?>" height="<?=$arElement["DETAIL_PICTURE"]["HEIGHT"]?>" alt="<?=$arElement["NAME"]?>" title="<?=$arElement["NAME"]?>" /></a>
	</div>
<?
	endif;
?>
	<div class="catalogItemTitle"><a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><?=$arElement["NAME"]?></a></div>

	<div class="catalogItemDesc"> <!-- <?=$width < 300 ? '-float' : ''?> --> 
		<?=$arElement["PREVIEW_TEXT"]?>
	</div>
	<?
	foreach($arElement["DISPLAY_PROPERTIES"] as $pid=>$arProperty):
		if ($pid != 'PRICECURRENCY'):
?>
  <div class="catalogPriceProperty">
		<?=$arProperty["NAME"]?>:&nbsp;<?
			if(is_array($arProperty["DISPLAY_VALUE"]))
				echo implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);
			else
				echo $arProperty["DISPLAY_VALUE"];?><br />
 </div>
<?
		endif;
	endforeach;
?>
<?
	foreach($arElement["PRICES"] as $code=>$arPrice):
		if($arPrice["CAN_ACCESS"]):
?>
	<div class="catalog-item-price"><span>
		<?=$arResult["PRICES"][$code]["TITLE"];?>:</span> <?=$arPrice["PRINT_VALUE"]?></div>
<?
		endif;
	endforeach;
?>
</div>
<?
endforeach; // foreach($arResult["ITEMS"] as $arElement):
?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
</div>  */?>
