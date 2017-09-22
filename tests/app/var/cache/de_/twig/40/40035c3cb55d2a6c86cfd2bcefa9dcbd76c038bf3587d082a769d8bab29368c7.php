<?php

/* node_modules/shebang-regex/readme.md */
class __TwigTemplate_980fa6c532901a8f40188350c14eaa1c5d551c7cea4ad44bbb462461c25ed466 extends Twig_Template
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
        $__internal_e0ac86de70d83cfe63233d86a9f7fc101c0915e22166b990eaee24ad861b7772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ac86de70d83cfe63233d86a9f7fc101c0915e22166b990eaee24ad861b7772->enter($__internal_e0ac86de70d83cfe63233d86a9f7fc101c0915e22166b990eaee24ad861b7772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/shebang-regex/readme.md"));

        // line 1
        echo "# shebang-regex [![Build Status](https://travis-ci.org/sindresorhus/shebang-regex.svg?branch=master)](https://travis-ci.org/sindresorhus/shebang-regex)

> Regular expression for matching a [shebang](https://en.wikipedia.org/wiki/Shebang_(Unix))


## Install

```
\$ npm install --save shebang-regex
```


## Usage

```js
var shebangRegex = require('shebang-regex');
var str = '#!/usr/bin/env node\\nconsole.log(\"unicorns\");';

shebangRegex.test(str);
//=> true

shebangRegex.exec(str)[0];
//=> '#!/usr/bin/env node'
```


## License

MIT © [Sindre Sorhus](http://sindresorhus.com)
";
        
        $__internal_e0ac86de70d83cfe63233d86a9f7fc101c0915e22166b990eaee24ad861b7772->leave($__internal_e0ac86de70d83cfe63233d86a9f7fc101c0915e22166b990eaee24ad861b7772_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/shebang-regex/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# shebang-regex [![Build Status](https://travis-ci.org/sindresorhus/shebang-regex.svg?branch=master)](https://travis-ci.org/sindresorhus/shebang-regex)

> Regular expression for matching a [shebang](https://en.wikipedia.org/wiki/Shebang_(Unix))


## Install

```
\$ npm install --save shebang-regex
```


## Usage

```js
var shebangRegex = require('shebang-regex');
var str = '#!/usr/bin/env node\\nconsole.log(\"unicorns\");';

shebangRegex.test(str);
//=> true

shebangRegex.exec(str)[0];
//=> '#!/usr/bin/env node'
```


## License

MIT © [Sindre Sorhus](http://sindresorhus.com)
", "node_modules/shebang-regex/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/shebang-regex/readme.md");
    }
}
