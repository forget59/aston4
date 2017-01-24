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
      header('Location: /astonS4/aston4/tp2/?controller=books&action=index');
    }
    public function add(){
      require_once('views/books/add.php');
      if (!empty($_POST['titre'])&&!empty($_POST['pages'])&&!empty($_POST['categorie'])){
        $book = Book::add($_POST['titre'], $_POST['pages'], $_POST['categorie']);
        header('Location: /astonS4/aston4/tp2/?controller=books&action=index');
      }
    }

    public function update(){
      require_once('views/books/update.php');
      if (!empty($_POST['titre'])||!empty($_POST['pages'])||!empty($_POST['categorie'])){
        $book = Book::update($_POST['titre'], $_POST['pages'], $_POST['categorie'], $_GET['id']);
        header('Location: /astonS4/aston4/tp2/?controller=books&action=index');
      }
    }
}
?>
