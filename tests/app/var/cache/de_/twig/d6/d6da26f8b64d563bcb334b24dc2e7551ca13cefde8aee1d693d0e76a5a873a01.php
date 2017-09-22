<?php

/* node_modules/json-stringify-safe/README.md */
class __TwigTemplate_6ceabfc370474bc639151dbb6313f8ab93ab85da671710900db5630ba97943a1 extends Twig_Template
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
        $__internal_8fa510c254b5dbecaac0ba015a2bda50c2f126b27466870a3d1c35a7ed3be435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa510c254b5dbecaac0ba015a2bda50c2f126b27466870a3d1c35a7ed3be435->enter($__internal_8fa510c254b5dbecaac0ba015a2bda50c2f126b27466870a3d1c35a7ed3be435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-stringify-safe/README.md"));

        // line 1
        echo "# json-stringify-safe

Like JSON.stringify, but doesn't throw on circular references.

## Usage

Takes the same arguments as `JSON.stringify`.

```javascript
var stringify = require('json-stringify-safe');
var circularObj = {};
circularObj.circularRef = circularObj;
circularObj.list = [ circularObj, circularObj ];
console.log(stringify(circularObj, null, 2));
```

Output:

```json
{
  \"circularRef\": \"[Circular]\",
  \"list\": [
    \"[Circular]\",
    \"[Circular]\"
  ]
}
```

## Details

```
stringify(obj, serializer, indent, decycler)
```

The first three arguments are the same as to JSON.stringify.  The last
is an argument that's only used when the object has been seen already.

The default `decycler` function returns the string `'[Circular]'`.
If, for example, you pass in `function(k,v){}` (return nothing) then it
will prune cycles.  If you pass in `function(k,v){ return {foo: 'bar'}}`,
then cyclical objects will always be represented as `{\"foo\":\"bar\"}` in
the result.

```
stringify.getSerialize(serializer, decycler)
```

Returns a serializer that can be used elsewhere.  This is the actual
function that's passed to JSON.stringify.

**Note** that the function returned from `getSerialize` is stateful for now, so
do **not** use it more than once.
";
        
        $__internal_8fa510c254b5dbecaac0ba015a2bda50c2f126b27466870a3d1c35a7ed3be435->leave($__internal_8fa510c254b5dbecaac0ba015a2bda50c2f126b27466870a3d1c35a7ed3be435_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-stringify-safe/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# json-stringify-safe

Like JSON.stringify, but doesn't throw on circular references.

## Usage

Takes the same arguments as `JSON.stringify`.

```javascript
var stringify = require('json-stringify-safe');
var circularObj = {};
circularObj.circularRef = circularObj;
circularObj.list = [ circularObj, circularObj ];
console.log(stringify(circularObj, null, 2));
```

Output:

```json
{
  \"circularRef\": \"[Circular]\",
  \"list\": [
    \"[Circular]\",
    \"[Circular]\"
  ]
}
```

## Details

```
stringify(obj, serializer, indent, decycler)
```

The first three arguments are the same as to JSON.stringify.  The last
is an argument that's only used when the object has been seen already.

The default `decycler` function returns the string `'[Circular]'`.
If, for example, you pass in `function(k,v){}` (return nothing) then it
will prune cycles.  If you pass in `function(k,v){ return {foo: 'bar'}}`,
then cyclical objects will always be represented as `{\"foo\":\"bar\"}` in
the result.

```
stringify.getSerialize(serializer, decycler)
```

Returns a serializer that can be used elsewhere.  This is the actual
function that's passed to JSON.stringify.

**Note** that the function returned from `getSerialize` is stateful for now, so
do **not** use it more than once.
", "node_modules/json-stringify-safe/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-stringify-safe/README.md");
    }
}
