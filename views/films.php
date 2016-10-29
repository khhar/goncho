<div class="col-sm-1"></div>
<div class="col-sm-10">
	<div class="container">
	  <table class="table table-bordered table-hover">
	    <thead>
	      <tr>
	        <th class="col-sm-4">Film</th>
	        <th class="col-sm-4">Votes</th>
	      </tr>
	    </thead>
	    <tbody>
	    <?php foreach($this->allFilms as $allFilms): ?>
	      <tr>
	        <td><?=$allFilms['film_name'];?></td>
	        <td><?=$allFilms['votes'];?></td>
	      </tr>
	    </tbody>
	    <?php endforeach; ?>
	  </table>
	</div>
</div>
<div class="col-sm-1"></div>