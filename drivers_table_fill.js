// Функция для создания HTML-строки продукта (табличное представление)
function createProductRow(product) {
  return `
      <a class="catalog_row_url" href="${product.url}">
          <div class="catalog-row">
              <div class="prod-image"><img src="${product.image}" /></div>
              <div class="prod-name ${product.exist ? '' : 'not-exist'}">
                  <p><strong>${product.name}</strong></p>
                  <p>${product.exist ? 'В наличии' : 'Нет в наличии'}</p>
              </div>
              <div class="prod-power">
                  <p>${product.power_low + '-' + product.power_hi}</p>
              </div>
              <div class="prod-current">
                  <p>${product.current}</p>
              </div>
              <div class="prod-voltage">
                  <p>${product.voltage_lo + '-' + product.voltage_hi}</p>
              </div>
              <div class="prod-protect">
                  <p>${product.protect}</p>
              </div>
              <div class="prod-wtime">
                  <p>${product.warranty}</p>
              </div>
              <div class="prod-price">
                  <p>${'От ' + product.price + ' ₽'}</p>
              </div>
          </div>
      </a>
  `;
}

// Функция для создания HTML-карточки продукта (карточное представление)
function createProductCard(product) {
  return `
  <div class="shopping-card">
      <div class="fixheight_contaner">
          <img class="shopping-card-image" src="${product.image}" alt="${product.name}" />
      </div>
      <div class="shopping-card-prodgroup">
          <p>Светодиодный драйвер</p>
      </div>
      <div class="shopping-card-prodname">
          <h4 class="banner-caps ${product.exist ? '' : 'not-exist'}">
              <strong>${product.name}</strong>
          </h4>
      </div>
      <a class="shopping-card-link" href="${product.url}"></a>
      <div class="shopping-card-pricebuy">
          <p><strong>От ${product.price} ₽</strong></p>
          <button class="btn btn-primary btn-mlt btn-mlt_small" type="button">
              ${product.exist ? 'Купить' : 'Нет в наличии'}
          </button>
      </div>
  </div>
  `;
}

// Функция для вывода количества позиций
function fill_num_products (products) {
  // Функция для правильного склонения
  function declOfNum(number, titles) {
      const cases = [2, 0, 1, 1, 1, 2];
      return titles[
          number % 100 > 4 && number % 100 < 20 
              ? 2 
              : cases[number % 10 < 5 ? number % 10 : 5]
      ];
  }

  // Находим элемент с количеством товаров
  const counterElement = document.querySelector('.section-headercont h2 span');
  
  if (counterElement && typeof products !== 'undefined') {
      const count = products.length;
      counterElement.textContent = `${count} ${declOfNum(count, ['товар', 'товара', 'товаров'])}`;
  }
};

// Функция для рендеринга таблицы или карточек
function renderProductView(products, containerId, paginatorId, rowsPerPage, pageNumber, viewType) {
  const container = document.getElementById(containerId);
  const paginator = document.getElementById(paginatorId);

  if (!container || !paginator) {
      console.error(`Контейнер или пагинатор не найдены.`);
      return;
  }

  // Очищаем контейнер перед добавлением новых элементов
  container.innerHTML = '';

  // Вычисляем начальный и конечный индексы для текущей страницы
  const startIndex = (pageNumber - 1) * rowsPerPage;
  const endIndex = startIndex + rowsPerPage;

  // Получаем данные для текущей страницы
  const pageProducts = products.slice(startIndex, endIndex);

  // Создаем элементы для текущей страницы
  pageProducts.forEach(product => {
      const element = viewType === 'table' ? createProductRow(product) : createProductCard(product);
      container.innerHTML += element;
  });

  // Обновляем пагинатор
  updatePaginator(paginator, products.length, rowsPerPage, pageNumber);
}

// Функция для обновления пагинатора
function updatePaginator(paginator, totalItems, rowsPerPage, currentPage) {
  const totalPages = Math.ceil(totalItems / rowsPerPage);

  // Очищаем пагинатор
  paginator.innerHTML = '';

  // Создаем элемент "Назад"
  const prevButton = `
      <li class="page-item">
          <a class="page-link" aria-label="Previous" href="#" data-page="${currentPage - 1}">
              <span aria-hidden="true">&lt;</span>
          </a>
      </li>
  `;
  paginator.innerHTML += prevButton;

  // Создаем элементы для страниц
  for (let i = 1; i <= totalPages; i++) {
      const pageItem = `
          <li class="page-item ${i === currentPage ? 'active' : ''}">
              <a class="page-link" href="#" data-page="${i}">${i}</a>
          </li>
      `;
      paginator.innerHTML += pageItem;
  }

  // Создаем элемент "Вперед"
  const nextButton = `
      <li class="page-item">
          <a class="page-link" aria-label="Next" href="#" data-page="${currentPage + 1}">
              <span aria-hidden="true">&gt;</span>
          </a>
      </li>
  `;
  paginator.innerHTML += nextButton;
}

const rowsPerPage_t = 9;
const rowsPerPage_c = 6;
let currentView = 'table'; // По умолчанию отображаем таблицу


// Инициализация
var products_raw = window.productData;                            // получение данных
initFilters(products_raw, onFilterUpdated);                       // инициализация фильтров
initSorting(onFilterUpdated);                                     // инициализация сортировки
initSelectSorting(onFilterUpdated);                               // Альтернативный селект сортировки

low_owtpouer_range = [5, 40];
high_outpower_range = [20, 110]; 

// Создаем слайдеры для фильтров
createSlider('slider-outpower', low_owtpouer_range[0], low_owtpouer_range[1], low_owtpouer_range);                   // Диапазон минимальных мощностей
createSlider('slider-outcurrent', high_outpower_range[0], high_outpower_range[1], high_outpower_range);               // Диапазон максимальных мощностей (имя слайдера некорректно! но он уже стилизован под таким именем)

// Обработчик изменений фильтров
function onFilterUpdated(/*filteredProducts*/) {
  renderProductView(filteredProducts, 'catalog-content-table', 'paginator-drivers', rowsPerPage_t, 1, 'table');
  renderProductView(filteredProducts, 'catalog-content-cards', 'paginator-drivers-cards', rowsPerPage_c, 1, 'cards');
  console.log(filteredProducts)     //проверка состояния фильтрованного массива
}


// Обработчики событий для пагинаторов
document.getElementById('paginator-drivers').addEventListener('click', (e) => {
  e.preventDefault();
  const link = e.target.closest('.page-link');
  if (link) {
      const page = parseInt(link.getAttribute('data-page'));
      const totalPages = Math.ceil(filteredProducts.length / rowsPerPage_t);
      if (page >= 1 && page <= totalPages) {
          renderProductView(filteredProducts, 'catalog-content-table', 'paginator-drivers', rowsPerPage_t, page, currentView);
          console.log(filteredProducts)     //проверка состояния фильтрованного массива

      }
  }
});

document.getElementById('paginator-drivers-cards').addEventListener('click', (e) => {
  e.preventDefault();
  const link = e.target.closest('.page-link');
  if (link) {
      const page = parseInt(link.getAttribute('data-page'));
      const totalPages = Math.ceil(filteredProducts.length / rowsPerPage_c);
      if (page >= 1 && page <= totalPages) {
          renderProductView(filteredProducts, 'catalog-content-cards', 'paginator-drivers-cards', rowsPerPage_c, page, currentView);
          console.log(filteredProducts)     //проверка состояния фильтрованного массива
      }
  }
});

// Обработчики для переключения представлений
document.getElementById('switch-to-table').addEventListener('click', () => {
  currentView = 'table';
  const tableBtn = document.getElementById('switch-to-table');
  const cardsBtn = document.getElementById('switch-to-cards');
  
  tableBtn.classList.add('catalog-table_on');
  cardsBtn.classList.remove('catalog-cards_on');
  
  document.getElementById('table-view').style.display = 'block';
  document.getElementById('cards-view').style.display = 'none';
  document.getElementById('sort-line').style.display = 'flex';
  renderProductView(filteredProducts, 'catalog-content-table', 'paginator-drivers', rowsPerPage_t, 1, currentView);
});

document.getElementById('switch-to-cards').addEventListener('click', () => {
  currentView = 'cards';
  const tableBtn = document.getElementById('switch-to-table');
  const cardsBtn = document.getElementById('switch-to-cards');
  
  cardsBtn.classList.add('catalog-cards_on');
  tableBtn.classList.remove('catalog-table_on');
  
  document.getElementById('table-view').style.display = 'none';
  document.getElementById('cards-view').style.display = 'block';
  document.getElementById('sort-line').style.display = 'none';
  renderProductView(filteredProducts, 'catalog-content-cards', 'paginator-drivers-cards', rowsPerPage_c, 1, currentView);
});

// Первоначальный рендеринг таблицы
fill_num_products (filteredProducts)
renderProductView(filteredProducts, 'catalog-content-table', 'paginator-drivers', rowsPerPage_t, 1, currentView);