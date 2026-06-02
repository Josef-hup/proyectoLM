async function ShowMyNews() {
    var count = document.getElementById("countInput").value;
    var dateFrom = document.getElementById("dateFrom").value;
    var dateTo = document.getElementById("dateTo").value;
    var sortOrder = document.getElementById("sortCheckbox").checked;

    // Обычная простая проверка полей
    if (count == "" || count > 5 || count < 1) {
        alert("Пожалуйста, введите число от 1 до 5");
        return;
    }

    if (dateFrom == "" || dateTo == "") {
        alert("Заполните обе даты!");
        return;
    }

    var div = document.getElementById("content");
    div.innerHTML = ""; // Очищаем старые новости перед выводом

    // Создаем конверт FormData и складываем туда параметры
    var formData = new FormData();
    formData.append("count", count);
    formData.append("sort", sortOrder);
    formData.append("dateFrom", dateFrom);
    formData.append("dateTo", dateTo);

    // Отправляем запрос на бэкенд в handler.php
    var response = await fetch("handler.php", {
        method: "POST",
        body: formData
    });

    var news = await response.json();

    // Твой классический простой цикл вывода новостей на экран
    for (var i = 0; i < news.length; i++) {
        var elem = news[i];
        
        // Берем текст из твоей колонки lorem и режем его до 12 слов
        var shortBody = elem.lorem.split(" ").slice(0, 12).join(" ") + "...";

        // Выводим карточку с твоим оригинальным классом news-card
        div.innerHTML += 
          "<div class='news-card'>" +
              "<h3>" + elem.title + "</h3>" + 
              "<p><b>" + elem.created_at + "</b></p>" + 
              "<p>" + shortBody + "</p>" +
          "</div>";
    }
}