<?php

/* node_modules/object-inspect/readme.markdown */
class __TwigTemplate_dd7d2e013d310ded46962fb7b42a242bd8566481c71b1eb91dc686a3b855bee2 extends Twig_Template
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
        $__internal_862b38fd504abfbc6a38f69f09cbb14113aba38bd2c4d368fe0e3950dbb180fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862b38fd504abfbc6a38f69f09cbb14113aba38bd2c4d368fe0e3950dbb180fa->enter($__internal_862b38fd504abfbc6a38f69f09cbb14113aba38bd2c4d368fe0e3950dbb180fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-inspect/readme.markdown"));

        // line 1
        echo "# object-inspect

string representations of objects in node and the browser

[![testling badge](https://ci.testling.com/substack/object-inspect.png)](https://ci.testling.com/substack/object-inspect)

[![build status](https://secure.travis-ci.org/substack/object-inspect.png)](http://travis-ci.org/substack/object-inspect)

# example

## circular

``` js
var inspect = require('object-inspect');
var obj = { a: 1, b: [3,4] };
obj.c = obj;
console.log(inspect(obj));
```

## dom element

``` js
var inspect = require('object-inspect');

var d = document.createElement('div');
d.setAttribute('id', 'beep');
d.innerHTML = '<b>wooo</b><i>iiiii</i>';

console.log(inspect([ d, { a: 3, b : 4, c: [5,6,[7,[8,[9]]]] } ]));
```

output:

```
[ <div id=\"beep\">...</div>, { a: 3, b: 4, c: [ 5, 6, [ 7, [ 8, [ ... ] ] ] ] } ]
```

# methods

``` js
var inspect = require('object-inspect')
```

## var s = inspect(obj, opts={})

Return a string `s` with the string representation of `obj` up to a depth of
`opts.depth`.

# install

With [npm](https://npmjs.org) do:

```
npm install object-inspect
```

# license

MIT
";
        
        $__internal_862b38fd504abfbc6a38f69f09cbb14113aba38bd2c4d368fe0e3950dbb180fa->leave($__internal_862b38fd504abfbc6a38f69f09cbb14113aba38bd2c4d368fe0e3950dbb180fa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-inspect/readme.markdown";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# object-inspect

string representations of objects in node and the browser

[![testling badge](https://ci.testling.com/substack/object-inspect.png)](https://ci.testling.com/substack/object-inspect)

[![build status](https://secure.travis-ci.org/substack/object-inspect.png)](http://travis-ci.org/substack/object-inspect)

# example

## circular

``` js
var inspect = require('object-inspect');
var obj = { a: 1, b: [3,4] };
obj.c = obj;
console.log(inspect(obj));
```

## dom element

``` js
var inspect = require('object-inspect');

var d = document.createElement('div');
d.setAttribute('id', 'beep');
d.innerHTML = '<b>wooo</b><i>iiiii</i>';

console.log(inspect([ d, { a: 3, b : 4, c: [5,6,[7,[8,[9]]]] } ]));
```

output:

```
[ <div id=\"beep\">...</div>, { a: 3, b: 4, c: [ 5, 6, [ 7, [ 8, [ ... ] ] ] ] } ]
```

# methods

``` js
var inspect = require('object-inspect')
```

## var s = inspect(obj, opts={})

Return a string `s` with the string representation of `obj` up to a depth of
`opts.depth`.

# install

With [npm](https://npmjs.org) do:

```
npm install object-inspect
```

# license

MIT
", "node_modules/object-inspect/readme.markdown", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-inspect/readme.markdown");
    }
}
