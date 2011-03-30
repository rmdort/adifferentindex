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

  <title>Page template</title>
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
			<h1>Edenspiekermann</h1>
			<img src="img/logo-es.png" alt="logo Edenspiekermann" />
			<h2>Data</h2>
			<table summary="This table shows data about this company">
				<caption>table caption</caption>
				<tbody>
					<tr>
						<th>Website</th>
						<td><a class="external" href="http://edenspiekermann.com" title="">edenspiekermann.com</a></td>
					</tr>
					<tr>
						<th>Projects</th>
						<td>
							<ul>
								<li><abbr>ICS</abbr></li>
								<li>UCB</li>
								<li>KNAW</li>
								<li>AEGON</li>
								<li>Soundprism</li>
							</ul>
						</td>
					</tr>
					<tr>
						<th>Creatives</th>
						<td>
							<ul>
								<li><a href="#" title="">Anja Cronenberg</a> – Web Designer</li>
								<li>Stijn Verhoeven – Design Director</li>
							</ul>
						</td>
					</tr>
					<tr>
						<th>Offices</th>
						<td>
							<ul>
								<li><a href="#" title="">Amsterdam</a>, The Netherlands</li>
								<li>Berlin, Germany</li>
								<li>Stuttgart, Germany</li>
							</ul>
						</td>
					</tr>
				</tbody>
			</table>
<!--			
			
			Management			Rik Koster – Partner
								Edo van Dijk
								Erik Spiekermann – Managing Partner
			
			Creatives				Anja Cronenberg – Web Designer
								Stijn Verhoeven – Design Director
								Meral Hirsch – Interaction Designer
								Joost Holthuis – Creative Director
								Erik Spiekermann – Creative Director
								Nick van der Linde – Interaction Designer
			
-->			
			<h2>Background</h2>
			<p>Edenspiekermann is an agency for strategy, design and communication with offices in Amsterdam, Berlin, Stuttgart. The design agency is the result of a merger in 2009 between Eden design <span class="amp">&amp;</span> communication Amsterdam and SpiekermannPartners Berlin, founded by German typographer Erik Spiekermann.</p>
			
<!--			<p>Filed under  // company Amsterdam Berlin<br />
			Posted by Nils Hendriks </p>-->
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