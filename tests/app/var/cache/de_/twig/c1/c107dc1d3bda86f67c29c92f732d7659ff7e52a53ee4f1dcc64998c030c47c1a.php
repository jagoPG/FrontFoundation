<?php

/* node_modules/assert/README.md */
class __TwigTemplate_0e1fbb783348c2580c4e797108b470f2d0366cf816d31640648b2c96818f22cc extends Twig_Template
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
        $__internal_e5b32e008c583d183d8bef294f2a38363aa5514267caffa3de9a0d9e2f2d4296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b32e008c583d183d8bef294f2a38363aa5514267caffa3de9a0d9e2f2d4296->enter($__internal_e5b32e008c583d183d8bef294f2a38363aa5514267caffa3de9a0d9e2f2d4296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/assert/README.md"));

        // line 1
        echo "# assert

[![Build Status](https://travis-ci.org/defunctzombie/commonjs-assert.svg?branch=master)](https://travis-ci.org/defunctzombie/commonjs-assert)

This module is used for writing unit tests for your applications, you can access it with require('assert').

The API is derived from the [commonjs 1.0 unit testing](http://wiki.commonjs.org/wiki/Unit_Testing/1.0) spec and the [node.js assert module](http://nodejs.org/api/assert.html)

## assert.fail(actual, expected, message, operator)
Throws an exception that displays the values for actual and expected separated by the provided operator.

## assert(value, message), assert.ok(value, [message])
Tests if value is truthy, it is equivalent to assert.equal(true, !!value, message);

## assert.equal(actual, expected, [message])
Tests shallow, coercive equality with the equal comparison operator ( == ).

## assert.notEqual(actual, expected, [message])
Tests shallow, coercive non-equality with the not equal comparison operator ( != ).

## assert.deepEqual(actual, expected, [message])
Tests for deep equality.

## assert.notDeepEqual(actual, expected, [message])
Tests for any deep inequality.

## assert.strictEqual(actual, expected, [message])
Tests strict equality, as determined by the strict equality operator ( === )

## assert.notStrictEqual(actual, expected, [message])
Tests strict non-equality, as determined by the strict not equal operator ( !== )

## assert.throws(block, [error], [message])
Expects block to throw an error. error can be constructor, regexp or validation function.

Validate instanceof using constructor:

```javascript
assert.throws(function() { throw new Error(\"Wrong value\"); }, Error);
```

Validate error message using RegExp:

```javascript
assert.throws(function() { throw new Error(\"Wrong value\"); }, /value/);
```

Custom error validation:

```javascript
assert.throws(function() {
    throw new Error(\"Wrong value\");
}, function(err) {
    if ( (err instanceof Error) && /value/.test(err) ) {
        return true;
    }
}, \"unexpected error\");
```

## assert.doesNotThrow(block, [message])
Expects block not to throw an error, see assert.throws for details.

## assert.ifError(value)
Tests if value is not a false value, throws if it is a true value. Useful when testing the first argument, error in callbacks.
";
        
        $__internal_e5b32e008c583d183d8bef294f2a38363aa5514267caffa3de9a0d9e2f2d4296->leave($__internal_e5b32e008c583d183d8bef294f2a38363aa5514267caffa3de9a0d9e2f2d4296_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/assert/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# assert

[![Build Status](https://travis-ci.org/defunctzombie/commonjs-assert.svg?branch=master)](https://travis-ci.org/defunctzombie/commonjs-assert)

This module is used for writing unit tests for your applications, you can access it with require('assert').

The API is derived from the [commonjs 1.0 unit testing](http://wiki.commonjs.org/wiki/Unit_Testing/1.0) spec and the [node.js assert module](http://nodejs.org/api/assert.html)

## assert.fail(actual, expected, message, operator)
Throws an exception that displays the values for actual and expected separated by the provided operator.

## assert(value, message), assert.ok(value, [message])
Tests if value is truthy, it is equivalent to assert.equal(true, !!value, message);

## assert.equal(actual, expected, [message])
Tests shallow, coercive equality with the equal comparison operator ( == ).

## assert.notEqual(actual, expected, [message])
Tests shallow, coercive non-equality with the not equal comparison operator ( != ).

## assert.deepEqual(actual, expected, [message])
Tests for deep equality.

## assert.notDeepEqual(actual, expected, [message])
Tests for any deep inequality.

## assert.strictEqual(actual, expected, [message])
Tests strict equality, as determined by the strict equality operator ( === )

## assert.notStrictEqual(actual, expected, [message])
Tests strict non-equality, as determined by the strict not equal operator ( !== )

## assert.throws(block, [error], [message])
Expects block to throw an error. error can be constructor, regexp or validation function.

Validate instanceof using constructor:

```javascript
assert.throws(function() { throw new Error(\"Wrong value\"); }, Error);
```

Validate error message using RegExp:

```javascript
assert.throws(function() { throw new Error(\"Wrong value\"); }, /value/);
```

Custom error validation:

```javascript
assert.throws(function() {
    throw new Error(\"Wrong value\");
}, function(err) {
    if ( (err instanceof Error) && /value/.test(err) ) {
        return true;
    }
}, \"unexpected error\");
```

## assert.doesNotThrow(block, [message])
Expects block not to throw an error, see assert.throws for details.

## assert.ifError(value)
Tests if value is not a false value, throws if it is a true value. Useful when testing the first argument, error in callbacks.
", "node_modules/assert/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/assert/README.md");
    }
}
