<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quoting Dojo</title>
</head>
<body>
    <h1>This is where I keep m'quotes.</h1>
    <!-- some php with if statment and for loop and then the quotes -->
    <?php if(isset($_SESSION['quotes'])){
        foreach($_SESSION['quotes'] as $quote){ ?>
        <!-- print out them quotes, name, and date info -->
        <div>
            <h3>"<?= $quote['quote']?>"</h3>
            <h5>- <?= $quote['name'] ?> at <?= date_format(date_create($quote['created_at']), 'h:i a M d Y')?></h5>
        </div>
        }
    } ?>
</body>
</html>