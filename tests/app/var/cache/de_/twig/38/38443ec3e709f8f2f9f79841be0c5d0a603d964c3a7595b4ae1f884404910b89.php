<?php

/* node_modules/fstream-ignore/README.md */
class __TwigTemplate_6c5375ef4b638e813d6e8984c97a893d584bc12ab1e8f5648617ec94c3b7ed25 extends Twig_Template
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
        $__internal_e51a2a16a145c1a6166cd28222d7154f479b9c54ceebe2fdde678ef27aa75b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51a2a16a145c1a6166cd28222d7154f479b9c54ceebe2fdde678ef27aa75b24->enter($__internal_e51a2a16a145c1a6166cd28222d7154f479b9c54ceebe2fdde678ef27aa75b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fstream-ignore/README.md"));

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
        
        $__internal_e51a2a16a145c1a6166cd28222d7154f479b9c54ceebe2fdde678ef27aa75b24->leave($__internal_e51a2a16a145c1a6166cd28222d7154f479b9c54ceebe2fdde678ef27aa75b24_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fstream-ignore/README.md";
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
", "node_modules/fstream-ignore/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fstream-ignore/README.md");
    }
}
