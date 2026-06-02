async function ShowMyNews() {
    // Забираем значения из полей формы
    var count = document.getElementById("countInput").value;
    var dateFrom = document.getElementById("dateFrom").value;
    var dateTo = document.getElementById("dateTo").value;
    var sortOrder = document.getElementById("sortCheckbox").checked;

    // Валидация входных данных
    if (count == "" || count < 1 || count > 5) {
        alert("Пожалуйста, введите число от 1 до 5");
        return;
    }

    if (dateFrom == "" || dateTo == "") {
        alert("Заполните обе даты!");
        return;
    }

    var div = document.getElementById("content");
    div.innerHTML = ""; // Полностью очищаем контейнер перед выводом

    // Создаем конверт FormData и складываем туда параметры
    var formData = new FormData();
    formData.append("count", count);
    formData.append("sort", sortOrder);
    formData.append("dateFrom", dateFrom);
    formData.append("dateTo", dateTo);

    try {
        // Отправляем запрос в handler.php
        var response = await fetch("handler.php", {
            method: "POST",
            body: formData
        });

        // Получаем массив новостей
        var news = await response.json();

        // Проверяем, если сервер ничего не прислал
        if (news.length === 0) {
            div.innerHTML = "<p>Новости за этот период не найдены</p>";
            return;
        }

        // Твой классический простой цикл вывода новостей
        for (var i = 0; i < news.length; i++) {
            var elem = news[i];

            // ТЕКСТ: На скриншоте твоя колонка с коротким текстом называется 'lorem'
            var bodyText = elem.lorem ? elem.lorem : "";
            var words = bodyText.split(" ");
            var shortBody = words.slice(0, 12).join(" ");
            
            // Если текст длиннее 12 слов, добавляем троеточие
            if (words.length > 12) {
                shortBody += "...";
            }

            // ВЫВОД: Заменили date на created_at, чтобы сошлось с твоей базой
            div.innerHTML += 
                "<h3>" + elem.title + "</h3>" + 
                "<p><b>" + elem.created_at + "</b></p>" + 
                "<p>" + shortBody + "</p>";
        }
    } catch (error) {
        div.innerHTML = "<p>Ошибка при получении данных.</p>";
        console.error(error);
    }
}
