<aside class="bg-accent p-2">
	<h3>Zakat on Shares</h3>
	<img src="image/zakat-hand.jpg" class="w-100">
	<p>Calculate the amount of zakat on shares to be paid easily by using our Zakat Calculator</p>
	<form class="row">
		<div class="col-8">
			<select id="state" class="form-control mb-2" name="link" onchange="showbutton()">
				<option selected disabled>Choose the state...</option>
				<option value="http://www.maij.gov.my/cal/index.html">01 - Johor</option> <!-- Zakat saham sama dengan zakat pendapatan -->
				<option value="https://jom.zakatkedah.com.my/kirazakat/tabkirazakat.php?op=1&ibx=03">02 - Kedah</option>
				<option value="http://www.e-maik.my/portal/index.php/ms/e-perkhidmatan-kami/kalkulator-zakat-pendapatan">03 - Kelantan</option> <!-- Tiada kalkulator khas untuk zakat saham -->
				<option value="http://www.izakat.com/">04 - Melaka</option> <!-- Tiada kalkulator -->
				<option value="http://www.zakatns.com.my/v5/web/saham.php">05 - Negeri Sembilan</option>
				<option value="http://www.zakatpahang.my/v3/index.php/2014-09-04-08-53-30/zakat-saham">06 - Pahang</option>
				<option value="http://www.maiamp.gov.my/maiamp2/index.php/zakat/kalkulator/kalkulator-zakat-saham.html">07 - Perak</option>
				<option value="http://maips.gov.my/index.php/sudut-ilmu/zakat-001/pengenalan-zakat">08 - Perlis</option> <!-- Tiada kalkulator -->
				<option value="http://www.zakatpenang.com/zpp/index.php/2013-06-30-10-54-31/2013-06-30-10-59-01/kalkulator-zakat-saham">09 - Pulau Pinang</option>
				<option value="https://ezo.zakatselangor.com.my/taksiran/assessment_saham.asp">10 - Selangor</option>
				<option value="http://maidam.gov.my/index.php/index.php/perkhidmatan-kami/kalkulator-zakat">11 - Terengganu</option> <!-- Tiada kalkulator khas untuk zakat saham-->
				<option value="http://www.zakat.sabah.gov.my/">12 - Sabah</option> <!-- Website masih dalam fasa pembinaan -->
				<option value="http://www.tbs.org.my/www/?page=94">13 - Sarawak</option> <!-- Tiada kalkulator -->
				<option value="http://www.zakat.com.my/info-zakat/jenis-jenis-zakat/zakat-saham/">14 - Wilayah Persekutuan</option>
			</select>	
		</div>
		<div class="col-4">
			<button id="zakat-redirect-button" hidden class="form-control mb-2" type="button">Go</button>
		</div>
	</form>
</aside>