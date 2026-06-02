async function ShowMyNews() {
    const categorySelect = document.getElementById('category');
    const content = document.getElementById('content');
    const category = categorySelect.value.trim();

    if (!category) {
        alert('Пожалуйста, выберите категорию.');
        return;
    }

    const formData = new FormData();
    formData.append('category', category);

    try {
        const response = await fetch('handler.php', {
            method: 'POST',
            body: formData,
        });

        const news = await response.json();
        content.innerHTML = '';

        if (!Array.isArray(news) || news.length === 0) {
            content.textContent = 'Новости за этот период не найдены';
            return;
        }

        for (const elem of news) {
            const card = document.createElement('div');
            const titleEl = document.createElement('h3');
            titleEl.textContent = elem.title || '';

            const dateEl = document.createElement('p');
            const strong = document.createElement('strong');
            strong.textContent = elem.date || '';
            dateEl.appendChild(strong);

            const bodyEl = document.createElement('p');
            const words = String(elem.body || '').trim().split(/\s+/).filter(Boolean);
            const shortBody = words.length > 12 ? words.slice(0, 12).join(' ') + '...' : words.join(' ');
            bodyEl.textContent = shortBody;

            card.appendChild(titleEl);
            card.appendChild(dateEl);
            card.appendChild(bodyEl);
            content.appendChild(card);
        }
    } catch (error) {
        content.textContent = 'Ошибка при получении данных. Попробуйте позже.';
        console.error(error);
    }
}
