<?php require_once("header.php");?>
    <!--  -->
	<!-- Menyy -->
	<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Rauno</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-offset-7 col-lg-3">
		
			<form class="form-group col-xs-12 col-lg-12">
			<input class="form-control" placeholder="Nimi">
			</form>
			
			<form class="form-group col-xs-12 col-lg-8">
			<input class="form-control" placeholder="Parool">
			</form>
			
			<form class="form-group">
			<input type="button" class="btn btn-info col-xs-12 col-lg-3" value="Logi">
			</form>

		</div>
	</div>
</div>

	
<?php require_once("footer.php");?>