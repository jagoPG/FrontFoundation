<?php

/* node_modules/glob-parent/README.md */
class __TwigTemplate_37e230fd02d36fc7556d4754e7ac921c0a21a72c72fedb65e7acdda256fc02b3 extends Twig_Template
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
        $__internal_3de48083cca5821e0bcbe5fe3e9deb586083c31e1407a60fc57464257ab36c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de48083cca5821e0bcbe5fe3e9deb586083c31e1407a60fc57464257ab36c29->enter($__internal_3de48083cca5821e0bcbe5fe3e9deb586083c31e1407a60fc57464257ab36c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/glob-parent/README.md"));

        // line 1
        echo "glob-parent [![Build Status](https://travis-ci.org/es128/glob-parent.svg)](https://travis-ci.org/es128/glob-parent) [![Coverage Status](https://img.shields.io/coveralls/es128/glob-parent.svg)](https://coveralls.io/r/es128/glob-parent?branch=master)
======
Javascript module to extract the non-magic parent path from a glob string.

[![NPM](https://nodei.co/npm/glob-parent.png?downloads=true&downloadRank=true&stars=true)](https://nodei.co/npm/glob-parent/)
[![NPM](https://nodei.co/npm-dl/glob-parent.png?height=3&months=9)](https://nodei.co/npm-dl/glob-parent/)

Usage
-----
```sh
npm install glob-parent --save
```

```js
var globParent = require('glob-parent');

globParent('path/to/*.js'); // 'path/to'
globParent('/root/path/to/*.js'); // '/root/path/to'
globParent('/*.js'); // '/'
globParent('*.js'); // '.'
globParent('**/*.js'); // '.'
globParent('path/{to,from}'); // 'path'
globParent('path/!(to|from)'); // 'path'
globParent('path/?(to|from)'); // 'path'
globParent('path/+(to|from)'); // 'path'
globParent('path/*(to|from)'); // 'path'
globParent('path/@(to|from)'); // 'path'
globParent('path/**/*'); // 'path'

// if provided a non-glob path, returns the nearest dir
globParent('path/foo/bar.js'); // 'path/foo'
globParent('path/foo/'); // 'path/foo'
globParent('path/foo'); // 'path' (see issue #3 for details)

```

Change Log
----------
[See release notes page on GitHub](https://github.com/es128/glob-parent/releases)

License
-------
[ISC](https://raw.github.com/es128/glob-parent/master/LICENSE)
";
        
        $__internal_3de48083cca5821e0bcbe5fe3e9deb586083c31e1407a60fc57464257ab36c29->leave($__internal_3de48083cca5821e0bcbe5fe3e9deb586083c31e1407a60fc57464257ab36c29_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/glob-parent/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("glob-parent [![Build Status](https://travis-ci.org/es128/glob-parent.svg)](https://travis-ci.org/es128/glob-parent) [![Coverage Status](https://img.shields.io/coveralls/es128/glob-parent.svg)](https://coveralls.io/r/es128/glob-parent?branch=master)
======
Javascript module to extract the non-magic parent path from a glob string.

[![NPM](https://nodei.co/npm/glob-parent.png?downloads=true&downloadRank=true&stars=true)](https://nodei.co/npm/glob-parent/)
[![NPM](https://nodei.co/npm-dl/glob-parent.png?height=3&months=9)](https://nodei.co/npm-dl/glob-parent/)

Usage
-----
```sh
npm install glob-parent --save
```

```js
var globParent = require('glob-parent');

globParent('path/to/*.js'); // 'path/to'
globParent('/root/path/to/*.js'); // '/root/path/to'
globParent('/*.js'); // '/'
globParent('*.js'); // '.'
globParent('**/*.js'); // '.'
globParent('path/{to,from}'); // 'path'
globParent('path/!(to|from)'); // 'path'
globParent('path/?(to|from)'); // 'path'
globParent('path/+(to|from)'); // 'path'
globParent('path/*(to|from)'); // 'path'
globParent('path/@(to|from)'); // 'path'
globParent('path/**/*'); // 'path'

// if provided a non-glob path, returns the nearest dir
globParent('path/foo/bar.js'); // 'path/foo'
globParent('path/foo/'); // 'path/foo'
globParent('path/foo'); // 'path' (see issue #3 for details)

```

Change Log
----------
[See release notes page on GitHub](https://github.com/es128/glob-parent/releases)

License
-------
[ISC](https://raw.github.com/es128/glob-parent/master/LICENSE)
", "node_modules/glob-parent/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/glob-parent/README.md");
    }
}
