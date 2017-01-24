<div class="container">
  <h2>Book Table</h2>
  <p>Here is a list of all books:</p>
  <table class="table">
    <thead>
      <tr>
        <th>Autheur</th>
        <th>Voir</th>
        <th>Mettre a jour</th>
        <th>Supprimer</th>
      </tr>
    </thead>
    <tbody>
  <?php foreach($books as $book) { ?>
    <tr>
      <td><?php echo $book->author; ?></td>
      <td><a href='?controller=books&action=show&id=<?php echo $book->id; ?>'>See content</a></td>
      <td><a href='?controller=books&action=update&id=<?php echo $book->id; ?>'>Update content</a></td>
      <td><a href='?controller=books&action=remove&id=<?php echo $book->id; ?>'>Remove content</a></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</div>
