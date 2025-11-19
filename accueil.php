<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de scratch</title>

    <!-- empty data URI to prevent the browser from getting the favicon file and showing 404-->
    <link rel="icon" href="data;,">
    
</head>
<header><strong>Voici Mon Header, le même sur toutes les pages</strong></header>
<body>
    <p>&nbsp;</p>
<form action = "" method = "get">

    <fieldset>
        <legend>Coordonnées</legend>

            <label for="name">Nom</label>
            <input type="text" id="name" name="name" placeholder="Votre nom" required>
            <label for="firstname">Prénom</label>
            <input type="text" id="firstname" name="firstname" placeholder="Votre prénom" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Votre email" required>
   </fieldset>
    <fieldset>
        <legend>Texte libre</legend>
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Votre message" required></textarea>

    </fieldset>

    <fieldset>
        <legend>Liste déroulante</legend>

            <select id="films" name="films">
                <option value="batman">Batman</option>
                <option value="seigneur-des-anneaux">Le seigneur des anneaux</option>
                <option value="titanic">Titanic</option>
            </select>

    </fieldset>

    <fieldset>
        <legend>check-box</legend>

            <label for="date-expo-1">1er au 30 Avril</label>
            <input type="checkbox" id="date-expo-1" name="date-expo-1">
            <label for="date-expo-2">1er au 31 Mai</label>
            <input type="checkbox" id="date-expo-2" name="date-expo-2">
            <label for="date-expo-3">1er au 30 Juin</label>
            <input type="checkbox" id="date-expo-3" name="date-expo-3">
            <label for="date-expo-4">1er au 31 Juillet</label>
            <input type="checkbox" id="date-expo-4" name="date-expo-4">
            <label for="date-expo-5">1er au 31 Août</label>
            <input type="checkbox" id="date-expo-5" name="date-expo-5">
    </fieldset>

    <input type="submit" value="Envoyer">

</form>
<p>&nbsp;</p>
<footer><strong>Mon Footer, le même sur toutes les pages</strong></footer>
><script src="index.js"></script>
    
</body>
</html>