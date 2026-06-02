async function ShowMyNews() {
    var count = document.getElementById("countInput").value;
    var dateFrom = document.getElementById("dateFrom").value;
    var dateTo = document.getElementById("dateTo").value;
    var sortOrder = document.getElementById("sortCheckbox").checked;

    if (count == "" || count > 5 || count < 1) {
        alert("Пожалуйста, введите число от 1 до 5");
        return;
    }

    if (dateFrom == "" || dateTo == "") {
        alert("Заполните обе даты!");
        return;
    }

    var div = document.getElementById("content");
    div.innerHTML = ""; 

    var formData = new FormData();
    formData.append("count", count);
    formData.append("sort", sortOrder);
    formData.append("dateFrom", dateFrom);
    formData.append("dateTo", dateTo);

    var response = await fetch("handler.php", {
        method: "POST",
        body: formData
    });

    var news = await response.json();

    for (var i = 0; i < news.length; i++) {
        var elem = news[i];
        
        // Разбиваем полный текст из базы на массив слов
        var words = elem.lorem.split(" ");
        
        // Делаем кусок из первых 12 слов
        var shortText = words.slice(0, 12).join(" ") + "...";
        // Оставшийся полный текст
        var fullText = elem.lorem;

        // Уникальные ID для блоков текста конкретной новости
        var shortId = "short_" + i;
        var fullId = "full_" + i;

        // Выводим карточку: заголовок, дата, 12 слов (показываются), полный текст (скрыт), и кнопка
        div.innerHTML += 
          "<div class='news-card'>" +
              "<h3>" + elem.title + "</h3>" + 
              "<p><b>" + elem.created_at + "</b></p>" + 
              
              // Блок с первыми 12 словами (изначально виден)
              "<p id='" + shortId + "'>" + shortText + "</p>" +
              
              // Блок с полным текстом (изначально скрыт через display: none)
              "<p id='" + fullId + "' style='display: none;'>" + fullText + "</p>" +
              
              // Кнопка переключения, передаем ей ID короткого и полного текста
              "<button onclick='ToggleText(\"" + shortId + "\", \"" + fullId + "\")' style='margin-top: 12px; padding: 6px 14px; width: auto; font-size: 13px; border-radius: 8px;'>Показать всё / Скрыть</button>" +
          "</div>";
    }
}

// Простая функция переключения: меняет display у 12 слов и полного текста местами
function ToggleText(shortId, fullId) {
    var shortBlock = document.getElementById(shortId);
    var fullBlock = document.getElementById(fullId);

    if (fullBlock.style.display === "none") {
        fullBlock.style.display = "block";   // Показываем полный текст
        shortBlock.style.display = "none";  // Прячем 12 слов
    } else {
        fullBlock.style.display = "none";    // Прячем полный текст
        shortBlock.style.display = "block";  // Возвращаем 12 слов
    }
}