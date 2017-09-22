<?php

/* node_modules/lcid/readme.md */
class __TwigTemplate_9b4fa7ea88d6d836aab8d57ed65f952c123f7cd716badeaa01792ef3b0a87a7b extends Twig_Template
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
        $__internal_28b0555a00906cf16f421bb45dc3d1d4417ca31cfc567304d4d6c9af4a0d4394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b0555a00906cf16f421bb45dc3d1d4417ca31cfc567304d4d6c9af4a0d4394->enter($__internal_28b0555a00906cf16f421bb45dc3d1d4417ca31cfc567304d4d6c9af4a0d4394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lcid/readme.md"));

        // line 1
        echo "# lcid [![Build Status](https://travis-ci.org/sindresorhus/lcid.svg?branch=master)](https://travis-ci.org/sindresorhus/lcid)

> Mapping between [standard locale identifiers](http://en.wikipedia.org/wiki/Locale) and [Windows locale identifiers (LCID)](http://en.wikipedia.org/wiki/Locale#Specifics_for_Microsoft_platforms)

Based on the [mapping](https://github.com/python/cpython/blob/be2a1a76fa43bb1ea1b3577bb5bdd506a2e90e37/Lib/locale.py#L1395-L1604) used in the Python standard library.

The mapping itself is just a [JSON file](lcid.json) and can be used wherever.


## Install

```
\$ npm install --save lcid
```


## Usage

```js
var lcid = require('lcid');

lcid.from(1044);
//=> 'nb_NO'

lcid.to('nb_NO');
//=> 1044

lcid.all;
//=> {'af_ZA': 1078, ...}
```


## License

MIT © [Sindre Sorhus](http://sindresorhus.com)
";
        
        $__internal_28b0555a00906cf16f421bb45dc3d1d4417ca31cfc567304d4d6c9af4a0d4394->leave($__internal_28b0555a00906cf16f421bb45dc3d1d4417ca31cfc567304d4d6c9af4a0d4394_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lcid/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# lcid [![Build Status](https://travis-ci.org/sindresorhus/lcid.svg?branch=master)](https://travis-ci.org/sindresorhus/lcid)

> Mapping between [standard locale identifiers](http://en.wikipedia.org/wiki/Locale) and [Windows locale identifiers (LCID)](http://en.wikipedia.org/wiki/Locale#Specifics_for_Microsoft_platforms)

Based on the [mapping](https://github.com/python/cpython/blob/be2a1a76fa43bb1ea1b3577bb5bdd506a2e90e37/Lib/locale.py#L1395-L1604) used in the Python standard library.

The mapping itself is just a [JSON file](lcid.json) and can be used wherever.


## Install

```
\$ npm install --save lcid
```


## Usage

```js
var lcid = require('lcid');

lcid.from(1044);
//=> 'nb_NO'

lcid.to('nb_NO');
//=> 1044

lcid.all;
//=> {'af_ZA': 1078, ...}
```


## License

MIT © [Sindre Sorhus](http://sindresorhus.com)
", "node_modules/lcid/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lcid/readme.md");
    }
}
