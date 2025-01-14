<?php
    $pageTitle = "Kontakt";
    require_once './include/head.php';
    require_once './include/navbar.php';
?>

<main>
    <h1>Kontakt</h1>
    <div class="contact-form-container">
        <form action="submit_contact.php" method="POST">
        
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">E-Mail:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="message">Nachricht:</label>
                <textarea id="message" name="message" rows="6" required></textarea>
            </div>
        
            <button type="submit" class="submit-btn">Absenden</button>
    </form>
    </div>
</main>

<?php
require_once './include/footer.php';
?>