<?php

/* node_modules/commondir/readme.markdown */
class __TwigTemplate_8e8854e26906c8c6c9627e2bf9269bf763d259d80a0aa3b33d1868a4bdb4a344 extends Twig_Template
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
        $__internal_8a1d223a428557dfd391026e3e1661a48028fba43e7d7ff5796351455922d42c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1d223a428557dfd391026e3e1661a48028fba43e7d7ff5796351455922d42c->enter($__internal_8a1d223a428557dfd391026e3e1661a48028fba43e7d7ff5796351455922d42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/commondir/readme.markdown"));

        // line 1
        echo "# commondir

compute the closest common parent directory among an array of directories

# example

``` js
var commondir = require('commondir');
var dir = commondir(process.argv.slice(2))
console.log(dir);
```

output:

```
\$ node dir.js /x/y/z /x/y /x/y/w/q
/x/y
\$ node ../baz ../../foo/quux ./bizzy
/foo
```

# methods

``` js
var commondir = require('commondir');
```

## commondir(absolutePaths)

Compute the closest common parent directory for an array `absolutePaths`.

## commondir(basedir, relativePaths)

Compute the closest common parent directory for an array `relativePaths` which
will be resolved for each `dir` in `relativePaths` according to:
`path.resolve(basedir, dir)`.

# install

With [npm](https://npmjs.org) do:

```
npm install commondir
```

# license

MIT
";
        
        $__internal_8a1d223a428557dfd391026e3e1661a48028fba43e7d7ff5796351455922d42c->leave($__internal_8a1d223a428557dfd391026e3e1661a48028fba43e7d7ff5796351455922d42c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/commondir/readme.markdown";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# commondir

compute the closest common parent directory among an array of directories

# example

``` js
var commondir = require('commondir');
var dir = commondir(process.argv.slice(2))
console.log(dir);
```

output:

```
\$ node dir.js /x/y/z /x/y /x/y/w/q
/x/y
\$ node ../baz ../../foo/quux ./bizzy
/foo
```

# methods

``` js
var commondir = require('commondir');
```

## commondir(absolutePaths)

Compute the closest common parent directory for an array `absolutePaths`.

## commondir(basedir, relativePaths)

Compute the closest common parent directory for an array `relativePaths` which
will be resolved for each `dir` in `relativePaths` according to:
`path.resolve(basedir, dir)`.

# install

With [npm](https://npmjs.org) do:

```
npm install commondir
```

# license

MIT
", "node_modules/commondir/readme.markdown", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/commondir/readme.markdown");
    }
}
