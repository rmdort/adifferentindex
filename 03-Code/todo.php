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

  <title>To do</title>
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

<style type="text/css">
ul {
	margin-bottom: 24px;
}
.done {
	text-decoration: line-through;
}
</style>

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
			<h1>To do</h1>
			<h2>Development</h2>
			<ul>
				<li>Home page layout
					<ul>
						<li>Home page content blocks</li>
						<li>possibility for feature blocks</li>
						<li>the link should be the whole article block, not just its content</li>
						<li>column picker script improvements
							<ul>
								<li>option links only available when js enabled (and on home)</li>
								<li>cookie check when return visit</li>
								<li>maybe slightly animate transitions?</li>
							</ul>
						</li>
						<li>media queries for smaller screens</li>
					</ul>
				</li>
				<li>Search
					<ul>
						<li>Markup</li>
						<li>CSS</li>
						<li>PHP/JS google search API</li>
						<li>Advanced search page</li>
						<li>Results page</li>
					</ul>
				</li>
				<li>About content</li>
				<li>Disclaimer / terms of use
					<ul>
					<li>Some sort of text explaining that if someone who's mentioned who would rather not be listed can contact us and we'll remove the entry</li>
					<li>Something about liability for data not being accurate or up to date</li>
					</ul>
				</li>
				<li>Microformats</li>
				<li>OO javascript</li>
				<li>Grid slider
					<ul>
						<li>with cookie</li>
					</ul>
				</li>
				<li>Colophon page - see humans.txt</li>
				<li class="done">Convert to PHP</li>
				<li>Backend
					<ul>
						<li>Serverside minifications</li>
						<li>image optimizations</li>
						<li>gzipping</li>
						<li>font mime types</li>
					</ul>
				</li>
			</ul>
			<h2>Design</h2>
			<ul>
				<li>New colour scheme?</li>
				<li>Use of microformats</li>
				<li>Possible event listing</li>
			</ul>
			<h2>Tests</h2>
			<ul>
				<li>Non js test</li>
				<li>Non css test</li>
				<li>Non images test</li>
				<li>Keyboard test</li>
				<li><a href="http://lite.launchlist.net/" title="">Launchlist lite test</a></li>
				<li><a href="http://webtypography.net/" title="">Typography</a></li>
			</ul>
		</div>
		<aside role="complementary">
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