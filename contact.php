<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<title>Contact | Ready Set Go</title>
<meta name="description" content="">

<script src="/_assets/js/jquery.maskedinput.js"></script>

	<script type="text/javascript">
	jQuery(function($){
	  $("input[name='phone_day']").mask("(999) 999-9999");
	});
	</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<section>

	<div class="inner">
	
		<div id="contact">

			<h1 class="sub">Contact</h1>

		</div><!--contact-->

	</div><!--inner-->

</section>

<section class="content proof">
	
	<div class="inner">

		<div class="content-container">

		
		<div class="form">

		    <?php
		        $name = $_REQUEST['name'] ;
		        $email = $_REQUEST['email'] ;
		        $phone = $_REQUEST['phone'] ;
		        $desc = $_REQUEST['desc'] ;
		        if (isset($_POST['submit'])) {
		          $to = 'lindseyemaddox@gmail.com';
		          $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
		          $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
		          $headers .= "MIME-Version: 1.0\r\n";
		          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		          $message = '<html><body>';
		          $message .= 'Name: '.$name.'<br>';
		          $message .= 'Email: '.$email.'<br>';
		          $message .= 'Phone: '.$phone.'<br>';
		          $message .= 'How May We Help You: '.$desc.'<br>';
		          $message .= '</body></html>';
		          $subject = 'new form submission';

		    mail($to, $subject, $message, $headers);
		    echo "<div style='padding: 50px 20px 80px; color: #fff; text-align: center;'><label>Thank you for using our form. We will be in contact with you as soon as possible.</label></div>";
		  }
		else
		  { echo "
		        <form method='post' action='".$_SERVER['SCRIPT_NAME']."'>
		        <div class='left'>
		        	<p>First Name</p>
					<div class='floating-placeholder'><input type='text' required name='applicantFirstName' id='firstName' size='10'><label for='firstName'>Michael</label></div>
		        	<p>Last Name</p>
					<div class='floating-placeholder'><input type='text' required name='applicantLastName'><label for=''>Scott</label></div>
		        	<p>Email Address</p>
					<div class='floating-placeholder'><input type='text' required name='email'><label for=''>creed@boboddy.com</label></div>
		        	<p>Phone Number</p>
					<div class='floating-placeholder'><input type='text' required name='phone_day'><label for=''></label></div>
					<div class='radios'>
						<input type='radio' id='home' name='phone-type' checked><label for='home'>Home</label>
						<input type='radio' id='work' name='phone-type'><label for='work'>Work</label>
						<input type='radio' id='cell' name='phone-type'><label for='cell'>Cell</label>
					</div><!--radios-->
			        <div>
			          <p>How did you get here?</p>
			          <select data-placeholder='select some stuff' style='width:100%;' class='chosen-select' multiple tabindex='7'>
			            <option value=''></option>
			            <option>Google search</option>
			            <option>other search engine</option>
			            <option>word of mouth</option>
			            <option>Facebook</option>
			            <option>other social media</option>
			            <option>other</option>
			          </select>
			        </div>
		    	</div><!--left-->
		    	<div class='right'>

			        <div>
			          <p>Project Type</p>
			          <select data-placeholder='select some stuff' style='width:100%;' class='chosen-select' multiple tabindex='6'>
			            <option value=''></option>
			            <optgroup label='Website Design & Development'>
			              <option>website audits</option>
			              <option>website wireframes</option>
			              <option>website design</option>
			              <option>website development</option>
			              <option>website optimization</option>
			              <option>other web work</option>
			            </optgroup>
			            <optgroup label='Digital Marketing & Strategy'>
			              <option>search engine optimization</option>
			              <option>search engine marketing</option>
			              <option>paid advertising</option>
			              <option>competitive analysis</option>
			              <option>other SEO/SEM work</option>
			            </optgroup>
			            <optgroup label='Graphic Design & Branding'>
			              <option>logo development</option>
			              <option>print collateral</option>
			              <option>advertisements</option>
			              <option>editorial layouts</option>
			              <option>other graphic design work</option>
			            </optgroup>
			            <optgroup label='Content Services'>
			              <option>copywriting</option>
			              <option>editing</option>
			              <option>press releases</option>
			              <option>blogs</option>
			              <option>email marketing</option>
			              <option>other content work</option>
			            </optgroup>
			            <optgroup label='Video & Photography'>
			              <option>scriptwriting</option>
			              <option>camera work</option>
			              <option>direction</option>
			              <option>production</option>
			              <option>editing</option>
			              <option>audio mixing</option>
			              <option>photo shoots</option>
			              <option>other video/photo work</option>
			            </optgroup>
			          </select>
			        </div>
			

        		    		<p>How May We Help You?</p>
      			    <textarea name='desc' id='desc' size='10'></textarea>

						<div class='checks'>
							  <input type='checkbox' id='newsletter' name='check-action' checked><label for='newsletter'>I’d like to receive the newsletter.</label>
							  <input type='checkbox' id='donation' name='check-action'><label for='donation'>I’d like to be friends.</label>
							  <input type='checkbox' id='patron' name='check-action'><label for='patron'>I can recite the code of the elves.</label>
						</div><!--checks-->

				</div><!--right-->
			        <div class='btn'><button class='submit' type='submit' name='submit'>Send Form</button></div>
		      </form>";
		      }
		    ?>

		</div><!--form-->

		</div><!--content-container-->

		<hr/>

	</div><!--inner-->

</section>
<script src="/_assets/js/chosen.jquery.min.js"></script>

  <script type="text/javascript">

		$(document).ready(function(){

			function updateText(event){
					var input=$(this);
					setTimeout(function(){
						var val=input.val();
						if(val!="")
							input.parent().addClass("floating-placeholder-float");
						else
							input.parent().removeClass("floating-placeholder-float");
					},1)
				}
				$(".floating-placeholder input").keydown(updateText);
				$(".floating-placeholder input").change(updateText);
				$("input:text").val("");

				$('input[placeholder="mm/dd/yyyy"]').bind('keyup',function(){
					var strokes = $(this).val().length;
					if(strokes === 2 || strokes === 5){
							var thisVal = $(this).val();
							thisVal += '/';
							$(this).val(thisVal);
					}
			});


		    var config = {
		      '.chosen-select'           : {},
		      '.chosen-select-deselect'  : {allow_single_deselect:true},
		      '.chosen-select-no-single' : {disable_search_threshold:10},
		      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
		      '.chosen-select-width'     : {width:"95%"}
		    }
		    for (var selector in config) {
		      $(selector).chosen(config[selector]);
		    }


		});

  </script>


<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>