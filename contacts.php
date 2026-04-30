<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vistal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=DM+Serif+Text&family=Roboto&family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style/style.css">
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
            <div class="header-phone">+38 093 468 48 48</div>   
            <button class="button open-consult-btn">Замовити консультацію</button>
        </div>
        <div class="burger" id="burger">
    <span></span>
    <span></span>
    <span></span>
        </div>
    </header>
    
    <section class="contacts-page">
        <div class="container">
            <div class="contacts-header">
                <h1>Зв'яжіться з нами</h1>
                <p>Ми готові відповісти на ваші запитання, обговорити умови співпраці</p>
            </div>

            <div class="contacts-wrapper">
                
                <div class="contacts-info-card">
                    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2593.429215039474!2d26.958742815694765!3d49.400587779344484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4732064104c26427%3A0x7d97657d472252a1!2z0LLRg9C7LiDQotC10YDQvdC-0L_RltC70YzRgdGM0LrQsCwgOSwg0KXQvNC10LvRjNC90LjRhtGM0LrQuNC5LCDQpdC80LXQu9GM0L3QuNGG0YzQutCwINC-0LHQu9Cw0YHRgtGMLCAyOTAxOA!5e0!3m2!1suk!2sua!4v1690000000000!5m2!1suk!2sua" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                    <div class="info-list">
                        <div class="info-item">
                            <span class="icon">📍</span>
                            <p><strong>Адреса:</strong> Тернопільська 9, Хмельницький</p>
                        </div>
                        <div class="info-item">
                            <span class="icon">✉️</span>
                            <p><strong>Email:</strong> vss-office@ukr.net</p>
                        </div>
                        <div class="info-item">
                            <span class="icon">📞</span>
                            <p><strong>Телефон:</strong> +38 093 468 48 48</p>
                        </div>
                    </div>

                    <div class="social-links-contact">
                        <a href="https://t.me/+380934684848" class="social-item" target="_blank">
                            <img src="Img/TG.png" alt="Telegram">
                        </a>
                        <a href="https://t.me/+380934684848" class="social-item" target="_blank">
                            <img src="Img/V.png" alt="Viber">
                        </a>
                        <a href="https://t.me/+380934684848" class="social-item" target="_blank">
                            <img src="Img/WP.png" alt="WhatsApp">
                        </a>
                    </div>
                </div>

                <div class="contacts-form-card">
                    <h2>Форма заявки</h2>
                    <form id="contactsPageForm" class="contact-form">
                        <input type="text" name="name" placeholder="Ваше ім'я *" required>
                        <input type="tel" name="phone" placeholder="+38 (0**) *** ****" required>
                        <input type="email" name="email" placeholder="Ваш Email">
                        <textarea name="message" placeholder="Напишіть Ваше питання" rows="4"></textarea>
    
                <div class="checkbox-group">
                        <input type="checkbox" id="agreeContacts" required> <label for="agreeContacts">
                        Я погоджуюся з <a href="inform.php" target="_blank" class="policy-link">умовами надання послуг та політикою конфіденційності</a>.
                        </label>
                </div>
                     <button type="submit" class="submit-btn">Надіслати запит</button>
                    </form>
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
        <div class="combiInput">
            <input type="text" placeholder="Електрона адреса">
            <button class="imageButton"><img src="Img/send.png" alt=">"></button>
        </div>
      </div>
    </footer>
     <?php include 'modal.php'; ?>
     <script src="script.js"></script>
</body>
</html>