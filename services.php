<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<title>Services | Ready Set Go</title>
<meta name="description" content="">
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/navigation.php'); //navigation?>

<section>

	<div class="inner">
	
		<div id="services">

			<h1 class="sub">Services</h1>

		</div><!--services-->

	</div><!--inner-->

</section>

<section class="content services">
	
	<div class="inner">

		<div class="content-container">

			<h3>We’ll make it happen</h3>

			<p>We offer everything from custom web design and interactive development to integrated online marketing campaigns and digital video production. And we always tailor our services to meet your needs.</p>

			<div id="accordion">
			    <div class="panel panel-one">
			        <div class="title"><h4>Website Design &amp; Development</h4></div>
			        <div class="reveal">
			        	<div class="left">
				        	<p>website audits</p>
				            <p>website wireframes</p>
				            <p>website design</p>
			            </div>
			            <div class="right">
				            <p>website development</p>
				            <p>website optimization</p>
				            <p>other web work</p>
				        </div>
			        </div>
			    </div>
			    <div class="panel panel-two">
			        <div class="title"><h4>Digital Marketing &amp; Strategy</h4></div>
			        <div class="reveal">
			        	<div class="left">
				        	<p>search engine optimization</p>
				            <p>search engine marketing</p>
				            <p>paid advertising</p>
			            </div>
			            <div class="right">
				            <p>competitive analysis</p>
				            <p>other SEO/SEM work</p>
				        </div>
			        </div>
			    </div> 
			     <div class="panel panel-three">
			        <div class="title"><h4>Graphic Design &amp; Branding</h4></div>
			        <div class="reveal">
			        	<div class="left">
				        	<p>logo development</p>
				            <p>print collateral</p>
				            <p>stationery</p>
			            </div>
			            <div class="right">
				            <p>advertisements</p>
				            <p>editorial layouts</p>
				            <p>other graphic design</p>
				        </div>
			        </div>
			    </div>
			     <div class="panel panel-four">
			        <div class="title"><h4>Content Services</h4></div>
			        <div class="reveal">
			        	<div class="left">
				        	<p>copywriting</p>
				            <p>editing</p>
				            <p>direction</p>
			            </div>
			            <div class="right">
				            <p>blogs</p>
				            <p>email marketing</p>
				            <p>and whatever your heart desires</p>
				        </div>
			        </div>
			    </div> 
			     <div class="panel panel-five">
			        <div class="title"><h4>Video &amp; Photography</h4></div>
			        <div class="reveal">
			        	<div class="left">
				        	<p>scriptwriting</p>
				            <p>camera work</p>
				            <p>direction</p>
				            <p>production</p>
			            </div>
			            <div class="right">
				            <p>editing</p>
				            <p>audio mixing</p>
				            <p>photo shoots</p>
				            <p>other video/photo work</p>
				        </div>
			        </div>
			    </div> 
			</div>



		</div><!--content-container-->

		<hr/>

		<div class="btn"><a class="button" href="/team.php">Sounds good. So who are you?</a></div><!--btn-->

		<hr/>

	</div><!--inner-->

</section><!--content-->

<script>
$('.title').on('click', function(e) {
    
    $('.reveal').slideUp('active');
    
    var target = $(this).next('.reveal');
    
    if (target.is(':visible')) {
        target.slideUp();
    } else {
        target.slideDown();
    }
});
</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>