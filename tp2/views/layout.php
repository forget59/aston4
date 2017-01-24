<DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <header>
      <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default navbar-inverse" role="navigation">
				<div class="navbar-header">

					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="/astonS4/aston4/tp2">Home</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="?controller=books&action=index">Books</a>
						</li>
						<li>
							<a href="?controller=books&action=add">Add</a>
						</li>
					</ul>
				</div>

			</nav>
		</div>
	</div>
</div>
    </header>

    <?php require_once('routes.php'); ?>

    <footer>

    </footer>
  <body>
<html>
