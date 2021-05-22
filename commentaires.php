
<h2>Commentaires</h2>

<?php
$query->closeCursor(); // Important : on libère le curseur pour la prochaine requête

$sql = "SELECT id_user, post, date_add FROM post WHERE id_acteur = :id ORDER BY date_add";
$query = $db -> prepare($sql);
$query->bindValue(":id", $_GET['id']);
$query->execute();

while ($donnees = $query->fetch())
{
?>
<p><strong><?php echo htmlspecialchars($donnees['id_user']); ?></strong> le <?php echo $donnees['date_add']; ?></p>
<p><?php echo nl2br(htmlspecialchars($donnees['post'])); ?></p>
<?php
} // Fin de la boucle des commentaires
$query->closeCursor();
?>