
<?php 
        
    try 
    {
        $bdd = new PDO("mysql:localhost=HOST;dbname=blog;charset=utf8", "root", "root");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    ?>
