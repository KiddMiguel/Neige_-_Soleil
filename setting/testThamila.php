<?php
$requete = $bdd->query("SELECT * FROM topics WHERE id_t = ".(int)$_GET['id_t']);   
if($requete->rowCount()>0)
{
    $topic = $requete->fetch();
    echo $topic['libelle_t'];
    //Calcul du nombre de page    $requete = $bdd->query("SELECT count(*) AS nb FROM posts  WHERE id_t = ".(int)$_GET['id_t']);
    $reponse = $requete->fetch();// recupere le resultat de la requete sql    $nbPost = $reponse['nb'];// le nombre de post pour ce topic    $perPage = 2;//nombre limite par page    $nbPage = ceil($nbPost/$perPage);//calcul du nombre de page    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;//numero de la page    $start = ($page-1)*$perPage;//indice de depart    //Recuperation des commentaires    $requete = $bdd->query("SELECT * FROM posts WHERE id_t = ".(int)$_GET['id_t']." LIMIT ".$start.",".$perPage);
    while($posts = $requete->fetch())
    {
        echo "<h6>".$posts['date_p']."</h6>";
        echo "<p>".htmlentities($posts['content'])."</p>";
        if(isset($_SESSION['id_u']) && $posts['id_u'] == $_SESSION['id_u'])
        {
            echo "<a href='show.php?supp=".$posts['id_p']."'>X</a>";
        }
    }
}
else{
    echo "Aucun resultats";
}
?>
<nav aria-label="Page navigation example">  <ul class="pagination">    <?php    for($i = 1; $i <= $nbPage; $i++)
    {
        echo '<li class="page-item">            <a class="page-link" href="index.php?p=topic&id_t='.(int)$_GET['id_t'].'&page='.$i.'">            '.$i.'</a>            </li>';
    }
    ?>  
    </ul></nav>
    <?php require_once "includes/footer.php"; ?>