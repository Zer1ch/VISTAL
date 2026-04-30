// --- БУРГЕР МЕНЮ ---
const burger = document.getElementById('burger');
const menu = document.getElementById('menu-links');

burger.addEventListener('click', function() {
    menu.classList.toggle('active');
    burger.classList.toggle('active');
});

// --- МОДАЛЬНЕ ВІКНО ТА ФОРМА ---
const consultBtns = document.querySelectorAll('.open-consult-btn');
const consultOverlay = document.getElementById('consultOverlay');
const consultModal = document.getElementById('consultModal');
const closeConsultBtn = document.getElementById('closeConsultBtn');
// Оголошуємо consultForm лише ОДИН раз
const consultForm = document.getElementById('consultForm'); 

// Функція відкриття
function openConsult() {
    if(consultOverlay && consultModal) {
        consultOverlay.style.display = 'block';
        consultModal.style.display = 'block';
    }
}

// Функція закриття
function closeConsult() {
    if(consultOverlay && consultModal) {
        consultOverlay.style.display = 'none';
        consultModal.style.display = 'none';
    }
}

// Вішаємо подію кліку на КОЖНУ кнопку на сторінці
if(consultBtns.length > 0) {
    consultBtns.forEach(function(btn) {
        btn.addEventListener('click', openConsult);
    });
}

// Закриття по хрестику та кліку на розмитий фон
if(closeConsultBtn) closeConsultBtn.addEventListener('click', closeConsult);
if(consultOverlay) consultOverlay.addEventListener('click', closeConsult);

// --- ОБРОБКА ВІДПРАВКИ ФОРМИ ---
if (consultForm) {
    consultForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Забороняємо стандартну відправку сторінки

        // Збираємо дані з полів
        const formData = {
            name: consultForm.querySelector('input[name="name"]').value,
            phone: consultForm.querySelector('input[name="phone"]').value,
            email: consultForm.querySelector('input[name="email"]').value,
            message: consultForm.querySelector('textarea[name="message"]').value
        };

        // Відправляємо на сервер
        fetch('/VISTAL/sub.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message); // Сповіщення для користувача
            if (data.status === 'success') {
                closeConsult(); // Закриваємо модальне вікно після успіху
                consultForm.reset(); // Очищаємо форму
            }
        })
        .catch(error => {
            console.error('Помилка:', error);
            alert('Сталася помилка при відправці.');
        });
    });
}
// --- ОБРОБКА ФОРМИ НА СТОРІНЦІ КОНТАКТІВ ---
const contactsPageForm = document.getElementById('contactsPageForm');

if (contactsPageForm) {
    contactsPageForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Забороняємо перезавантаження сторінки

        // Збираємо дані з полів
        const formData = {
            name: contactsPageForm.querySelector('input[name="name"]').value,
            phone: contactsPageForm.querySelector('input[name="phone"]').value,
            email: contactsPageForm.querySelector('input[name="email"]').value,
            message: contactsPageForm.querySelector('textarea[name="message"]').value
        };

        // Відправляємо на наш сервер
        fetch('/VISTAL/sub.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message); // Сповіщення для користувача
            if (data.status === 'success') {
                contactsPageForm.reset(); // Очищаємо форму після успіху
                // Тут ми не викликаємо closeConsult(), бо вікна немає :)
            }
        })
        .catch(error => {
            console.error('Помилка:', error);
            alert('Сталася помилка при відправці.');
        });
    });
}