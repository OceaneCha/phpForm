<!DOCTYPE html>
<head>
    <title>Merci pour votre message, <?=$_POST['userFirstName']?></title>
</head>
<body>
    <p>Merci <?=$_POST['userFirstName'].' '.$_POST['userLastName']?> de nous avoir contactés à propos de "<?=$_POST['userSubject']?>".</p>
    <p>Un de nos conseillers vous contactera soit à l'adresse <?=$_POST['userEmail']?> ou par téléphone au <?=$_POST['userPhoneNum']?> dans les plus brefs délais pour traiter votre demande :</p>
    <p><?=$_POST['userMessage']?></p>

    <?php var_dump($_POST); ?>
</body>