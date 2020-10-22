<?php
	include_once("header.php");
?>

<!-- Task Adding Form -->
<div class="row">
	<form class="col-8 shadow rounded add">
		<div class="form-group">
			<label>Title</label>
			<input type="text" class="form-control" name="title" placeholder="Enter Title">
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea type="text" class="form-control" name="description" placeholder="Enter Description" rows="3"></textarea>
		</div>

		<div class="form-group">
			<label>Category</label>
			<input type="text" class="form-control" value="" disabled>
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

<?php
	include_once("footer.php");
?>