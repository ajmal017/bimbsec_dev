<?php include_once('head.php'); ?>
  <body id="bootstrap-override">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11&appId=685127985210003';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

      <?php 

        include_once('navbar.php');

        if( !isset($_GET['p']) ){
          include_once('main-slider.php'); 
          include_once('page-main.php');
        }else{
          include_once('page-content.php');
        }
      
        
        include_once('footer.php'); 

      ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="vendor/jquery/jquery.js"></script>
    <script src="vendor/popper/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.js"></script>

    <!-- Tooltip -->
    <script>
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>

    <!-- WhatsHelp.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                facebook: "108590575918798", // Facebook page ID
                whatsapp: "+60145102862", // WhatsApp number
                telegram: "ashrafmisrang",
                email: "helpdesk@bimbsec.com.my", // Email
                call: "Helpdesk: +0326131664 +0326131665", // Call phone number
                company_logo_url: "https://www.bimbsec.com.my/bimbsec/v3/image/logo-bimbsec.png", // URL of company logo (png, jpg, gif)
                greeting_message: "Assalamualaikum and hi, Thank you for visiting our website. <br>How can we help you?</br> <br>Please message us for an assistance.", // Text of greeting message
                call_to_action: "Contact us", // Call to action
                button_color: "<?php echo $setting['theme-color'] ?>;", // Color of button
                position: "right", // Position may be 'right' or 'left'
                order: "facebook,whatsapp,telegram,email,call" // Order of buttons
            };
            var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /WhatsHelp.io widget -->

    <!-- Modal for Emailing IPO -->
    <script type="text/javascript">
      $('#emailipo-modal').on('shown.bs.modal', function () {
        $('#recipient-email').trigger('focus')
      })
    </script>

    <!-- Clock at header -->
    <script type="text/javascript" src="vendor/custom/clock.js"></script>

    <!-- Show zakat button -->
    <script type="text/javascript">
      function showbutton(){
        document.getElementById('zakat-redirect-button').removeAttribute("hidden");
      }
    </script>

    <!-- Check user agent / browser -->
    <script type="text/javascript">
    	function is_ie() {

		    var ua = window.navigator.userAgent;
		    var msie = ua.indexOf("MSIE ");

		    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))  // If Internet Explorer, return true
		    {
		        return true;
		    }
		    else  // If another browser, return false
		    {
		        return false;
		    }

		}

	    $(function () {
	    	if (is_ie()) {
	    		var c = $('#leader-board').find('div.row > div').removeClass('d-flex flex-column');
	    	}
	    })

    </script>

    <!-- Script for Leadership tab -->
	<script type="text/javascript">
		if ( window.location.hash ) {
			var type = window.location.hash.substr(1);
			openCity(event, type);
		}else{
			show_default();
		}

		function show_default(){
			// Declare all variables
		    var i, tabcontent, tablinks;

		    // Get all elements with class="tabcontent" and hide them
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }

		    // Get all elements with class="tablinks" and remove the class "active"
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }

		    // Show the current tab, and add an "active" class to the link that opened the tab
		    document.getElementById('bod').style.display = "block";
		    tablinks[0].className += " active";
		}

		function openCity(evt, cityName) {
		    // Declare all variables
		    var i, tabcontent, tablinks;

		    // Get all elements with class="tabcontent" and hide them
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }

		    // Get all elements with class="tablinks" and remove the class "active"
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }

		    // Show the current tab, and add an "active" class to the link that opened the tab
		    document.getElementById(cityName).style.display = "block";
		    evt.currentTarget.className += " active";
		}
	</script>

	<!-- Zakat redirection -->
	<script type="text/javascript">
		$('#zakat-redirect-button').click(function(){
			var link = $(this).parent().parent().find('#state').find(":selected").val();
			window.open(link,'_blank');
		});
	</script>

	<!-- Autofocus for search box -->
	<script type="text/javascript">
		$('#search-modal').on('shown.bs.modal', function () {
		  $('#search-input').trigger('focus')
		})
	</script>
 
  <!-- Script for Leadership modal -->
  <script type="text/javascript">
    $('#modal').on('show.bs.modal', function (event) {
      var button  = $(event.relatedTarget); // Button that triggered the modal
      var bio     = button.data('bio'); // Extract info from data-* attributes
      var name    = button.data('name');
      var img     = button.data('img');
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this);
      document.getElementById('bio').innerHTML = bio;
      modal.find('#name').text(name);
      modal.find('#img').attr('src',img);
    })

    $('.carousel').carousel({
      interval: 10000
    })

  </script>

  <!-- Update news feed -->
  <script type="text/javascript">
    function loadlink(){
        $('#newsbox').load('widget-news.php');
        $('#newsbox-all').load('widget-news.php?p=all');
    }

    loadlink(); // This will run on page load
    setInterval(function(){
        loadlink() // this will run after every 5 seconds
    }, 5000);

    $('.nav-item.dropdown').click(function(event) {
      var a = this.find('a').html();
      alert(a);
    });
  </script>

  </body>
</html>