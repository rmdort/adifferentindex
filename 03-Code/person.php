<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Person template</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">


  <!-- CSS: implied media="all" -->
  <?php include('inc/styles.inc'); ?>    

  <!-- Uncomment if you are specifically targeting less enabled mobile browsers
  <link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <?php include('inc/scripts_head.inc'); ?>

</head>

<body>
<div id="outer">
  <div id="container">
  	<?php include('inc/header.inc'); ?>
    <section class="grid">
    	<aside role="navigation">
	    	<?php include('inc/navigations.inc'); ?>
    	</aside>
		<div id="main" role="main">
			<h1>Nils Hendriks</h1>
			<img src="img/nilshendriks.jpg" alt="photo of Nils Hendriks" />
			<p class="caption">Photograph by Nils Hendriks</p>
			<h2>Data</h2>
			<table summary="This table shows data about this company">
				<caption>table caption</caption>
				<tbody>
					<tr>
						<th>Website</th>
						<td><a class="external" href="http://nilshendriks.com" title="">nilshendriks.com</a></td>
					</tr>
					<tr>
						<th>Jobtitle</th>
						<td>Front End Web Developer</td>
					</tr>
					<tr>
						<th>Skillset</th>
						<td>
							<ul>
								<li><abbr title="HyperText Markup Language">HTML</abbr></li>
								<li><abbr title="Cascading Style Sheets">CSS</abbr></li>
								<li>unobtrusive Javascript (jQuery)</li>
								<li>Web Standards Consulting</li>
							</ul>
						</td>
					</tr>
					<tr>
						<th>Projects</th>
						<td>
							<ul>
								<li><a class="external" href="https://www.icscards.nl/" title="">ICS</a> – <a href="page.html" title="to this company's profile page">Edenspiekermann</a></li>
								<li><a class="external" href="http://www.noord-holland.nl/" title="">PNH</a> – Edenspiekermann</li>
								<li>ABNAMRO – Edenspiekermann</li>								
								<li><a class="external" href="http://www.contactsingapore.sg/" title="">Contact SG</a> – Convertium</li>
								<li>Vodafone India Mobile – Qais Consulting</li>
								<li><abbr title="Civil Aviation Authority of Singapore"><a class="external" href="http://www.caas.gov.sg/">CAAS</a></abbr> - Qais Consulting</li>
							</ul>
						</td>
					</tr>
					<tr>
						<th>Location</th>
						<td>Singapore</td>
					</tr>
										
					
<!--
					Other sites				Stencils - stencil.posterous.com
										Blog - blog.nilshendriks.com
										Photography - 
										photography.nilshendriks.com
										Playground - playground.nilshendriks.com-->
					

				</tbody>
			</table>
			<h2>Background</h2>
			<p>Born and raised in The Netherlands and schooled as a Master of Arts in Film Studies. During these studies he was sidetracked by something called the World Wide Web in 1995 and it has been both his work- and playfield ever since.</p>
			<p>Years of self teaching and working for several companies eventually lead to landing a position at Eden, now Edenspiekermann before moving to Singapore in 2007.</p>
		</div>
		<aside role="complementary">
			<p>A Different Index tries to collect data about companies and people who build websites. Focused on Singapore and The Netherlands for now.</p>
			<a href="#" title="">About ADI</a>
			<h2>Contributors</h2>
			<ul>
				<li><a href="#" title="">Vinay M</a></li>
				<li><a href="person.html" title="">Nils Hendriks</a></li>
			</ul>
		</aside>
    </section>
    <?php include('inc/footer.inc'); ?>
  </div> <!--! end of #container -->
</div>

  <!-- JavaScript at the bottom for fast page loading -->
<?php include('inc/scripts.inc'); ?>

</body>
</html>