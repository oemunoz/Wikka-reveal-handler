<?php
$site_base = WIKKA_BASE_URL;
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>reveal.js</title>

		<link rel="stylesheet" href="<?php echo $site_base ?>plugins/handlers/reveal/css/reveal.css">
		<link rel="stylesheet" href="<?php echo $site_base ?>plugins/handlers/reveal/css/theme/moon.css">

		<!-- Theme used for syntax highlighting of code -->
		<link rel="stylesheet" href="<?php echo $site_base ?>plugins/handlers/reveal/lib/css/zenburn.css">

		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? '<?php echo $site_base ?>plugins/handlers/reveal/css/print/pdf.css' : '<?php echo $site_base ?>plugins/handlers/reveal/css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>
	</head>
	<body>
		<div class="reveal">
			<div class="slides">
				<section data-markdown="<?php echo $site_base ?>wikka.php?wakka=<?php echo $this->GetPageTag() ?>/raw"
				 data-separator="^----"
				 data-separator-vertical="^-=-="
				 data-transition="slide-in fade-out"
         data-separator-notes="^Note:"
         data-charset="iso-8859-15">
        </section>
			</div>
		</div>

		<script src="<?php echo $site_base ?>plugins/handlers/reveal/lib/js/head.min.js"></script>
		<script src="<?php echo $site_base ?>plugins/handlers/reveal/js/reveal.js"></script>

		<script>
			// More info https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				history: true,

				// More info https://github.com/hakimel/reveal.js#dependencies
				dependencies: [
					{ src: '<?php echo $site_base ?>plugins/handlers/reveal/plugin/markdown/marked.js' },
					{ src: '<?php echo $site_base ?>plugins/handlers/reveal/plugin/markdown/markdown.js' },
					{ src: '<?php echo $site_base ?>plugins/handlers/reveal/plugin/notes/notes.js', async: true },
					{ src: '<?php echo $site_base ?>plugins/handlers/reveal/plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } }
				]
			});
		</script>
	</body>
</html>
