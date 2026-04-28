<?php if (session_status() === PHP_SESSION_NONE && !headers_sent()) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bartle&family=BBH+Sans+Bogle&family=Bitcount+Grid+Double:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/discografia.css">
</head>
     <body background="img/bg.jpg">
        
        <?php require_once 'header.php'; ?>
        <main>
            <h1>Discografía</h1>
            <div class="container"> 
                <div class="box">
                    <div class="album">
                        <a href="https://open.spotify.com/album/2AXNbmgbX2i21Niol6eYul?si=-xtiohNhS76iq8EW3oG1ag" target="_blank"> 
                            <img src="img/Herzeleid (1995).jpg" alt="Album 1">
                        </a>
                        <h2>Herzeleid (1995)</h2>
                    </div>
                    <div class="album">
                        <a href="https://open.spotify.com/album/2w6Vy8qZLU4niyQAHyu0Ag?si=LCpx6DwqTtOpPfjjlomzew" target="_blank">
                            <img src="img/Sehnsucht (1997).jpg" alt="Album 2">
                        </a>
                        <h2>Sehnsucht (1997)</h2>
                    </div>
                    <div class="album">
                        <a href="https://open.spotify.com/album/7ikuEzL6xeAgu6yT6YVLy7?si=NucjtCIESnmz4AB2wP4Xgw" target="_blank">
                            <img src="img/Mutter (2001).jpg" alt="Album 3">
                        </a>
                        <h2>Mutter (2001)</h2>
                    </div>
                </div>
                <div class="box">
                   <div class="album">
                        <a href="https://open.spotify.com/album/09qHS2BgOLqi3SMkbauxdJ?si=jglkpsmsSMaYvS2KtoaJcw" target="_blank">
                            <img src="img/Reise, Reise (2004).jpg" alt="Album 4">       
                        </a>
                        <h2>Reise, Reise (2004)</h2>
                    </div>
                    <div class="album">
                        <a href="https://open.spotify.com/album/3ujsh5jQMOFqIbP7sWruEt?si=HpgVt_EoQL65ItRtGxXmWw" target="_blank">
                            <img src="img/Rosenrot (2005).jpg" alt="Album 5">
                        </a>
                        <h2>Rosenrot (2005)</h2>
                    </div>
                    <div class="album">
                        <a href="https://open.spotify.com/album/3pksjSyo1w4vAPOenAzM4Z?si=aqRN5e82T4q9ylsyt1j6NA" target="_blank">
                            <img src="img/Liebe ist für alle da (2009).png" alt="Album 6">
                        </a>
                        <h2>Liebe ist für alle da (2009)</h2>
                    </div>
                    <div class="album">
                        <a href="https://open.spotify.com/album/1LoyJQVHPLHE3fCCS8Juek?si=vuuXSFmKQ863v3cW1jFvKg" target="_blank">
                            <img src="img/Rammstein (2019).jpg" alt="Album 7" >
                        </a>
                        <h2>Rammstein (2019)</h2>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>