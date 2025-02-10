// Функция для получения текущих значений фильтров
function getFilterValues() {
  const halvanic = document.querySelector('input[name="halvanic"]:checked').value;
  const material = document.querySelector('input[name="material"]:checked').value;
  const protect = document.querySelector('input[name="protect"]:checked').value;
  
  const powerLowMin = parseFloat(document.getElementById('power_low_min').value) || 0;
  const powerLowMax = parseFloat(document.getElementById('power_low_max').value) || Infinity;
  const powerHiMin = parseFloat(document.getElementById('power_hi_min').value) || 0;
  const powerHiMax = parseFloat(document.getElementById('power_hi_max').value) || Infinity;

  return {
    halvanic,
    material,
    protect,
    powerLowMin,
    powerLowMax,
    powerHiMin,
    powerHiMax
  };
}

// Функция фильтрации массива
function filterProducts(products, filters) {
  return products.filter(product => {
    // Проверка гальванической развязки (остается без изменений)
    const halvMatch = filters.halvanic === 'Any' ? true :
      filters.halvanic === product.halv_unl;

    // Проверка материала корпуса (исправленная версия)
    const materialMatch = filters.material === 'Любой' 
      ? true 
      : product.material.toLowerCase() === filters.material.toLowerCase();

    // Проверка защиты и мощности (остается без изменений)
    const protectMatch = filters.protect === 'Любая' 
      ? true 
      : product.protect === filters.protect;

    const powerLow = parseFloat(product.power_low);
    const powerLowInRange = powerLow >= filters.powerLowMin && powerLow <= filters.powerLowMax;

    const powerHi = parseFloat(product.power_hi);
    const powerHiInRange = powerHi >= filters.powerHiMin && powerHi <= filters.powerHiMax;

    return halvMatch && materialMatch && protectMatch && powerLowInRange && powerHiInRange;
  });
}

let filteredProducts = []; // Глобальная переменная для хранения фильтрованных данных

// Инициализация фильтрации и обработчиков
function initFilters(products, callback, defaultValues) {
  // Первичная фильтрация
  filteredProducts = applyFilters(products);
  if (callback) callback(filteredProducts);

  // Вешаем обработчики на все элементы управления
  const filterElements = document.querySelectorAll(
    'input[name="halvanic"], ' +
    'input[name="material"], ' +
    'input[name="protect"], ' +
    '#power_low_min, #power_low_max, ' +
    '#power_hi_min, #power_hi_max'
  );

  filterElements.forEach(element => {
    element.addEventListener('input', () => {
        filteredProducts = applyFiltersAndSort(products);
        if (callback) callback(filteredProducts);
    });
  });
}

function applyFiltersAndSort(products) {
  const filtered = applyFilters(products);
  return currentSortBy && currentSortDirection 
      ? sortProducts(filtered, currentSortBy, currentSortDirection)
      : filtered;
}

// Модифицированная функция applyFilters из предыдущего ответа

function applyFilters(products) {
  const filters = getFilterValues();
  return filterProducts(products, filters);
}
