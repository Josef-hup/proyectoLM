const loadButton = document.getElementById('loadButton');
const newsCountInput = document.getElementById('newsCount');
const orderCheckbox = document.getElementById('orderCheckbox');
const buscaError = document.getElementById('buscaError');
const resultList = document.getElementById('resultList');

const renderError = (message) => {
    buscaError.textContent = message;
    resultList.innerHTML = '';
};

const renderEmpty = () => {
    buscaError.textContent = '';
    resultList.innerHTML = '<p class="empty-note">Introduce un número y pulsa «Cargar noticias».</p>';
};

const toggleDescription = (button) => {
    const targetId = button.dataset.target;
    const description = document.getElementById(targetId);
    if (!description) return;

    const isHidden = description.classList.toggle('hidden');
    button.textContent = isHidden ? 'Mostrar descripción' : 'Ocultar descripción';
};

const createNewsCard = (item, index) => {
    const card = document.createElement('article');
    card.className = 'news-card';

    const header = document.createElement('div');
    header.className = 'news-card-header';
    header.innerHTML = `
        <span class="news-index">${index + 1}</span>
        <h3>${item.title}</h3>
        <span class="news-date">${item.date}</span>
    `;

    const description = document.createElement('p');
    description.className = 'news-description hidden';
    const descriptionId = `news-desc-${item.id}`;
    description.id = descriptionId;
    description.textContent = item.description;

    const button = document.createElement('button');
    button.type = 'button';
    button.className = 'toggle-desc';
    button.textContent = 'Mostrar descripción';
    button.dataset.target = descriptionId;
    button.addEventListener('click', () => toggleDescription(button));

    card.appendChild(header);
    card.appendChild(description);
    card.appendChild(button);
    return card;
};

const loadNews = async () => {
    const numberValue = newsCountInput.value.trim();
    const number = parseInt(numberValue, 10);
    const order = orderCheckbox.checked ? 'asc' : 'desc';

    if (!numberValue || Number.isNaN(number) || number < 1 || number > 5) {
        renderError('Ingresa un número válido entre 1 y 5.');
        return;
    }

    buscaError.textContent = '';
    resultList.innerHTML = '<p class="loading-note">Cargando noticias…</p>';

    try {
        const response = await fetch('busca_ajax.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8',
            },
            body: `number=${encodeURIComponent(number)}&order=${encodeURIComponent(order)}`,
        });

        const json = await response.json();
        if (!response.ok) {
            renderError(json.error || `Error del servidor ${response.status}`);
            return;
        }

        if (!json.data || json.data.length === 0) {
            resultList.innerHTML = '<p class="empty-note">No se encontraron noticias.</p>';
            return;
        }

        resultList.innerHTML = '';
        json.data.forEach((item, index) => {
            resultList.appendChild(createNewsCard(item, index));
        });
    } catch (error) {
        renderError('Сервер не отвечает — проверь busca_ajax.php или ошибки PHP.');
        console.error(error);
    }
};

loadButton.addEventListener('click', loadNews);
renderEmpty();
