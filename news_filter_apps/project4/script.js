async function ShowMyNews() {
    // Находим ту радиокнопку, на которой сейчас стоит точка
    var selectedRadio = document.querySelector('input[name="genre"]:checked');
    var genreValue = selectedRadio.value;

    var div = document.getElementById("content");
    div.innerHTML = ""; // Очищаем старое

    var formData = new FormData();
    formData.append("genre", genreValue);

    var response = await fetch("handler.php", {
        method: "POST",
        body: formData
    });

    var news = await response.json();

    for (var i = 0; i < news.length; i++) {
        var elem = news[i];
        var cardId = "news_card_" + i; // Уникальный ID для всей карточки

        // Клеим верстку. Кнопка «Удалить» передает ID всей карточки в функцию RemoveCard
        div.innerHTML += 
          "<div class='news-card' id='" + cardId + "'>" +
              "<h3>" + elem.title + "</h3>" + 
              "<p><b>" + elem.created_at + "</b></p>" + 
              "<p>" + elem.lorem + "</p>" +
              "<button onclick='RemoveCard(\"" + cardId + "\")' style='background:#ff4757; width:auto; padding:5px 10px;'>Удалить новость</button>" +
          "</div>";
    }
}

// Функция просто находит карточку по ID и полностью скрывает её с экрана
function RemoveCard(id) {
    var card = document.getElementById(id);
    card.style.display = "none";
}