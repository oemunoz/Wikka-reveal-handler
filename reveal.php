<?php
$site_base = WIKKA_BASE_URL;
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<title>reveal.js</title>

		<link rel="stylesheet" href="<?php echo $site_base ?>plugins/handlers/reveal/reveal.js/dist/reveal.css">
		<link rel="stylesheet" href="<?php echo $site_base ?>plugins/handlers/reveal/reveal.js/dist/theme/league.css">
		<link rel="stylesheet" href="<?php echo $site_base ?>plugins/handlers/reveal/js/mermaid.css">

		<!-- Theme used for syntax highlighting of code -->
		<link rel="stylesheet" href="<?php echo $site_base ?>plugins/handlers/reveal/reveal.js/plugin/highlight/monokai.css">

		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? '<?php echo $site_base ?>plugins/handlers/reveal/reveal.js/css/print/pdf.scss' : '<?php echo $site_base ?>plugins/handlers/reveal/reveal.js/css/print/paper.scss';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>
	</head>
	<body>
		<div class="reveal">
			<div class="slides">
				<section data-markdown="<?php echo $site_base ?>wikka.php?wakka=<?php echo $this->GetPageTag() ?>/raw"
				 data-separator="^----"
				 data-separator-vertical="^---"
				 data-transition="slide-in fade-out"
         data-separator-notes="^Note:"
         data-charset="iso-8859-15">
        </section>
			</div>
		</div>

		<script src="<?php echo $site_base ?>plugins/handlers/reveal/reveal.js/dist/reveal.js"></script>
		<script src="<?php echo $site_base ?>plugins/handlers/reveal/reveal.js/plugin/markdown/markdown.js"></script>
		<script src="<?php echo $site_base ?>plugins/handlers/reveal/reveal.js/plugin/highlight/highlight.js"></script>
		<script src="<?php echo $site_base ?>plugins/handlers/reveal/js/mermaid.min.js"></script>

		<script>
Reveal.initialize({
plugins: [ RevealMarkdown,RevealHighlight ]
//dependencies: [
//    { src: '<?php echo $site_base ?>plugins/handlers/reveal/reveal.js/plugin/markdown/markdown.js' },
//    { src: '<?php echo $site_base ?>plugins/handlers/reveal/reveal.js/plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } }
//  ]
});

//Reveal.addEventListener('ready', (event) => {
//});
		</script>
	</body>
</html>
