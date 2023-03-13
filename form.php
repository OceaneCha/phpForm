<!DOCTYPE html>
<head>
    <title>Mon formulaire</title>
</head>
<body>
    <form action="thanks.php" method="post">
        <div>
            <label for="lastName">Nom :</label>
            <input type="text" id="lastName" name="userLastName">
        </div>
        <div>
            <label for="firstName">Prénom :</label>
            <input type="text" id="firstName" name="userFirstName">
        </div>
        <div>
            <label for="email">Courriel :</label>
            <input type="text" id="email" name="userEmail">
        </div>
        <div>
            <label for="phonenum">Téléphone :</label>
            <input type="text" id="phonenum" name="userPhoneNum">
        </div>
        <div>
            <label for="subjects">Sujet :</label>
            <select name="userSubject" id="subjects">
                <option value="comment">Commentaire</option>
                <option value="issue">Problème</option>
                <option value="suggestion">Suggestion</option>
                <option value="reservation">Réservation</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <input type="textarea" id="message" name="userMessage">
        </div>
        <div class="button">
            <input type="submit">Envoyer votre message</input>
        </div>
    </form>
</body>