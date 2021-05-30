<?php
// Fonction qui va charger tous les articles de mon blog

function getArticles ()

{
    require('config/connect.php');
    $req = $bdd->prepare('SELECT * FROM articles ORDER BY id DESC');
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->closeCursor();

}
?>


<?php
//Fonction qui va récupérer un article
function getArticle($id) {
require('config/connect.php');
$req = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
$req->execute(array($id));
if($req->rowCount()==1)
{
    $data = $req->fetch(PDO::FETCH_OBJ);
    return $data;


}else
header('location: index.php');
}
?>