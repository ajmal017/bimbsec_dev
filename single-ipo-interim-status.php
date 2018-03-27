<article class="p-2 border-secondary">
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Counter</th>
	      <th scope="col">Date of Prospectus</th>
	      <th scope="col">Download Report</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	      <td>BINACOM</td>
	      <td>11th November 2017</td>
	      <td>
	      	<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#emailipo-modal" data-counter="binacom">Download</button>
	      </td>
	    </tr>
	  </tbody>
	</table>
	<p class="p-2 mt-4 border border-secondary">
		<small>
			Disclaimer:<br>
			This information is intended for general information and does not constitute or be construed as a recommendation to buy or sell the said securities by the Company or/and the SAC of BIMB Securities. It does not claim to contain all advice or information on the subject matter, nor is it a substitute for investment or legal advice. If in doubt, the investor(s) is advised to seek professional advice. Whilst care has been taken in the preparation of this information, the Company shall not be liable for any inaccuracy or incompleteness of the information contained herein. The investor(s) may refer to Securities Commission website (www.sc.com.my) for the latest List of Shariah-Compliant Securities issued by SACSC.
		</small>
	</p>
</article>

<div class="modal fade" id="emailipo-modal" tabindex="-1" role="dialog" aria-labelledby="emailipo-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="emailipo-modal-label">Download IPO Interim Shariah Status Report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="mail-send-ipo-report.php" method="post">
        <div class="modal-body">
          <div class="form-group">
            <label for="counter" class="col-form-label">Counter</label>
            <input type="text" class="form-control" id="counter" readonly value="BINACOM" name="counter`">
          </div>
          <div class="form-group">
            <label for="recipient-email" class="col-form-label">Email:</label>
            <input type="email" class="form-control" id="recipient-email" required name="email">
          </div>
          <div>
          	<p>
          		<small>
          			Disclaimer:<br>
          			This information is intended for general information  and does not constitute or be construed as a recommendation to buy or sell the said securities by the Company or/and the SAC of BIMB Securities. It does not claim to contain all advice or information on the subject matter, nor is it a substitute for investment or legal advice. If in doubt, the investor(s) is advised to seek professional advice. Whilst care has been taken in the preparation of this information, the Company shall not be liable for any inaccuracy or incompleteness of the information contained herein. The investor(s) may refer to Securities Commission website (www.sc.com.my) for the latest List of Shariah-Compliant Securities issued by SACSC.
          		</small>
          	</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Download</button>
        </div>
      </form>
    </div>
  </div>
</div>
