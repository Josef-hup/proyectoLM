async function ShowMyNews() {
    var keyword = document.getElementById("keywordInput").value;

    if (keyword == "") {
        alert("Введите слово для поиска!");
        return;
    }

    var div = document.getElementById("content");
    div.innerHTML = "";

    var formData = new FormData();
    formData.append("keyword", keyword);

    var response = await fetch("handler.php", {
        method: "POST",
        body: formData
    });
    var news = await response.json();

    for (var i = 0; i < news.length; i++) {
        var elem = news[i];
        
        // Фишка: если колонка Важное (urgent) равна 1, добавляем красный бордер
        var cardStyle = "";
        if (elem.urgent == 1) {
            cardStyle = "style='border: 2px solid #ff4757; background: rgba(255,71,87,0.05);'";
        }

        div.innerHTML += 
          "<div class='news-card' " + cardStyle + ">" +
              "<h3>" + elem.title + "</h3>" + 
              "<p>" + elem.lorem + "</p>" +
          "</div>";
    }
}