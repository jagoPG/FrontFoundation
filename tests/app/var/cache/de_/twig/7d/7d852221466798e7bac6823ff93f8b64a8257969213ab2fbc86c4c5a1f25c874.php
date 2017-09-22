<?php

/* node_modules/fsevents/node_modules/fstream-ignore/README.md */
class __TwigTemplate_09d87183d0faf6ca2044519cebb5c25f11902a1bf63c1a54bdb159761ba32827 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2bd72ac209299fe2dda7b6095af1788b2d8f82863ca23035b23d9d711a7d8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2bd72ac209299fe2dda7b6095af1788b2d8f82863ca23035b23d9d711a7d8d0->enter($__internal_f2bd72ac209299fe2dda7b6095af1788b2d8f82863ca23035b23d9d711a7d8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/fstream-ignore/README.md"));

        // line 1
        echo "# fstream-ignore

A fstream DirReader that filters out files that match globs in `.ignore`
files throughout the tree, like how git ignores files based on a
`.gitignore` file.

Here's an example:

```javascript
var Ignore = require(\"fstream-ignore\")
Ignore({ path: __dirname
       , ignoreFiles: [\".ignore\", \".gitignore\"]
       })
  .on(\"child\", function (c) {
    console.error(c.path.substr(c.root.path.length + 1))
  })
  .pipe(tar.Pack())
  .pipe(fs.createWriteStream(\"foo.tar\"))
```

This will tar up the files in __dirname into `foo.tar`, ignoring
anything matched by the globs in any .iginore or .gitignore file.
";
        
        $__internal_f2bd72ac209299fe2dda7b6095af1788b2d8f82863ca23035b23d9d711a7d8d0->leave($__internal_f2bd72ac209299fe2dda7b6095af1788b2d8f82863ca23035b23d9d711a7d8d0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/fstream-ignore/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# fstream-ignore

A fstream DirReader that filters out files that match globs in `.ignore`
files throughout the tree, like how git ignores files based on a
`.gitignore` file.

Here's an example:

```javascript
var Ignore = require(\"fstream-ignore\")
Ignore({ path: __dirname
       , ignoreFiles: [\".ignore\", \".gitignore\"]
       })
  .on(\"child\", function (c) {
    console.error(c.path.substr(c.root.path.length + 1))
  })
  .pipe(tar.Pack())
  .pipe(fs.createWriteStream(\"foo.tar\"))
```

This will tar up the files in __dirname into `foo.tar`, ignoring
anything matched by the globs in any .iginore or .gitignore file.
", "node_modules/fsevents/node_modules/fstream-ignore/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/fstream-ignore/README.md");
    }
}
