<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quoting Dojo</title>
</head>
<body>
    <!-- gonna need an if statment and for loop and a form for adding quotes -->
    <?php if(isset($_SESSION['errors'])){
        foreach($_SESSION['errors'] as $error){ ?>
        <p><?= $error ?></p>
    <?php }
    }   ?>
    <form action="process.php" method="post">
        <label for="name">Your name:</label>
        <input id="name" type="text" name="name">
        <label for="quote">Your quote:</label>
        <textarea id="quote" name="quote"></textarea>
        <input type="submit" value="Add quote">
    </form>
    <a href="/main.php"><button>Go to Quotes!</button></a>
</body>
</html>