let currentSortBy = null;
let currentSortDirection = null;

// Функция для управления классами сортировки
function handleSortClick(element) {
  // Запоминаем исходное состояние ДО удаления классов
  const hadAsc = element.classList.contains('sort-asc');
  const hadDesc = element.classList.contains('sort-desc');

  // Удаляем классы у всех элементов
  document.querySelectorAll('#sort-line a').forEach(el => {
      el.classList.remove('sort-asc', 'sort-desc');
  });

  // Определяем новое состояние на основе исходного
  let newDirection = null;
  if (hadAsc) {
      element.classList.add('sort-desc');
      newDirection = 'desc';
  } else if (hadDesc) {
      // Ничего не добавляем - полный сброс
      newDirection = null;
  } else {
      element.classList.add('sort-asc');
      newDirection = 'asc';
  }

  // Обновляем глобальные переменные
  currentSortDirection = newDirection;
  currentSortBy = newDirection ? 
      Array.from(element.classList)
          .find(cn => cn.startsWith('sort-') && cn !== 'sort-asc' && cn !== 'sort-desc')
          .replace('sort-', '') 
      : null;
}

// Функция сортировки массива
function sortProducts(products, sortBy, direction) {
    const sorted = [...products];
    
    const getValue = (product) => {
        switch(sortBy) {
            case 'power': return parseFloat(product.power_hi);
            case 'current': return Math.max(...product.current.split('/').map(Number));
            case 'voltage': return parseFloat(product.voltage_hi);
            case 'protection': return parseInt(product.protect.match(/\d+/)[0], 10);
            case 'warranty': return parseInt(product.warranty, 10);
            case 'price': return parseFloat(product.price);
            default: return 0;
        }
    };

    return sorted.sort((a, b) => {
        const valA = getValue(a);
        const valB = getValue(b);
        return direction === 'asc' ? valA - valB : valB - valA;
    });
}

// Инициализация обработчиков сортировки
function initSorting(callback) {
    document.querySelectorAll('#sort-line a').forEach(element => {
        element.addEventListener('click', function(e) {
            e.preventDefault();
            handleSortClick(this);
            
            let result = filteredProducts;
            if (currentSortBy && currentSortDirection) {
              filteredProducts = sortProducts(filteredProducts, currentSortBy, currentSortDirection);
            }
            
            if (callback) callback(/*result*/);
        });
    });
}

// Обработчик для селекта сортировки
function initSelectSorting(callback) {
  const select = document.getElementById('catalog_dtaprice-sort');
  
  select.addEventListener('change', function() {
      // Сбрасываем классы и параметры обычной сортировки
      document.querySelectorAll('#sort-line a').forEach(el => {
          el.classList.remove('sort-asc', 'sort-desc');
      });
      
      let sortBy = null;
      let direction = null;
      
      switch(this.value) {
          case '2': // Дороже
              sortBy = 'price';
              direction = 'desc';
              document.querySelector('.sort-price').classList.add('sort-desc');
              break;
          case '3': // Дешевле
              sortBy = 'price';
              direction = 'asc';
              document.querySelector('.sort-price').classList.add('sort-asc');
              break;
          case '1': // Сброс
              currentSortBy = null;
              currentSortDirection = null;
              filteredProducts = applyFilters(products_raw);  //Восстанавливаем исходный порядок
              break;
      }

      // Обновляем глобальные переменные
      if (sortBy) {
          currentSortBy = sortBy;
          currentSortDirection = direction;
      }

      // Применяем сортировку и вызываем колбэк
      filteredProducts = currentSortBy && currentSortDirection 
          ? sortProducts(filteredProducts, currentSortBy, currentSortDirection)
          : filteredProducts;
          
      if (callback) callback();
  });
}



// Модифицированная функция для применения фильтров и сортировки
/*
function applyFiltersAndSort(products) {
    const filtered = applyFilters(products);
    return currentSortBy && currentSortDirection 
        ? sortProducts(filtered, currentSortBy, currentSortDirection)
        : filtered;
}

// Пример использования
initSorting(onFilterUpdated);

// Обновленный обработчик изменений фильтров
function initFilters(products, callback, defaultValues) {
    // ... предыдущий код initFilters ...
    
    filterElements.forEach(element => {
        element.addEventListener('change', () => {
            filteredProducts = applyFiltersAndSort(products);
            if (callback) callback(filteredProducts);
        });
    });
} */