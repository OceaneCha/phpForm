<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Mon formulaire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <header class="container-fluid bg-warning">
        <h1>Mon formulaire<br>
        <small>Give us your opinion!</small></h1>
    </header>
    <form class="container" action="thanks.php" method="post">
        <div class="form-group">
            <div>
                <label for="lastName">Nom :</label>
                <input type="text" class="form-control" id="lastName" name="userLastName" required>
            </div>
            <div>
                <label for="firstName">Prénom :</label>
                <input type="text" class="form-control" id="firstName" name="userFirstName" required>
            </div>
        </div>
        <div>
            <label for="email">Courriel :</label>
            <input type="email" class="form-control" id="email" name="userEmail" required>
        </div>
        <div>
            <label for="phonenum">Téléphone :</label>
            <input type="text" class="form-control" id="phonenum" name="userPhoneNum" required>
        </div>
        <div>
            <label for="subjects">Sujet :</label>
            <select name="userSubject" class="form-control" id="subjects" required>
                <option value="comment">Commentaire</option>
                <option value="issue">Problème</option>
                <option value="suggestion">Suggestion</option>
                <option value="reservation">Réservation</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <input type="textarea" class="form-control" id="message" name="userMessage" required>
        </div>
        <div class="button">
            <input class="btn btn-default" type="submit" value="Envoyer votre message" required>
        </div>
    </form>
</body>