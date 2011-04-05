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

  <title>Jussi Edlun</title>
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
			<h1>Jussi Edlund</h1>
<!--			<img src="img/nilshendriks.jpg" alt="photo of Nils Hendriks" />
			<p class="caption">Photograph by Nils Hendriks</p>
-->			
			<h2>Data</h2>
			<table summary="This table shows data about this person">
				<caption class="hidden">table caption</caption>
				<tbody>
					<tr>
						<th>Website</th>
						<td><a class="external" href="http://jussi.se/" title="">http://jussi.se/</a></td>
					</tr>
					<tr>
						<th>Jobtitle</th>
						<td>Art Director / Graphic Designer</td>
					</tr>
<!--					<tr>
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
-->					
					<tr>
						<th>Projects</th>
						<td>
							<ul>
								<li>Gameplan</li>
								<li><a class="external" href="https://gothere.sg/" title="">gothere.sg</a> – <a href="site.php" title="to this project's profile page">gothere.sg</a>
								<li><a class="external" href="http://www.hungrygowhere.com/" title="">hungrygowhere</a></li>
							</ul>
						</td>
					</tr>
					<tr>
						<th>Location</th>
						<td>Singapore</td>
					</tr>
				</tbody>
			</table>
			<h2>Background</h2>
			<p>Visual designer from Sweden, living in Singapore.</p>
		</div>
		<aside role="complementary">
			<div id="hcard-Jussi-Edlund" class="vcard">
			 <span class="fn">Jussi Edlund</span>
			 <div class="org">Sapient</div>
			<div class="tags"><a href="http://kitchen.technorati.com/contacts/tag/developer">designer</a> </div>
			</div>
			<a class="download" href="#">Download vCard</a>
		</aside>
    </section>
    <?php include('inc/footer.inc'); ?>
  </div> <!--! end of #container -->
</div>

  <!-- JavaScript at the bottom for fast page loading -->
<?php include('inc/scripts.inc'); ?>

</body>
</html>