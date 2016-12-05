# WikkaWiki Markdown Handler plugin
[![RevealJS](https://github.com/oemunoz/Wikka-reveal-handler/raw/master/images/Markdown.png)](https://github.com/hakimel/reveal.js/)
[![WikkaWiki](https://github.com/oemunoz/Wikka-reveal-handler/raw/master/images/wizard.gif)](http://wikkawiki.org/HomePage)

## What is this?
This is a a framework for easily creating beautiful presentations using HTML and markdown on Wikkawiki.

![Fisr slide](https://github.com/oemunoz/Wikka-reveal-handler/raw/master/images/reveal_fist.png)


Easy steps:

1. Put this repo on "/plugins/handlers/md" directory.




## Why?
Is a very easy way to create and follow presentations with reveal.js.

## How?
This plugin works like any handler on WikkaWiki, supose that slide.md contains a presentation on Markdown format:

1. With a Handler md.
For example:
```
 wikka.php?wakka=slide.md
```
![Markdown parser](https://github.com/oemunoz/Wikka-reveal-handler/raw/master/images/mmymdoc_parser.png)

1. With a document that finish on ".md".
For example:
```
 wikka.php?wakka=slide.md/reveal
```

![Edit Markdown](https://github.com/oemunoz/Wikka-reveal-handler/raw/master/images/reveal_markdown.png)

### How install it?
This plugins has two behaviors:

#### Install the handler:
The first is like a simple Handler, this meaning that you have to add "/md" to the end of the url. In any case you have to install the handler for both opions:

1. Drop this repo on your "/plugins/handlers/md" directory.

Directory Estructure:

```language-bash
cd plugins/handlers/
git clone https://github.com/oemunoz/Wikka-md-handler.git md/
```

![Directory estructure](https://github.com/oemunoz/Wikka-md-handler/raw/master/images/md_handler.png)

1. Copy the prism.js and prims.css to your "templates" directory (look into your configuration file your theme classic/kubric/light and copy on your respective css/js directorys).

```language-php
<?php
....
'theme' => 'classic'
....
?>

```

Now, If you completed this, create a new document like this:

~~~~
wikka.php?wakka=mmymdoc
~~~~

~~~~language-markdown
# Cacti docker container

First Header  | Second Header
------------- | -------------
Content Cell  | Content Cell
Content Cell  | Content Cell

```language-css
.example {
		font-size: 2em;
	}
```
~~~~

And try to acces with:
~~~~
wikka.php?wakka=mmymdoc/md
~~~~

#### Configure for automatic access:
If you are like me, you want to access to the document direct without adding "/md", then you have to add the support for the ".md" extencion on your wikis documents.

Edit the follow code near to the end of "libs/Wakka.class.php", backup your original file and the new must be like:

```language-php
elseif( $this->GetHandler() == 'show' && pathinfo($this->GetPageTag(), PATHINFO_EXTENSION) == 'md' && $this->page['body'] != '' )
{
  // Hugly handler but util.
  $this->Handler($this->handler = 'md');
  echo $this->Header();
  echo $this->Handler($this->GetHandler());
  echo $this->Footer();
}
```
On any case I leave a copy of my Wakka.class.php on the project/expamples/ directory.

From now you can create mmymdoc.md and the system gonna to use the Markdown parser automaticly. (you can access to the edit page with dobleclik like the normal way.)

```
 wikka.php?wakka=mmymdoc.md
```

![Edit Markdown](https://github.com/oemunoz/Wikka-md-handler/raw/master/images/mmymdoc_edit.png)

If you dont have highliht review the css and js prism path:

![Parse Markdown](https://github.com/oemunoz/Wikka-md-handler/raw/master/images/mmymdoc_parse.png)

> Note that the current Geshi buttons are for the Wikka format, Im am working on use the [yii2-markdown](https://github.com/kartik-v/yii2-markdown), for the edit controls. But Markdown is not a dificult Format to learn.

## FAQs and TODOs

- The handler have another flavors of markdown?

> R: Yes the cebe parse have anothers flavors (traditional, GitHub, extra). By default is extra flavor, but you can change this on pd.php file. Check for the cebe documentation, and the [markdown extra](https://kramdown.gettalong.org/syntax.html) for the especific formated.

- The plugins works on with this handler?

> R: For now, is not, plugins like "files" and "Category" etc, are not availables with the md plugins. (I need some time for check if it is posible and/or necesary).

- [ ] TODO: Ask for add the css and js on the header.php by default.
- [ ] TODO: Check for the common div and html objets css styles, I only check the table css style.
- [ ] TODO: Check for the TOC Generator.
- [ ] TODO: Review how to use the [yii2-markdown](https://github.com/kartik-v/yii2-markdown).
- [ ] TODO: Review for Atom plugin.
- [ ] TODO: Check if the checklist option is available. :-(

# Powered by:
- [WikkaWiki](http://wikkawiki.org/HomePage) is a flexible, standards-compliant and lightweight wiki engine written in PHP, which uses MySQL to store pages.
- [RevealJS](https://github.com/hakimel/reveal.js/) is a framework for easily creating beautiful presentations using HTML.
