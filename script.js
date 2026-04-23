 // Знаходимо бургер і меню за їхніми ID
        const burger = document.getElementById('burger');
        const menu = document.getElementById('menu-links');

        // Додаємо подію кліку
        burger.addEventListener('click', function() {
            // Перемикаємо клас 'active' (якщо його немає - додає, якщо є - забирає)
            menu.classList.toggle('active');
            burger.classList.toggle('active'); // ДОДАЙ ЦЕЙ РЯДОК: Тепер бургер теж знає, що він натиснутий
        });
        // Знаходимо всі кнопки "Замовити консультацію"
const consultBtns = document.querySelectorAll('.open-consult-btn');
const consultOverlay = document.getElementById('consultOverlay');
const consultModal = document.getElementById('consultModal');
const closeConsultBtn = document.getElementById('closeConsultBtn');

// Функція відкриття
function openConsult() {
    consultOverlay.style.display = 'block';
    consultModal.style.display = 'block';
}

// Функція закриття
function closeConsult() {
    consultOverlay.style.display = 'none';
    consultModal.style.display = 'none';
}

// Вішаємо подію кліку на КОЖНУ кнопку на сторінці
consultBtns.forEach(function(btn) {
    btn.addEventListener('click', openConsult);
});

// Закриття по хрестику та кліку на розмитий фон
closeConsultBtn.addEventListener('click', closeConsult);
consultOverlay.addEventListener('click', closeConsult);