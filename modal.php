<div class="consult-modal-overlay" id="consultOverlay" style="display: none;"></div>

<div class="consult-modal-window" id="consultModal" style="display: none;">
    <div class="modal-content">
        <span class="close-consult-btn" id="closeConsultBtn">&times;</span>
        
        <h2>Зв'яжіться з нами</h2>
        <p>Заповніть форму нижче, і ми зв'яжемося з вами протягом 24 годин.</p>
        
        <form id="consultForm" class="contact-form">
            <input type="text" name="name" placeholder="Ваше ім'я *" required>
            <input type="tel" name="phone" placeholder="+38 (0**) *** ****" required>
            <input type="email" name="email" placeholder="Ваш Email">
            <textarea name="message" placeholder="Напишіть Ваше питання" rows="4"></textarea>
            
            <div class="checkbox-group">
                <input type="checkbox" id="agree" required>
                <label for="agree">Я погоджуюся з <a href="inform.php">умовами надання послуг та політикою конфідеційності.</a>.</label>
            </div>
    
            <button type="submit" class="submit-btn">Надіслати запит</button>
        </form>
    </div>
</div>