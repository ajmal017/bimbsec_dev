<article class="p-4 border border-dark">
	<form class="text-center table-responsive p-4 card" style="background:#dadada">
		<table id="zakat-table" class="table w-100" style="min-width: 800px">
			<thead>
				<tr>
					<td colspan="7" style="border: none">
						<div class="form-inline d-inline">
							<b>Statement of Portfolio as at </b>
							<input class="form-control m-2" type="date" name="statement-date" placeholder="01/01/2018">
						</div>
					</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<input class="form-control" type="text" placeholder="Stock Name e.g: BIMB" required><br>
					</td>
					<td>
						<select class="form-control" onchange="toggle_sell(this)">
							<option>Hold</option>							
							<option selected>Trade</option>
						</select>
					</td>
					<td><input class="form-control" type="number" min="1"     placeholder="Unit (in lot)" 	  step="1" required onchange="calculate_row(this)"></td>
					<td>
						<input class="form-control mb-2" type="number" min="0.005" placeholder="Buying price" step="0.005" required onchange="calculate_row(this)">
						<input class="form-control" type="number" min="14" placeholder="Brokerage & Misc." step="0.01" required onchange="calculate_row(this)">
					</td>
					<td>
						<input class="form-control mb-2" type="number" min="0.005" placeholder="Selling price" step="0.005" required onchange="calculate_row(this)">
						<input class="form-control" type="number" min="14" placeholder="Brokerage & Misc." step="0.01" required onchange="calculate_row(this)">
					</td>
					<td><input class="zakat-row-amount form-control" type="number" value="0.00" step="0.01" readonly></td>
					<td><div class="btn btn-danger btn-sm" onclick="deleterow(this)"><i class="fa fa-trash" aria-hidden="true"></i></div></td>
				</tr>
			</tbody>
		</table>
		<div class="btn btn-block btn-primary" onclick="addrow()">+ ADD STOCK</div>
	</form>
	<div class="table-responsive">
		<div class="p-4 text-center m-0">
			<b>Zakat Computation</b>
		</div>
		<table class="table w-100" style="min-width: 800px">
			<tr>
				<td>Threshold / Nisaab for 2018 (Wilayah Persekutuan)</td>
				<td>:</td>
				<td>
					<div class="input-group">
						<div class="input-group-prepend">
					    	<div class="input-group-text">RM</div>
					    </div>
					    <input id="nisab" type="number" class="form-control form-control-sm" readonly value="14772">
					</div>
				</td>
			</tr>
			<tr>
				<td>Total amount</td>
				<td>:</td>
				<td>
					<div class="input-group">
						<div class="input-group-prepend">
					    	<div class="input-group-text">RM</div>
					    </div>
					    <input id="total-investment-amount" type="number" class="form-control form-control-sm" readonly>
					</div>
				</td>
			</tr>
			<tr>
				<td>Zakat factor</td>
				<td>:</td>
				<td>2.5%</td>
			</tr>
			<tr>
				<td>Zakat payable</td>
				<td>:</td>
				<td>
					<div class="input-group">
						<div class="input-group-prepend">
					    	<div class="input-group-text">RM</div>
					    </div>
					    <input id="zakat-payable" type="text" class="form-control form-control-sm" readonly>
					</div>
					<a id="pay-link" href="" class="btn-block btn btn-success mt-2 d-none">Pay via BIMBSEC (Internet Banking)</a>
				</td>
			</tr>
		</table>
	</div>
</article>

<script type="text/javascript">
	
	//Toggle sell input
	function toggle_sell(x){
	    var buy    = x.parentElement.parentElement.children[3].children[0];
	    var buy_b  = x.parentElement.parentElement.children[3].children[1];
	    var sell   = x.parentElement.parentElement.children[4].children[0];
	    var sell_b = x.parentElement.parentElement.children[4].children[1];
	    if (x.value == 'Trade') {
	    	buy.placeholder = 'Buying price';
	    	buy_b.hidden	= false;
	    	sell.placeholder= 'Selling price';
	     	sell.disabled   = false;
	     	sell_b.hidden   = false;
	    }else{
	    	buy.placeholder = 'Lowest price in 2018';
	    	buy_b.hidden	= true;
	    	sell.placeholder= '';
	    	sell.value		= '';
	     	sell.disabled   = true;
	     	sell_b.hidden   = true;
	    }

	    calculate_row(x);
	}


	function addrow(){
		// Find a <table> element with id="zakat-table":
		var table = document.getElementById("zakat-table");
		var count = $('#zakat-table tr').length + 0;


		// Create an empty <tr> element and add it to the 1st position of the table:
		var row = table.insertRow(count);

		// Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		var cell4 = row.insertCell(3);
		var cell5 = row.insertCell(4);
		var cell6 = row.insertCell(5);
		var cell7 = row.insertCell(6);

		// Add some text to the new cells:
		cell1.innerHTML = '<input class="form-control" placeholder="Stock Name e.g: BIMB" type="text" required><br>';
		cell2.innerHTML = '<select class="form-control" onchange="toggle_sell(this)"><option>Hold</option><option selected>Trade</option></select>';
		cell3.innerHTML = '<input class="form-control" type="number" min="1"     placeholder="Unit (in lot)" 	  step="1" required onchange="calculate_row(this)">';
		cell4.innerHTML = '<input class="form-control mb-2" type="number" min="0.005" placeholder="Buying price" step="0.005" required onchange="calculate_row(this)"><input class="form-control" type="number" min="14" placeholder="Brokerage & Misc." step="0.01" required onchange="calculate_row(this)">';
		cell5.innerHTML = '<input class="form-control mb-2" type="number" min="0.005" placeholder="Selling price" step="0.005" required onchange="calculate_row(this)"><input class="form-control" type="number" min="14" placeholder="Brokerage & Misc." step="0.01" required onchange="calculate_row(this)">';
		cell6.innerHTML = '<input class="zakat-row-amount form-control" type="number" value="0.00" step="0.01" readonly>';
		cell7.innerHTML = '<div class="btn btn-danger btn-sm" onclick="deleterow(this)"><i class="fa fa-trash" aria-hidden="true"></i></div>';
	}

	function deleterow(x){
		var row = x.parentElement.parentElement.rowIndex;
		document.getElementById("zakat-table").deleteRow(row);
	}

	function calculate_row(x){
		var type 	= x.parentElement.parentElement.children[1].children[0];
		var lot  	= x.parentElement.parentElement.children[2].children[0];
		var buy  	= x.parentElement.parentElement.children[3].children[0];
		var buy_b  	= x.parentElement.parentElement.children[3].children[1];
		var sell 	= 0;
		var sell_b 	= x.parentElement.parentElement.children[4].children[1];
		var amount 	= 0;
		
		// Calculate
		if (type.value == 'Trade') {
			buy_b  	= x.parentElement.parentElement.children[3].children[1];
			sell 	= x.parentElement.parentElement.children[4].children[0];
			sell_b 	= x.parentElement.parentElement.children[4].children[1];
			amount 	= ( (sell.value - buy.value ) * lot.value * 100 ) - buy_b.value - sell_b.value;
		}else{
			amount = buy.value * lot.value * 100;
		}
		

		// Show decimal points
		amount = decimalpoints(amount,2);

		//Show answer on row amount
		x.parentElement.parentElement.children[5].children[0].value = amount;	

		// Initialize for table 2 calculation
		var investment_amount 	= document.getElementById('total-investment-amount');
		var nisab 				= document.getElementById('nisab');
		var zakat_payable 		= document.getElementById('zakat-payable');
		var pay_link = document.getElementById('pay-link');
		
		// Calculate total_investment_amount
		var all_row = document.getElementsByClassName('zakat-row-amount'); 	// Get all inputs with class 'zakat-row-amount'
		var n = 0;
		for (var i = 0; i < all_row.length; i++) {
			var l = all_row[i].value;
			var m = parseFloat(l);
			n += m;
		}
		investment_amount.value = n;
		var nisab_float = parseFloat(nisab.value);

		// Calculate zakat payable */
		if ( investment_amount.value >= nisab_float ) {
			console.log('investment_amount.value = '+ investment_amount.value);
			console.log('nisab.value = '+ nisab.value);
			var z = decimalpoints( investment_amount.value * 2.5 / 100,2);
			zakat_payable.value = z;
			pay_link.classList.remove("d-none");      // Show pay button
			pay_link.classList.add("animated");      // Animate pay button
			pay_link.classList.add("fadeInDown");      // Animate pay button
			pay_link.href       = 'index.php?p=pay-zakat&amount='+zakat_payable.value;       // Generate zakat amount in link
		}else{
			zakat_payable.value = 'Zakat is not imposed because total amount not exceed the nisab';
			pay_link.classList.remove("animated");     
			pay_link.classList.remove("fadeInDown");     
			pay_link.classList.add("d-none");      // Hide pay button
			
		}

		// Create link
		
		


	}
	
	function decimalpoints(amount,n){
		amount = parseFloat(amount).toFixed(n);
		return amount;
	}

	

</script>