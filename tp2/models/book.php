<?php
  class Book {
    public $id;
    public $author;
    public $pages;
    public $content;

    public function __construct($id, $author, $pages, $content) {
      $this->id      = $id;
      $this->author  = $author;
      $this->pages = $pages;
      $this->content = $content;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM livres');

      foreach($req->fetchAll() as $book) {
        $list[] = new Book($book['id'], $book['titre'], $book['pages'], $book['categorie']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM livres WHERE id = :id');
      $req->execute(array('id' => $id));
      $book= $req->fetch();

      return new Book($book['id'], $book['titre'], $book['pages'], $book['categorie']);
    }

    public static function remove($id) {
      $db = Db::getInstance();
      $id = intval($id);
      $req = $db->prepare('DELETE FROM livres WHERE id = :id');
      $req->execute(array('id' => $id));
    }

    public static function add($titre, $pages, $categorie){
      $db = Db::getInstance();
      $id = intval($id);
      $req = $db->prepare("INSERT INTO `livres` (`id`, `titre`, `pages`, `categorie`) VALUES (NULL, '".$titre."', '".$pages."', '".$categorie."')");
      $req->execute(array("titre'" => $titre
                          ,"pages" => $pages
                          ,"categorie" => $categorie));
    }

    public static function update($titre, $pages, $categorie, $id){
      $db = Db::getInstance();
      $req = $db->prepare("UPDATE `livres` SET `titre` = '".$titre."', `pages` = '".$pages."', `categorie` = '".$categorie."' WHERE `livres`.`id` = ".$id.";");
      $req->execute();
    }
}
?>
