
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style-inscription.css"> 
</head>
<body>
    <?php include "morceaux/header.php"; ?>
<div class="container">

    <div class="loginbox">
        <form method="post" action="traitements/traitement-inscription.php" id="formlogin">
           
            <h1>Inscription</h1>

            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Choisissez votre pseudo" name="pseudo" required />
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Choisissez votre mot de passe" name="password" required /> 
            </div>

            <div class="textbox">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Indiquez votre email" name="email" required /> 
            </div>

            <div class="inscription">
                <input type="submit" value="S'INSCRIRE" />
            </div>

        
        </form>
    </div>
</div>

<script src="https://kit.fontawesome.com/03d91b4c02.js" crossorigin="anonymous"></script>
</body>
</html>