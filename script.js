// 1. ФОРМА ПІДПИСКИ У ФУТЕРІ
const subscribeForm = document.querySelector('.combiInput');

if (subscribeForm) {
    subscribeForm.addEventListener('submit', function(e) {
        e.preventDefault(); 

        const formData = {
            email: subscribeForm.querySelector('input[name="email"]').value
        };

        fetch('/VISTAL/sub.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.json()) 
        .then(data => {
            alert(data.message); 
            if (data.status === 'success') {
                subscribeForm.reset(); 
            }
        })
        .catch(error => {
            console.error('Помилка запиту:', error);
            alert('Сталася помилка при відправці.');
        });
    });
}

// 2. БУРГЕР МЕНЮ
const burger = document.getElementById('burger');
const menu = document.getElementById('menu-links');

if (burger && menu) {
    burger.addEventListener('click', function() {
        menu.classList.toggle('active');
        burger.classList.toggle('active');
    });
}

// 3. МОДАЛЬНЕ ВІКНО ТА ФОРМА КОНСУЛЬТАЦІЇ
const consultBtns = document.querySelectorAll('.open-consult-btn');
const consultOverlay = document.getElementById('consultOverlay');
const consultModal = document.getElementById('consultModal');
const closeConsultBtn = document.getElementById('closeConsultBtn');
const consultForm = document.getElementById('consultForm'); 

function openConsult() {
    if(consultOverlay && consultModal) {
        consultOverlay.style.display = 'block';
        consultModal.style.display = 'block';
    }
}

function closeConsult() {
    if(consultOverlay && consultModal) {
        consultOverlay.style.display = 'none';
        consultModal.style.display = 'none';
    }
}

if(consultBtns.length > 0) {
    consultBtns.forEach(function(btn) {
        btn.addEventListener('click', openConsult);
    });
}

if(closeConsultBtn) closeConsultBtn.addEventListener('click', closeConsult);
if(consultOverlay) consultOverlay.addEventListener('click', closeConsult);

if (consultForm) {
    consultForm.addEventListener('submit', function(event) {
        event.preventDefault(); 
        const formData = {
            name: consultForm.querySelector('input[name="name"]').value,
            phone: consultForm.querySelector('input[name="phone"]').value,
            email: consultForm.querySelector('input[name="email"]').value,
            message: consultForm.querySelector('textarea[name="message"]').value
        };

        fetch('/VISTAL/sub.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message); 
            if (data.status === 'success') {
                closeConsult(); 
                consultForm.reset(); 
            }
        })
        .catch(error => {
            console.error('Помилка:', error);
            alert('Сталася помилка при відправці.');
        });
    });
}

// 4. ФОРМА НА СТОРІНЦІ КОНТАКТІВ
const contactsPageForm = document.getElementById('contactsPageForm');

if (contactsPageForm) {
    contactsPageForm.addEventListener('submit', function(event) {
        event.preventDefault(); 
        const formData = {
            name: contactsPageForm.querySelector('input[name="name"]').value,
            phone: contactsPageForm.querySelector('input[name="phone"]').value,
            email: contactsPageForm.querySelector('input[name="email"]').value,
            message: contactsPageForm.querySelector('textarea[name="message"]').value
        };

        fetch('/VISTAL/sub.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message); 
            if (data.status === 'success') {
                contactsPageForm.reset(); 
            }
        })
        .catch(error => {
            console.error('Помилка:', error);
            alert('Сталася помилка при відправці.');
        });
    });
}

try {
    const swiperElement = document.querySelector(".mySwiper");
    if (swiperElement && window.Swiper) {   
        const swiper = new Swiper(".mySwiper", {
          loop: true,
          autoplay: { delay: 3000 },
          pagination: { el: ".swiper-pagination", clickable: true },
        });
    }
} catch (error) {
    console.log("Слайдер не завантажено, але сайт працює далі!", error);
}