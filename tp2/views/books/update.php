<form action="?controller=books&action=update&id=<?php echo $_GET['id'] ?>" method="post">
  <p>Titre : <input type="text" name="titre" value="John"/></p>
  <p>Pages : <input type="text" name="pages" value="John"/></p>
  <p>Categorie : <input type="text" name="categorie" value="John"/></p>
 <p><input type="submit" value="OK"></p>
</form>
<?php echo $_GET['titre'] ?>
<?php echo $_GET['pages'] ?>
<?php echo $_GET['categorie'] ?>
