## [WikkaWiki Reveal Handler plugin](https://github.com/oemunoz/Wikka-reveal-handler)

[![RevealJS](https://github.com/oemunoz/Wikka-reveal-handler/raw/master/images/Revealjs.jpg)](https://github.com/hakimel/reveal.js/)
[![WikkaWiki](https://github.com/oemunoz/Wikka-reveal-handler/raw/master/images/wizard.gif)](http://wikkawiki.org/HomePage)

---
### Important note 1!:
<!-- .slide: style="text-align: left;"> -->  
Now the code of plugin is on another directory, please this version of plugin is tested with reveal.js 4.1.0:

https://github.com/hakimel/reveal.js/releases/tag/4.1.0

```bash
plugins/handlers/reveal$ ls -1
images
Readme.md
reveal.js
reveal.php
```
---
### Important note 2!:
<!-- .slide: style="text-align: justify;"> -->  
Dependencies functionality is left in for backwards compatibility but has been deprecated as of reveal.js 4.0.0. In older versions reveal.js used a built-in dependency loader to load plugins.

```javascript
Reveal.initialize({
plugins: [ RevealMarkdown,RevealHighlight ]
//dependencies: [
//    { src: '<?php echo $site_base ?>plugins/handlers/reveal/reveal.js/plugin/markdown/markdown.js' },
//    { src: '<?php echo $site_base ?>plugins/handlers/reveal/reveal.js/plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } }
//  ]
});
```
---
### What is **Reveal Handler plugin**?

This is a a framework for easily creating beautiful presentations using HTML and markdown on Wikkawiki.

![Fisr slide](https://github.com/oemunoz/Wikka-reveal-handler/raw/master/images/reveal_fist.png)

---
### Why?

Is a very easy way to create and follow presentations with reveal.js.

---
### How?
<!-- .slide: style="text-align: justify;"> -->  
- This plugin works like any handler on WikkaWiki, supose that slide.md contains a presentation on Markdown format:

- With a markdown Handler (without markdown handler this view must be ugly, if you dont have yet take a look on [Wikka-md-handler](https://github.com/oemunoz/Wikka-md-handler)).

---
#### For example:
With a document that finish on ".md". (markdown format)

```
 wikka.php?wakka=slide.md
```

[![Markdown parser](https://github.com/oemunoz/Wikka-reveal-handler/raw/master/images/mmymdoc_parser.png)](https://github.com/oemunoz/Wikka-md-handler)

---
#### For example:

```
 wikka.php?wakka=slide.md/edit
```

![Edit Markdown](https://github.com/oemunoz/Wikka-reveal-handler/raw/master/images/reveal_markdown.png)
----
### How install it?

For this handler is good to get [Wikka-md-handler](https://github.com/oemunoz/Wikka-md-handler), but is not a requeriment.

---
### Easy steps:

1. Put this repo on "/plugins/handlers/reveal" directory.
2. Edit the Wakka.class.php for allow the reveal handler.

---
#### Clone Wikka-reveal-handler repo:

```bash
cd plugins/handlers/
mkdir reveal
git clone https://github.com/oemunoz/Wikka-reveal-handler.git reveal/
```

---
#### Download a copy of reveal.js:
```bash
reveal$ wget https://github.com/hakimel/reveal.js/archive/4.1.0.tar.gz
reveal$ tar -zxvf tar -zxvf 4.1.0.tar.gz 
```
Directory structure:
```bash
plugins/handlers/reveal$ ls 
images  js  Readme.md  reveal.js  reveal.php
```

---

Edit the follow code near to the end of "libs/Wakka.class.php", backup your original file and the new must be like:

```php
<?php ....
elseif($this->GetHandler() == 'reveal')
{
  print($this->Handler($this->GetHandler()));
}
.... ?>
```

---
Now, If you completed this, create a new document like this:
```
wikka.php?wakka=slides.md/edit
```
---

```markdown
# Reveal.js
### HTML Presentations Made Easy
![Example Pic](https://github.com/iush/iush.github.io/raw/master/images/bio-photo.jpg)

Created by [Hakim El Hattab][hakim]
 ----
# First
 ---
# Column 1, Slide 1
 ----
# Column 1, Slide 2
 ----
# Column 1, Slide 3
 ---
# Middle
 ---
# Column 2, Slide 1
 ----
# Column 2, Slide 2
 ----
# Column 2, Slide 3

 ----

# Last
# THE END
### BY Hakim El Hattab / hakim.se

[hakim]: http://hakim.se
```
---

And try to acces with:
```
wikka.php?wakka=slide.md/reveal
```

![Fisr slide](https://github.com/oemunoz/Wikka-reveal-handler/raw/master/images/reveal_fist.png)

---- 
## FAQs and TODOs

 - We can change the background?

> R: For now, is not, but on the follow release we gonna to allow to upload files with this in mind.

 - [ ] TODO: Create uploads directory.
 - [ ] TODO: Auto path images on the upload directory.

---
# Powered by:
- [WikkaWiki](http://wikkawiki.org/HomePage) is a flexible, standards-compliant and lightweight wiki engine written in PHP, which uses MySQL to store pages.
- [RevealJS](https://github.com/hakimel/reveal.js/) is a framework for easily creating beautiful presentations using HTML.

----
[[reveal.js]] [[slides]]
