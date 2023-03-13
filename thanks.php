<?php

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // ensuring we're dealing with POST
    foreach($_POST as $key => $post) { // looping into $_POST
        $trimPost = trim($post); // trimming values
        if (empty($trimPost)) { // if it's empty, we have an error, all fields are required
            switch ($key) { // seeking which error we have
                case 'userFirstName':
                    $errors[] = "Le prénom doit être renseigné.";
                    break;
                case 'userLastName':
                    $errors[] = "Le nom de famille doit être renseigné.";
                    break;
                case 'userEmail':
                    $errors[] = "Le courriel doit être renseigné.";
                    break;
                case 'userSubject':
                    $errors[] = "Le sujet doit être renseigné.";
                    break;
                case 'userPhoneNum':
                    $errors[] = "Le téléphone doit être renseigné.";
                    break;
                case 'userMessage':
                    $errors[] = "Le message doit être renseigné.";
                    break;
                default:
                    $errors[] = "Incorrect POST value.";
                }
        }
    }

    if (!filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL)) { // validating email syntax
        $errors[] = "L'email est invalide.";
    }

    /* if (empty($errors)) { // if no errors, we go on
        header("Location: thanks.php");
    } */

}
?>
<!DOCTYPE html>
    <head>
        <title>Merci pour votre message, <?=$_POST['userFirstName']?></title>
    </head>
    <body>
        
        <?php
            if (count($errors) > 0) : ?>
                <div>
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?=$error?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
        <?php endif; ?>
        <?php
            if (count($errors) == 0) : ?>
                <p>Merci <?=$_POST['userFirstName'].' '.$_POST['userLastName']?> de nous avoir contactés à propos de "<?=$_POST['userSubject']?>".</p>
                <p>Un de nos conseillers vous contactera soit à l'adresse <?=$_POST['userEmail']?> ou par téléphone au <?=$_POST['userPhoneNum']?> dans les plus brefs délais pour traiter votre demande :</p>
                <p><?=$_POST['userMessage']?></p>
            <?php endif; ?>
    </body>
</html>