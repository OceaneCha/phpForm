<!DOCTYPE html>
<head>
    <title>Mon formulaire</title>
</head>
<body>
    <form action="thanks.php" method="post">
        <div>
            <label for="lastName">Nom :</label>
            <input type="text" id="lastName" name="userLastName" required>
        </div>
        <div>
            <label for="firstName">Prénom :</label>
            <input type="text" id="firstName" name="userFirstName" required>
        </div>
        <div>
            <label for="email">Courriel :</label>
            <input type="email" id="email" name="userEmail" required>
        </div>
        <div>
            <label for="phonenum">Téléphone :</label>
            <input type="text" id="phonenum" name="userPhoneNum" required>
        </div>
        <div>
            <label for="subjects">Sujet :</label>
            <select name="userSubject" id="subjects" required>
                <option value="comment">Commentaire</option>
                <option value="issue">Problème</option>
                <option value="suggestion">Suggestion</option>
                <option value="reservation">Réservation</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <input type="textarea" id="message" name="userMessage" required>
        </div>
        <div class="button">
            <input type="submit" value="Envoyer votre message" required>
        </div>
    </form>
</body>