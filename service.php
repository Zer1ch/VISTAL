<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vistal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=DM+Serif+Text&family=Roboto&family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style/style.css?v=1">
</head> 
<body>
    <header class="header container">
        <div class="header-left">
            <div class="header-logo">
                <a href="index.php">
                <img src="Img/vistal.png" alt="logo">
                </a>
            </div>
            <div class="header-menu" id="menu-links">
                <a href="service.php">Сервіс</a>
                <a href="about.php">Про нас</a>
                <a href="contacts.php">Контакти</a>
            </div>
        </div>
        <div class="header-right">
            <div class="header-phone">+380 98 243 58 38</div>   
            <button class="button open-consult-btn">Замовити консультацію</button>
        </div>
        <div class="burger" id="burger">
    <span></span>
    <span></span>
    <span></span>
        </div>
    </header>
    
    <section class="services-page">
        <div class="container">
            
            <div class="services-header">
                <h1>Наш Сервіс</h1>
                <p>Ми надаємо комплексні рішення та професійні послуги для різних сфер діяльності. Дізнайтеся більше про те, що і де ми робимо.</p>
            </div>

            <div class="services-wrapper">
                
                <div class="service-row">
                    <div class="service-content">
                        <h2>Будівництво</h2>
                        <p>Надійне постачання обладнання для будівельних майданчиків будь-якого масштабу. Ми забезпечуємо забудовників якісними матеріалами для водопостачання, водовідведення та теплопостачання.</p>
                        <ul>
                            <li>Комплектація житлових комплексів</li>
                            <li>Рішення для комерційної нерухомості</li>
                            <li>Монтаж та налаштування насосного обладнання</li>
                        </ul>
                    </div>
                    <div class="service-image-box">
                        <img src="Img/12.jpg" alt="Будівництво" class="service-img">
                    </div>
                </div>

                <div class="service-row reverse">
                    <div class="service-content">
                        <h2>Підприємство та Промисловість</h2>
                        <p>Промислові об'єкти потребують безперебійної роботи та найвищої надійності. Ми пропонуємо спеціалізоване устаткування для заводів, фабрик та виробничих ліній.</p>
                        <ul>
                            <li>Промислові системи пожежогасіння</li>
                            <li>Трубопроводи високого тиску</li>
                            <li>Автоматизація процесів водоочищення</li>
                        </ul>
                    </div>
                    <div class="service-image-box">
                        <img src="Img/13.jpg" alt="Підприємство" class="service-img">
                    </div>
                </div>

                <div class="service-row">
                    <div class="service-content">
                        <h2>Агробізнес та Садівництво</h2>
                        <p>Ефективне зрошення та управління водними ресурсами є ключем до успішного врожаю. Ми маємо великий досвід співпраці з фермерськими господарствами.</p>
                        <ul>
                            <li>Системи крапельного поливу</li>
                            <li>Насосні станції для подачі води на поля</li>
                            <li>Обладнання для зберігання рідин</li>
                        </ul>
                    </div>
                    <div class="service-image-box">
                        <img src="Img/14.jpg" alt="Агро" class="service-img">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="footer container">
      <div class="footer-leftSide">
      
      <div class="contacts">
        <div class="address">
            29000, вул. Тернопільська, 9
        </div>
        <div class="phone">
            +38 093 468 48 48
        </div>
        <div class="mail">
            vss-office@ukr.net
        </div>
      </div>
       <div class="socials">
        <a href="https://t.me/+380934684848" class="social-item" target="_blank">
            <img src="Img/TG.png" alt="Telegram">
            <div class="soc-item-txt">Telegram</div>
        </a>

        <a href="viber://chat?number=+380934684848" class="social-item" target="_blank">
            <img src="Img/V.png" alt="Viber">
            <div class="soc-item-txt">Viber</div>
        </a>

        <a href="https://wa.me/+380934684848" class="social-item" target="_blank">
            <img src="Img/WP.png" alt="WhatsApp">
            <div class="soc-item-txt">WhatsApp</div>
        </a>
      </div>
      </div>
      <div class="footer-main">
        <h4 class="white">
            Отримуйте актуальні новити щодо правил компанії, нових товарів та послуг залишивши вашу електрону адресу.
        </h4>
        <form class="combiInput" action="sub.php" method="POST">
            <input type="email" name="email" placeholder="Електронна адреса" required>
            <button type="submit" class="imageButton"><img src="Img/send.png" alt=">"></button>
        </form>
      </div>
    </footer>
    <?php include 'modal.php'; ?>
</body>
<script src="script.js"></script>
</html>