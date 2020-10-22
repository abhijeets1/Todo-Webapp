<?php
	include_once("header.php");
?>
<div class="row justify-content-around">

	<?php include_once("sidebar.php"); ?>

	<!-- Content -->
	<div class="col-10 col-md-9 content">

		<!-- Task 1 -->
		<div class="card row shadow mb-3">
		  <div class="card-body">
		    <p class="card-title"><b>Complete Work</b></p>
		    <p class="card-text">
		    	Google LLC is an American multinational technology company that specializes in Internet-related services and products.
			</p>
		    <div class="btn-group">
				<a href="done.php" class="btn btn-primary btn">
					<?php include("icons/check.php"); ?>
				</a>
				<a href="delete.php" class="btn btn-danger btn">
					<?php include("icons/trash.php"); ?>
				</a>
				<a href="edit.php" class="btn btn-secondary btn">
					<?php include("icons/pencil.php"); ?>
				</a>
			</div>
		  </div>
		</div>

		<!-- Task 2 -->
		<div class="card row shadow mb-3">
		  <div class="card-body">
		    <p class="card-title"><b>Complete Work</b></p>
		    <p class="card-text">
		    	Google LLC is an American multinational technology company that specializes in Internet-related services and products.
			</p>
		    <div class="btn-group">
				<a href="done.php" class="btn btn-primary btn">
					<?php include("icons/check.php"); ?>
				</a>
				<a href="delete.php" class="btn btn-danger btn">
					<?php include("icons/trash.php"); ?>
				</a>
				<a href="edit.php" class="btn btn-secondary btn">
					<?php include("icons/pencil.php"); ?>
				</a>
			</div>
		  </div>
		</div>

		<!-- Task 3 -->
		<div class="card row shadow mb-3">
		  <div class="card-body">
		    <p class="card-title"><b>Complete Work</b></p>
		    <p class="card-text">
		    	Google LLC is an American multinational technology company that specializes in Internet-related services and products.
			</p>
		    <div class="btn-group">
				<a href="done.php" class="btn btn-primary btn">
					<?php include("icons/check.php"); ?>
				</a>
				<a href="delete.php" class="btn btn-danger btn">
					<?php include("icons/trash.php"); ?>
				</a>
				<a href="edit.php" class="btn btn-secondary btn">
					<?php include("icons/pencil.php"); ?>
				</a>
			</div>
		  </div>
		</div>

	</div>

	<div class="shadow rounded add-task-button">
		<form action="add-task.php" method="post">
			<input type="text" name="category" value="category" hidden>
			<button type="submit" class="btn btn-success btn-lg">+</button>
		</form>
	</div>

</div>
<?php
	include_once("footer.php");
?>