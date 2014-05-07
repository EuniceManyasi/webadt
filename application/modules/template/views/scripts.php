<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
	<script src="<?php echo base_url();?>assets/scripts/plugin/pace/pace.min.js"></script>

    <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
    <script src="<?php echo base_url();?>assets/scripts/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script> if (!window.jQuery) { document.write('<script src="<?php echo base_url();?>assets/scripts/libs/jquery-2.0.2.min.js"><\/script>');} </script>

    <script src="<?php echo base_url();?>assets/scripts/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script> if (!window.jQuery.ui) { document.write('<script src="<?php echo base_url();?>assets/scripts/libs/jquery-ui-1.10.3.min.js"><\/script>');} </script>

	<!-- JS TOUCH : include this plugin for mobile drag / drop touch events 		
	<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

	<!-- BOOTSTRAP JS -->		
	<script src="<?php echo base_url();?>assets/scripts/bootstrap/bootstrap.min.js"></script>

	<!-- CUSTOM NOTIFICATION -->
	<script src="<?php echo base_url();?>assets/scripts/notification/SmartNotification.min.js"></script>

	<!-- JARVIS WIDGETS -->
	<script src="<?php echo base_url();?>assets/scripts/smartwidgets/jarvis.widget.min.js"></script>
	
	<!-- EASY PIE CHARTS -->
	<script src="<?php echo base_url();?>assets/scripts/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
	
	<!-- SPARKLINES -->
	<script src="<?php echo base_url();?>assets/scripts/plugin/sparkline/jquery.sparkline.min.js"></script>
	
	<!-- JQUERY VALIDATE -->
	<script src="<?php echo base_url();?>assets/scripts/plugin/jquery-validate/jquery.validate.min.js"></script>
	
	<!-- JQUERY MASKED INPUT -->
	<script src="<?php echo base_url();?>assets/scripts/plugin/masked-input/jquery.maskedinput.min.js"></script>
	
	<!-- JQUERY SELECT2 INPUT -->
	<script src="<?php echo base_url();?>assets/scripts/plugin/select2/select2.min.js"></script>

	<!-- JQUERY UI + Bootstrap Slider -->
	<script src="<?php echo base_url();?>assets/scripts/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>
	
	<!-- browser msie issue fix -->
	<script src="<?php echo base_url();?>assets/scripts/plugin/msie-fix/jquery.mb.browser.min.js"></script>
	
	<!-- FastClick: For mobile devices -->
	<script src="<?php echo base_url();?>assets/scripts/plugin/fastclick/fastclick.js"></script>
	
	<!--[if IE 7]>
		
		<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
		
	<![endif]-->

	<!-- MAIN APP JS FILE -->
	<script src="<?php echo base_url();?>assets/scripts/general.js"></script>

	<script type="text/javascript">
		runAllForms();

		$(function() {
			// Validation
			$("#login-form").validate({
				// Rules for form validation
				rules : {
					email : {
						required : true,
						email : true
					},
					password : {
						required : true,
						minlength : 3,
						maxlength : 20
					}
				},

				// Messages for form validation
				messages : {
					email : {
						required : 'Please enter your email address',
						email : 'Please enter a VALID email address'
					},
					password : {
						required : 'Please enter your password'
					}
				},

				// Do not change code below
				errorPlacement : function(error, element) {
					error.insertAfter(element.parent());
				}
			});
		});
	</script>

	<!-- Your GOOGLE ANALYTICS CODE Below -->
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-43548732-3']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>