<form action="?controller=books&action=update&id=<?php echo $_GET['id'] ?>" method="post">
 <div class="form-group">
   <label class="control-label col-sm-2" for="titre">Titre:</label>
   <div class="col-sm-10">
     <input type="text" class="form-control" id="titre" name="titre" placeholder="Enter Title if you want to change it">
   </div>
 </div>
 <div class="form-group">
   <label class="control-label col-sm-2" for="pages">Pages:</label>
   <div class="col-sm-10">
     <input type="text" class="form-control" id="pages" name="pages" placeholder="Enter password if you want to change it">
   </div>
 </div>
 <div class="form-group">
    <label class="control-label col-sm-2" for="categorie">Categorie:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="categorie" name="categorie" placeholder="Enter password if you want to change it">
    </div>
  </div>
 <div class="form-group">
   <div class="col-sm-offset-2 col-sm-10">
     <button type="submit" class="btn btn-default">Submit</button>
   </div>
 </div>
</form>
