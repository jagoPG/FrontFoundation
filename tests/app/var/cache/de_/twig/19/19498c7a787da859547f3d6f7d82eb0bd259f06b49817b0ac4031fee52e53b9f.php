<?php

/* node_modules/camelcase/readme.md */
class __TwigTemplate_e3bf2f339f8b92dd047875cb408bdd18a6d9623ba04570d95568aa8e092b58fd extends Twig_Template
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
        $__internal_363bfea8db1f39d9d596b04ddcfb85e431542c73a68f7cf216522088cb9ace71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363bfea8db1f39d9d596b04ddcfb85e431542c73a68f7cf216522088cb9ace71->enter($__internal_363bfea8db1f39d9d596b04ddcfb85e431542c73a68f7cf216522088cb9ace71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/camelcase/readme.md"));

        // line 1
        echo "# camelcase [![Build Status](https://travis-ci.org/sindresorhus/camelcase.svg?branch=master)](https://travis-ci.org/sindresorhus/camelcase)

> Convert a dash/dot/underscore/space separated string to camelCase: `foo-bar` → `fooBar`


## Install

```
\$ npm install --save camelcase
```


## Usage

```js
const camelCase = require('camelcase');

camelCase('foo-bar');
//=> 'fooBar'

camelCase('foo_bar');
//=> 'fooBar'

camelCase('Foo-Bar');
//=> 'fooBar'

camelCase('--foo.bar');
//=> 'fooBar'

camelCase('__foo__bar__');
//=> 'fooBar'

camelCase('foo bar');
//=> 'fooBar'

console.log(process.argv[3]);
//=> '--foo-bar'
camelCase(process.argv[3]);
//=> 'fooBar'

camelCase('foo', 'bar');
//=> 'fooBar'

camelCase('__foo__', '--bar');
//=> 'fooBar'
```


## Related

- [decamelize](https://github.com/sindresorhus/decamelize) - The inverse of this module
- [uppercamelcase](https://github.com/SamVerschueren/uppercamelcase) - Like this module, but to PascalCase instead of camelCase


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_363bfea8db1f39d9d596b04ddcfb85e431542c73a68f7cf216522088cb9ace71->leave($__internal_363bfea8db1f39d9d596b04ddcfb85e431542c73a68f7cf216522088cb9ace71_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/camelcase/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# camelcase [![Build Status](https://travis-ci.org/sindresorhus/camelcase.svg?branch=master)](https://travis-ci.org/sindresorhus/camelcase)

> Convert a dash/dot/underscore/space separated string to camelCase: `foo-bar` → `fooBar`


## Install

```
\$ npm install --save camelcase
```


## Usage

```js
const camelCase = require('camelcase');

camelCase('foo-bar');
//=> 'fooBar'

camelCase('foo_bar');
//=> 'fooBar'

camelCase('Foo-Bar');
//=> 'fooBar'

camelCase('--foo.bar');
//=> 'fooBar'

camelCase('__foo__bar__');
//=> 'fooBar'

camelCase('foo bar');
//=> 'fooBar'

console.log(process.argv[3]);
//=> '--foo-bar'
camelCase(process.argv[3]);
//=> 'fooBar'

camelCase('foo', 'bar');
//=> 'fooBar'

camelCase('__foo__', '--bar');
//=> 'fooBar'
```


## Related

- [decamelize](https://github.com/sindresorhus/decamelize) - The inverse of this module
- [uppercamelcase](https://github.com/SamVerschueren/uppercamelcase) - Like this module, but to PascalCase instead of camelCase


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/camelcase/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/camelcase/readme.md");
    }
}
