<?php include_once 'head.php'; ?>
<body>
	<div class="card">
		<div class="card-header">
			Settings
		</div>
		<div class="card-body">
			<form action="save.php" method="post">
				<div class="mb-2">
					<label>Theme color: </label>
					<div class="input-group">
						<div class="input-group-prepend">
				          <div class="input-group-text">
				          	<input class="color-panel" type="color" name="theme-color" value="<?php echo $setting['theme-color'] ?>">
				          </div>
				        </div>
				        <input type="text" name="themes-color" class="color-code form-control" value="<?php echo $setting['theme-color'] ?>">
				    </div>
				</div>
				<div class="mb-2">
					<label>Accent color: </label>
					<div class="input-group">
						<div class="input-group-prepend">
				          <div class="input-group-text">
				          	<input class="color-panel" type="color" name="accent-color" value="<?php echo $setting['accent-color'] ?>">
				          </div>
				        </div>
				        <input type="text" name="accents-color" class="color-code form-control" value="<?php echo $setting['accent-color'] ?>">
				    </div>
				</div>
				<div class="mb-2">
					<label>Theme Link color: </label>
					<div class="input-group">
						<div class="input-group-prepend">
				          <div class="input-group-text">
				          	<input class="color-panel" type="color" name="theme-link-color" value="<?php echo $setting['theme-link-color'] ?>">
				          </div>
				        </div>
				        <input type="text" name="themes-link-color" class="color-code form-control" value="<?php echo $setting['theme-link-color'] ?>">
				    </div>
				</div>
				<div class="mb-2">
					<label>Accent Link color: </label>
					<div class="input-group">
						<div class="input-group-prepend">
				          <div class="input-group-text">
				          	<input class="color-panel" type="color" name="accent-link-color" value="<?php echo $setting['accent-link-color'] ?>">
				          </div>
				        </div>
				        <input type="text" name="accents-link-color" class="color-code form-control" value="<?php echo $setting['accent-link-color'] ?>">
				    </div>
				</div>
				<button type="submit" class="form-control mt-2 btn btn-primary">Save</button>
				<button type="Reset" class="form-control mt-2 btn btn-danger">Reset</button>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		alert('Ysa');
		document.getElementsByClassName('color-panel').addEventListener("change", function(){
			alert('Y');
		});
	</script>
</body>
</html>