<p>Here is a list of all books:</p>
<?php foreach($books as $book) { ?>
  <p>
    <?php echo $book->author; ?>
    <a href='?controller=books&action=show&id=<?php echo $book->id; ?>'>See content</a>
    <a href='?controller=books&action=remove&id=<?php echo $book->id; ?>'>Remove content</a>
  </p>
<?php } ?>
