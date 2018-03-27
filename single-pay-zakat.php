<article class="p-2 border border-dark">
	<h3>Pay Zakat</h3>
	<form action="vendor/billplz/billplzpost.php" method="post">
		<div class="form-group row mb-3">
	        <label class="col-md-3">Fullname</label>
	        <div class="col-md-9">
	        	<input class="form-control" type="text" name='nama' required autofocus>
	        </div>
	    </div>
	    <div class="form-group row mb-3">
	        <label class="col-md-3">MyKad / Registration ID</label>
	        <div class="col-md-9">
	        	<input class="form-control" type="text" name="reference_1">	
	        </div>
	    </div>
	    <div class="form-group row mb-3">
	        <label class="col-md-3">E-mail</label>
	        <div class="col-md-9">
	        	<input class="form-control" type="text" name='email' required>	
	        </div>
	    </div>
	    <div class="form-group row mb-3">
	        <label class="col-md-3">Phone No.</label>
	        <div class="col-md-9">
	        	<input class="form-control" type="text" name="telefonbimbit">	
	        </div>
	    </div>
	    <div class="form-group row mb-3">
	        <label class="col-md-3">Zakat Payable</label>
	        <div class="col-md-9">
	        	<div class="input-group">
	        		<div class="input-group-prepend">
				    	<div class="input-group-text">RM</div>
				    </div>
				    <input class="form-control" type="number" name="amaun" value="<?php echo($_GET['amount']) ?>" readonly>
	        	</div>
	        </div>
	    </div>
	    <div class="d-none mb-3">
	        <input class="form-control" type="text" name="description" value="Zakat on Shares">
	        <input class="form-control" type="text" name="reference_label_1" value="MyKad / Reg. ID">
	    </div>
	    <button type="submit" class="btn btn-success btn-lg btn-block">Pay Now</button>
	</form>
</article>