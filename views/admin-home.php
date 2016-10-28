<div class="col-sm-1"></div>
<div class="col-sm-10">
	<form class="form-inline" method="post" action="">
	  <div class="form-group">
	    <input type="text" class="form-control film-insert-inp" name="film" placeholder="Film name">
	  </div>
	  <button type="submit" class="btn btn-success film-insert-btn" name="insert">Insert</button>
	</form>
	<div class="panel error-or-success" style="width: 200px;display: none;margin: 20px 0;">
    	<div class="panel-body">Panel Content</div>
  	</div>
	<div class="container">
	  <table class="table table-bordered table-hover">
	    <thead>
	      <tr>
	        <th class="col-sm-4">Film</th>
	        <th class="col-sm-4">Votes</th>
	        <th class="col-sm-1">Update</th>
	        <th class="col-sm-1">Delete</th>
	      </tr>
	    </thead>
	    <tbody>
	    <?php foreach($this->allFilms as $allFilms): ?>
	      <tr>
	        <td><input class="votes-inp film-name-inp" type="text" value="<?=$allFilms['film_name'];?>" /></td>
	        <td><input class="votes-inp film-votes-inp" type="number" value="<?=$allFilms['votes'];?>" min="0" /></td>
	        <td><button type="button" class="btn btn-success film-update-btn" name="<?=$allFilms['id'];?>">Update</button></td>
	        <td><span class="glyphicon glyphicon-remove del-film" data-toggle="modal" data-target="#myModal" data="<?=$allFilms['id'];?>"></span></td>
	      </tr>
	    </tbody>
	    <?php endforeach; ?>
	  </table>
	</div>
</div>
<div class="col-sm-1"></div>