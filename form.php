<?php
echo "Hello World";
?>

<?php
// Sjekker hvilken metode som ble brukt for å sende data til siden
// "POST" brukes vanligvis når vi sender data fra et skjema
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Henter verdien fra input-feltet med name="username"
    // $_POST er en global variabel som inneholder data sendt med POST
    $username = $_POST["username"];

    // htmlspecialchars() gjør input trygg å vise i nettleseren
    // Hindrer at brukeren kan skrive HTML/JavaScript (sikkerhet)
    echo "Du skrev: " . htmlspecialchars($username) . "<br>";
}
?>

<!-- HTML-skjema som sender data til samme side -->
<form method="POST">

    <!-- Input-felt der brukeren kan skrive inn brukernavn -->
    <!-- name="username" må matche $_POST["username"] i PHP -->
    <input type="text" name="username" placeholder="Brukernavn">

    <!-- Knapp for å sende skjemaet -->
    <button type="submit">Send</button>
</form>