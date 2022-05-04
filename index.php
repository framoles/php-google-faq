<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Faq</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="up">
            <img src="https://cdn.freebiesupply.com/images/large/2x/google-logo-transparent.png" alt="logo">
            <span>Privacy e termini</span>
        </div>
        <div>
        <ul>
            <li>Indroduzione</li>
            <li>Norme sulla privacy</li>
            <li>Termini di servizio</li>
            <li>Tecnologie</li>
            <li class="active">Domande frequenti</li>
        </ul>
        </div>
    </header>
    <main>
        <?php include("database.php");

        
        foreach($faq as $item)
        {
            echo "<div class=single-faq>";
            echo "<h2>".$item["question"]."</h2>";
            echo "<div>".$item["answer"]."</div>";
            echo "</div>";
        };
        
        
        
        ?>

    </main>
</body>
</html>