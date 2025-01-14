<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST['message']);
    
    if ($name && $email && $message) {
        echo "<p>Vielen Dank für Ihre Nachricht, $name!</p>";
    }
     else {
        echo "<p>Bitte füllen Sie alle Felder aus.</p>";
    }}
else {
    echo "<p>Bitte verwenden Sie das Kontaktformular.</p>";
    }
?>