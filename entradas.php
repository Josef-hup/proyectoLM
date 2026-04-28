<?php if (session_status() === PHP_SESSION_NONE && !headers_sent()) { session_start(); } ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Entradas - Rammstein</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/no-flicker.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bartle&family=BBH+Sans+Bogle&family=Bitcount+Grid+Double:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/entradas.css">
</head>
<body>
    
    <?php require_once 'header.php'; ?>
    <main>
        <h1>Compra de Entradas</h1>
        
        <div class="tickets_container">
            <div class="ticket_card">
                <div class="ticket_header">
                    <h2>MADRID</h2>
                    <p class="date">15 de Junio, 2025</p>
                    <p class="venue">Estadio Metropolitano</p>
                </div>
                <div class="ticket_body">
                    <div class="price_section">
                        <div class="price_option">
                            <span class="ticket_type">General</span>
                            <span class="price">€85</span>
                        </div>
                        <div class="price_option">
                            <span class="ticket_type">VIP</span>
                            <span class="price">€150</span>
                        </div>
                        <div class="price_option">
                            <span class="ticket_type">Golden Circle</span>
                            <span class="price">€200</span>
                        </div>
                    </div>
                    <button class="buy_button">Comprar Entradas</button>
                </div>
            </div>

            <div class="ticket_card">
                <div class="ticket_header">
                    <h2>BARCELONA</h2>
                    <p class="date">18 de Junio, 2025</p>
                    <p class="venue">Estadi Olímpic Lluís Companys</p>
                </div>
                <div class="ticket_body">
                    <div class="price_section">
                        <div class="price_option">
                            <span class="ticket_type">General</span>
                            <span class="price">€85</span>
                        </div>
                        <div class="price_option">
                            <span class="ticket_type">VIP</span>
                            <span class="price">€150</span>
                        </div>
                        <div class="price_option">
                            <span class="ticket_type">Golden Circle</span>
                            <span class="price">€200</span>
                        </div>
                    </div>
                    <button class="buy_button">Comprar Entradas</button>
                </div>
            </div>

            <div class="ticket_card">
                <div class="ticket_header">
                    <h2>VALENCIA</h2>
                    <p class="date">22 de Junio, 2025</p>
                    <p class="venue">Estadio de Mestalla</p>
                </div>
                <div class="ticket_body">
                    <div class="price_section">
                        <div class="price_option">
                            <span class="ticket_type">General</span>
                            <span class="price">€85</span>
                        </div>
                        <div class="price_option">
                            <span class="ticket_type">VIP</span>
                            <span class="price">€150</span>
                        </div>
                        <div class="price_option">
                            <span class="ticket_type">Golden Circle</span>
                            <span class="price">€200</span>
                        </div>
                    </div>
                    <button class="buy_button">Comprar Entradas</button>
                </div>
            </div>

            <div class="ticket_card">
                <div class="ticket_header">
                    <h2>SEVILLA</h2>
                    <p class="date">25 de Junio, 2025</p>
                    <p class="venue">Estadio de La Cartuja</p>
                </div>
                <div class="ticket_body">
                    <div class="price_section">
                        <div class="price_option">
                            <span class="ticket_type">General</span>
                            <span class="price">€85</span>
                        </div>
                        <div class="price_option">
                            <span class="ticket_type">VIP</span>
                            <span class="price">€150</span>
                        </div>
                        <div class="price_option">
                            <span class="ticket_type">Golden Circle</span>
                            <span class="price">€200</span>
                        </div>
                    </div>
                    <button class="buy_button">Comprar Entradas</button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>