<?php
  class BooksController {
    public function index() {
      $books = Book::all();
      require_once('views/books/index.php');
    }

    public function show() {
      if (!isset($_GET['id']))
        return call('pages', 'error');

      $book = Book::find($_GET['id']);
      require_once('views/books/show.php');
    }

    public function remove() {
      if (!isset($_GET['id']))
        return call('pages', 'error');

      $book = Book::remove($_GET['id']);
      header('Location: /localhost/astonS4/aston4/tp2/?controller=books&action=index');
    }
    public function add(){
      require_once('views/books/add.php');
      if (!empty($_POST['titre'])&&!empty($_POST['pages'])&&!empty($_POST['categorie'])){
        echo "titre : ".$_POST['titre']." pages : ".$_POST['pages']." categorie : ".$_POST['categorie'];
        header('Location: /localhost/astonS4/aston4/tp2/?controller=books&action=index');
    }
  }
}
?>
