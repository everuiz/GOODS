<?php 	
		include 'layouts/layout.php';
 ?>
 <div class="container">
  	<br>
  	<form action="insert.php" class="form-horizontal" method="post" >
  		<fieldset>
  			<div class="form-group has-succes">
  					<label for="nombre" class="control-label col-md-2">Name:</label>
  					<div class="col-md-10">
  						<input type="text" class="form-control" id="nombre" name="name">
  					</div>
  			</div>	

  		 	<div class="form-group has-succes">
  					<label for="Description" class="control-label col-md-2">Description</label>
  					<div class="col-md-10">
  						<input type="text" class="form-control" id="description"  name="description">
  					</div>
  			</div>

  			<div class="form-group has-succes">
  					<label for="Value" class="control-label col-md-2">Value</label>
  					<div class="col-md-10">
  						<input type="text" class="form-control" id="value"  name="value">
  					</div>
  			</div>

		<div class="form-group">
			<div class="col-md-2 col-md-offset-2">
				<input type="submit" name="" class="btn btn-primary" value="Enviar">
			</div>
		</div>
  		</fieldset>
  		

  	</form>
  </div>
