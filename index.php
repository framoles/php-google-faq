<?php

include("database.php");

foreach($faq as $item)
{
    echo "<h2>".$item["question"]."</h2>";
    echo "<p>".$item["answer"]."</p>";
}


?>