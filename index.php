<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Faq</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <ul>
            <li>Indroduzione</li>
            <li>Norme sulla privacy</li>
            <li>Termini di servizio</li>
            <li>Tecnologie</li>
            <li id="active">Domande frequenti</li>
        </ul>
    </header>
    <main>
        <?php include("database.php");

        
        foreach($faq as $item)
        {
            echo "<div class='single-faq'>";
            echo "<h2>".$item["question"]."</h2>";
            echo "<p>".$item["answer"]."</p>";
            echo "</div>";
        }
        
        
        
        ?>

    </main>
</body>
</html>