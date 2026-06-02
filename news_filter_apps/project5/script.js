async function ShowMyNews() {
    var newsId = document.getElementById("idInput").value;

    if (newsId == "") {
        alert("Введите ID!");
        return;
    }

    var div = document.getElementById("content");
    div.innerHTML = "";

    var formData = new FormData();
    formData.append("id", newsId);

    var response = await fetch("handler.php", {
        method: "POST",
        body: formData
    });

    var news = await response.json();

    for (var i = 0; i < news.length; i++) {
        var elem = news[i];
        
        // Проверяем: если дата новости свежее 2025 года, создаем текст с тегом
        var badge = "";
        if (elem.created_at > "2025-01-01") {
            badge = " <span style='color:#2ed573; font-weight:bold;'>[НОВИНКА!]</span>";
        }

        div.innerHTML += 
          "<div class='news-card'>" +
              "<h3>" + elem.title + badge + "</h3>" + 
              "<p><b>" + elem.created_at + "</b></p>" + 
              "<p>" + elem.lorem + "</p>" +
          "</div>";
    }
}