<?php

/* node_modules/fsevents/node_modules/wrappy/README.md */
class __TwigTemplate_2210bc21cf985b537d4dd4ccbbf94bc3cb85dedb0efbf9606eea352c77c61a08 extends Twig_Template
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
        $__internal_4d8f3fc10ed66b24b7ce9c67b281297536f26dd3805e64f16cc22ed6dace2538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8f3fc10ed66b24b7ce9c67b281297536f26dd3805e64f16cc22ed6dace2538->enter($__internal_4d8f3fc10ed66b24b7ce9c67b281297536f26dd3805e64f16cc22ed6dace2538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/wrappy/README.md"));

        // line 1
        echo "# wrappy

Callback wrapping utility

## USAGE

```javascript
var wrappy = require(\"wrappy\")

// var wrapper = wrappy(wrapperFunction)

// make sure a cb is called only once
// See also: http://npm.im/once for this specific use case
var once = wrappy(function (cb) {
  var called = false
  return function () {
    if (called) return
    called = true
    return cb.apply(this, arguments)
  }
})

function printBoo () {
  console.log('boo')
}
// has some rando property
printBoo.iAmBooPrinter = true

var onlyPrintOnce = once(printBoo)

onlyPrintOnce() // prints 'boo'
onlyPrintOnce() // does nothing

// random property is retained!
assert.equal(onlyPrintOnce.iAmBooPrinter, true)
```
";
        
        $__internal_4d8f3fc10ed66b24b7ce9c67b281297536f26dd3805e64f16cc22ed6dace2538->leave($__internal_4d8f3fc10ed66b24b7ce9c67b281297536f26dd3805e64f16cc22ed6dace2538_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/wrappy/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# wrappy

Callback wrapping utility

## USAGE

```javascript
var wrappy = require(\"wrappy\")

// var wrapper = wrappy(wrapperFunction)

// make sure a cb is called only once
// See also: http://npm.im/once for this specific use case
var once = wrappy(function (cb) {
  var called = false
  return function () {
    if (called) return
    called = true
    return cb.apply(this, arguments)
  }
})

function printBoo () {
  console.log('boo')
}
// has some rando property
printBoo.iAmBooPrinter = true

var onlyPrintOnce = once(printBoo)

onlyPrintOnce() // prints 'boo'
onlyPrintOnce() // does nothing

// random property is retained!
assert.equal(onlyPrintOnce.iAmBooPrinter, true)
```
", "node_modules/fsevents/node_modules/wrappy/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/wrappy/README.md");
    }
}
